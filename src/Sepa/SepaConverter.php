<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Sepa;

use DateTime;
use Exception;
use SentiaSk\CommonBundleSymfony\Sepa\Exception\BadRequestSepaException;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\AccountIdentification4ChoiceType;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\AmountType3ChoiceType;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\Authorisation1ChoiceType;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\CashAccount24Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\CreditTransferTransaction6Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\CustomerCreditTransferInitiationV05Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\Document;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\FinancialInstitutionIdentification8Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\GroupHeader48Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\PaymentIdentification1Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\PaymentInstruction9Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\PaymentTypeInformation19Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\RemittanceInformation7Type;
use SentiaSk\CommonBundleSymfony\Sepa\PainModel\ServiceLevel8ChoiceType;

class SepaConverter
{

    public string $prikazca;

    private array $transactions = array();

    private int $controlSum = 0;

    /**
     * @throws Exception
     */
    public function createPainModel(string $prikazca = 'Sentia s.r.o.'): Document
    {
        $this->prikazca = $prikazca;
        /** @var DateTime $stamp */
        $stamp = DateTime::createFromFormat('U.u', (string)microtime(true));
        if (!array_key_exists('0', $this->transactions)) {
            throw new Exception('Žiadne transakcie neboli nájdené');
        }
        /** @var Transaction $transaction */
        $transaction = $this->transactions[0];
        $deptorExecutionDate = $transaction->datumPrevodu;
        $deptorIBAN = $transaction->prikazcaUcet;

        $authChoiceType = $this->createAuthChoiceType();
        $party = $this->createPartyIdentification();
        $header = $this->createHeader($stamp, $authChoiceType, $party);
        $paymentType = $this->createPaymentType();
        $account = $this->createCashAcount($deptorIBAN);
        $payment = $this->createPaymentInstruction(
            $stamp,
            $paymentType,
            $deptorExecutionDate,
            $party,
            $account,
        );

        $document = $this->createDomDocument($header, $payment);

        foreach ($this->transactions as $transaction) {
            $this->checkConsistency($transaction, $deptorIBAN, $deptorExecutionDate);

            $amount = $this->createAmount($transaction);
//            $creditAgent = $this->createCreditAgent($transaction);
            $creditParty = $this->createCreditParty($transaction);
            $cashAccount = $this->createCashAccount($transaction);
            $trans = $this->createCreditTransferTransaction(
                $transaction,
                $amount,
//                $creditAgent,
                $creditParty,
                $cashAccount
            );

            $payment->addToCdtTrfTxInf($trans);
        }


        return $document;
    }

    private function createCashAccount(AbstractTransaction $transaction): CashAccount24Type
    {
        $cashAccount = (new CashAccount24Type())
            ->setId(new AccountIdentification4ChoiceType());
        $cashAccount->getId()->setIBAN($transaction->prijemcaUcet);
        return $cashAccount;
    }

    private function createCreditParty(AbstractTransaction $transaction): PartyIdentification43Type
    {
        return (new PartyIdentification43Type())
            ->setNm($transaction->popis);
    }

    private function createCreditAgent(AbstractTransaction $transaction
    ): BranchAndFinancialInstitutionIdentification5Type {
        $creditAgent = (new BranchAndFinancialInstitutionIdentification5Type())
            ->setFinInstnId(new FinancialInstitutionIdentification8Type());
        $creditAgent->getFinInstnId()->setBICFI($transaction->prijemcaBanka);
        return $creditAgent;
    }

    private function createAmount(AbstractTransaction $transaction): ActiveOrHistoricCurrencyAndAmountType
    {
        return (new ActiveOrHistoricCurrencyAndAmountType(StringNumberModifier::intToStringModify($transaction->suma)))
            ->setCcy($transaction->mena);
    }

    private function createCreditTransferTransaction(
        AbstractTransaction $transaction,
        ActiveOrHistoricCurrencyAndAmountType $amount,
//        BranchAndFinancialInstitutionIdentification5Type $creditAgent,
        PartyIdentification43Type $creditParty,
        CashAccount24Type $cashAccount
    ): CreditTransferTransaction6Type {
        $trans = (new CreditTransferTransaction6Type())
            ->setPmtId(new PaymentIdentification1Type())
            ->setAmt(new AmountType3ChoiceType())
            ->setRmtInf(new RemittanceInformation7Type())
            ->setChrgBr('SLEV')
//            ->setCdtrAgt($creditAgent)
            ->setCdtr($creditParty)
            ->setCdtrAcct($cashAccount);
        $trans->getPmtId()->setEndToEndId($this->createEndToEnd($transaction));
        $trans->getAmt()->setInstdAmt($amount);
        $trans->getRmtInf()->addToUstrd($transaction->popis2);
        return $trans;
    }

