<?php

namespace SentiaSk\CommonBundleSymfony\Sepa;

use DateTime;
use Symfony\Component\Uid\Uuid;

class Transaction extends AbstractTransaction
{
    public string $prijemcaBanka;

    /**
     * @throws \Exception
     */
    public function __construct(
        public string $className,
        public Uuid $uuid,
        public string $prikazcaUcet,
        public string $prijemcaUcet,
        public string $mena,
        public int $suma,
        public DateTime $datumPrevodu,
        public string $vs,
        public string|null $ks = null,
        public string|null $ss = null,
        public string|null $popis = null,
        public string|null $popis2 = null
    ) {
        parent::__construct(
            $this->prikazcaUcet,
            $this->prijemcaUcet,
            $this->mena,
            $this->suma,
            $this->datumPrevodu,
            $this->vs,
            $this->ks,
            $this->ss,
            $this->popis,
            $this->popis2
        );
    }

    public static function create(TransactionInterface $transaction): self
    {
        /** @var DateTime $paymentAt */
        $paymentAt = $transaction->getPaymentAt();
        return new self(
            $transaction->getClassName(),
            $transaction->getUuid(),
            str_replace(' ', '', $transaction->getCustomerIban()),
            str_replace(' ', '', $transaction->getSupplierIban()),
            'EUR',
            $transaction->getPrice(),
            $paymentAt->modify('00:00:00'),
            $transaction->getVariableSymbol(),
            $transaction->getConstantSymbol(),
            $transaction->getSpecificSymbol(),
            $transaction->getPaymentNote(),
            $transaction->getPaymentNote()
        );
    }
}