    private function createAuthChoiceType(): Authorisation1ChoiceType
    {
        return (new Authorisation1ChoiceType())
            ->setPrtry('BATCH');
    }

    private function createPartyIdentification(): PartyIdentification43Type
    {
        return (new PartyIdentification43Type())
            ->setNm($this->prikazca);
    }

    private function createHeader(
        DateTime $stamp,
        Authorisation1ChoiceType $auth,
        PartyIdentification43Type $party
    ): GroupHeader48Type {
        return (new GroupHeader48Type())
            ->setMsgId('MessageId')
            ->setCreDtTm($stamp)
            ->addToAuthstn($auth)
            ->setNbOfTxs((string)count($this->transactions))
            ->setCtrlSum(StringNumberModifier::intToStringModify($this->controlSum))
            ->setInitgPty($party);
    }

    private function createPaymentType(): PaymentTypeInformation19Type
    {
        $paymentType = (new PaymentTypeInformation19Type())
            ->setInstrPrty('NORM')
            ->setSvcLvl(new ServiceLevel8ChoiceType());
        $paymentType->getSvcLvl()->setCd('SEPA');
        return $paymentType;
    }

    private function createCashAcount(string $deptorIBAN): CashAccount24Type
    {
        $account = (new CashAccount24Type())
            ->setId(new AccountIdentification4ChoiceType());
        $account->getId()->setIBAN($deptorIBAN);
        return $account;
    }

    private function createPaymentInstruction(
        DateTime $stamp,
        PaymentTypeInformation19Type $paymentType,
        DateTime $deptorExecutionDate,
        PartyIdentification43Type $party,
        CashAccount24Type $account,
    ): PaymentInstruction9Type {
        return (new PaymentInstruction9Type())
            ->setPmtInfId('"PMTID-"' . $stamp->format("Y-m-d\TH:i:s.u"))
            ->setPmtMtd('TRF')
            ->setPmtTpInf($paymentType)
            ->setReqdExctnDt($deptorExecutionDate)
            ->setDbtr($party)
            ->setDbtrAcct($account)
            ->setChrgBr('SLEV');
    }

    private function createDomDocument(GroupHeader48Type $header, PaymentInstruction9Type $payment): Document
    {
        // CustomerCreditTransferInitiationV05Type
        $document = new Document();
        $document->setCstmrCdtTrfInitn(new CustomerCreditTransferInitiationV05Type());
        $document->getCstmrCdtTrfInitn()
            ->setGrpHdr($header)
            ->addToPmtInf($payment);
        return $document;
    }

    /**
     * @throws Exception
     */
    private function checkConsistency(
        AbstractTransaction $transaction,
        string $deptorIBAN,
        DateTime $deptorExecutionDate
    ): void {
        if ($transaction->prikazcaUcet !== $deptorIBAN) {
            if ($transaction instanceof CsvRow) {
                throw new BadRequestSepaException(
                    frontEndMessage: 'Účet príkazcu(odberateľa) nie je rovnaký, riadok: ' . $transaction->rowNumber
                );
            }
            throw new BadRequestSepaException(
                frontEndMessage: 'Účet príkazcu(odberateľa) nie je rovnaký',
            );
        }
        if ($transaction->datumPrevodu->format('Y-m-d') !== $deptorExecutionDate->format('Y-m-d')) {
            if ($transaction instanceof CsvRow) {
                throw new BadRequestSepaException(
                    frontEndMessage: 'Dátum prevodu nie je rovnaký, riadok: ' . $transaction->rowNumber
                );
            }
            throw new BadRequestSepaException(frontEndMessage: 'Dátum prevodu nie je rovnaký');
        }
    }

    private function createEndToEnd(AbstractTransaction $transaction): string
    {
        return '/VS' . $transaction->vs . '/SS' . $transaction->ss . '/KS' . $transaction->ks;
    }

    public function addTransaction(AbstractTransaction $transaction): void
    {
        $this->transactions[] = $transaction;
        $this->controlSum += $transaction->suma;
    }
}