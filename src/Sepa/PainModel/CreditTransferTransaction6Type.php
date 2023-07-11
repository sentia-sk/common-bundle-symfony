<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing CreditTransferTransaction6Type
 *
 * 
 * XSD Type: CreditTransferTransaction6
 */
class CreditTransferTransaction6Type
{

    /**
     * @property \App\Model\Sepa\PainModel\PaymentIdentification1Type $pmtId
     */
    private $pmtId = null;

    /**
     * @property \App\Model\Sepa\PainModel\PaymentTypeInformation19Type $pmtTpInf
     */
    private $pmtTpInf = null;

    /**
     * @property \App\Model\Sepa\PainModel\AmountType3ChoiceType $amt
     */
    private $amt = null;

    /**
     * @property \App\Model\Sepa\PainModel\ExchangeRate1Type $xchgRateInf
     */
    private $xchgRateInf = null;

    /**
     * @property string $chrgBr
     */
    private $chrgBr = null;

    /**
     * @property \App\Model\Sepa\PainModel\Cheque7Type $chqInstr
     */
    private $chqInstr = null;

    /**
     * @property \App\Model\Sepa\PainModel\PartyIdentification43Type $ultmtDbtr
     */
    private $ultmtDbtr = null;

    /**
     * @property \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     * $intrmyAgt1
     */
    private $intrmyAgt1 = null;

    /**
     * @property \App\Model\Sepa\PainModel\CashAccount24Type $intrmyAgt1Acct
     */
    private $intrmyAgt1Acct = null;

    /**
     * @property \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     * $intrmyAgt2
     */
    private $intrmyAgt2 = null;

    /**
     * @property \App\Model\Sepa\PainModel\CashAccount24Type $intrmyAgt2Acct
     */
    private $intrmyAgt2Acct = null;

    /**
     * @property \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     * $intrmyAgt3
     */
    private $intrmyAgt3 = null;

    /**
     * @property \App\Model\Sepa\PainModel\CashAccount24Type $intrmyAgt3Acct
     */
    private $intrmyAgt3Acct = null;

    /**
     * @property \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $cdtrAgt
     */
    private $cdtrAgt = null;

    /**
     * @property \App\Model\Sepa\PainModel\CashAccount24Type $cdtrAgtAcct
     */
    private $cdtrAgtAcct = null;

    /**
     * @property \App\Model\Sepa\PainModel\PartyIdentification43Type $cdtr
     */
    private $cdtr = null;

    /**
     * @property \App\Model\Sepa\PainModel\CashAccount24Type $cdtrAcct
     */
    private $cdtrAcct = null;

    /**
     * @property \App\Model\Sepa\PainModel\PartyIdentification43Type $ultmtCdtr
     */
    private $ultmtCdtr = null;

    /**
     * @property \App\Model\Sepa\PainModel\InstructionForCreditorAgent1Type[] $instrForCdtrAgt
     */
    private $instrForCdtrAgt = null;

    /**
     * @property string $instrForDbtrAgt
     */
    private $instrForDbtrAgt = null;

    /**
     * @property \App\Model\Sepa\PainModel\Purpose2ChoiceType $purp
     */
    private $purp = null;

    /**
     * @property \App\Model\Sepa\PainModel\RegulatoryReporting3Type[] $rgltryRptg
     */
    private $rgltryRptg = null;

    /**
     * @property \App\Model\Sepa\PainModel\TaxInformation3Type $tax
     */
    private $tax = null;

    /**
     * @property \App\Model\Sepa\PainModel\RemittanceLocation2Type[] $rltdRmtInf
     */
    private $rltdRmtInf = null;

    /**
     * @property \App\Model\Sepa\PainModel\RemittanceInformation7Type $rmtInf
     */
    private $rmtInf = null;

    /**
     * @property \App\Model\Sepa\PainModel\SupplementaryData1Type[] $splmtryData
     */
    private $splmtryData = null;

    /**
     * Gets as pmtId
     *
     * @return \App\Model\Sepa\PainModel\PaymentIdentification1Type
     */
    public function getPmtId()
    {
        return $this->pmtId;
    }

    /**
     * Sets a new pmtId
     *
     * @param \App\Model\Sepa\PainModel\PaymentIdentification1Type $pmtId
     * @return self
     */
    public function setPmtId(\App\Model\Sepa\PainModel\PaymentIdentification1Type $pmtId)
    {
        $this->pmtId = $pmtId;
        return $this;
    }

    /**
     * Gets as pmtTpInf
     *
     * @return \App\Model\Sepa\PainModel\PaymentTypeInformation19Type
     */
    public function getPmtTpInf()
    {
        return $this->pmtTpInf;
    }

    /**
     * Sets a new pmtTpInf
     *
     * @param \App\Model\Sepa\PainModel\PaymentTypeInformation19Type $pmtTpInf
     * @return self
     */
    public function setPmtTpInf(\App\Model\Sepa\PainModel\PaymentTypeInformation19Type $pmtTpInf)
    {
        $this->pmtTpInf = $pmtTpInf;
        return $this;
    }

    /**
     * Gets as amt
     *
     * @return \App\Model\Sepa\PainModel\AmountType3ChoiceType
     */
    public function getAmt()
    {
        return $this->amt;
    }

    /**
     * Sets a new amt
     *
     * @param \App\Model\Sepa\PainModel\AmountType3ChoiceType $amt
     * @return self
     */
    public function setAmt(\App\Model\Sepa\PainModel\AmountType3ChoiceType $amt)
    {
        $this->amt = $amt;
        return $this;
    }

    /**
     * Gets as xchgRateInf
     *
     * @return \App\Model\Sepa\PainModel\ExchangeRate1Type
     */
    public function getXchgRateInf()
    {
        return $this->xchgRateInf;
    }

    /**
     * Sets a new xchgRateInf
     *
     * @param \App\Model\Sepa\PainModel\ExchangeRate1Type $xchgRateInf
     * @return self
     */
    public function setXchgRateInf(\App\Model\Sepa\PainModel\ExchangeRate1Type $xchgRateInf)
    {
        $this->xchgRateInf = $xchgRateInf;
        return $this;
    }

    /**
     * Gets as chrgBr
     *
     * @return string
     */
    public function getChrgBr()
    {
        return $this->chrgBr;
    }

    /**
     * Sets a new chrgBr
     *
     * @param string $chrgBr
     * @return self
     */
    public function setChrgBr($chrgBr)
    {
        $this->chrgBr = $chrgBr;
        return $this;
    }

    /**
     * Gets as chqInstr
     *
     * @return \App\Model\Sepa\PainModel\Cheque7Type
     */
    public function getChqInstr()
    {
        return $this->chqInstr;
    }

    /**
     * Sets a new chqInstr
     *
     * @param \App\Model\Sepa\PainModel\Cheque7Type $chqInstr
     * @return self
     */
    public function setChqInstr(\App\Model\Sepa\PainModel\Cheque7Type $chqInstr)
    {
        $this->chqInstr = $chqInstr;
        return $this;
    }

    /**
     * Gets as ultmtDbtr
     *
     * @return \App\Model\Sepa\PainModel\PartyIdentification43Type
     */
    public function getUltmtDbtr()
    {
        return $this->ultmtDbtr;
    }

    /**
     * Sets a new ultmtDbtr
     *
     * @param \App\Model\Sepa\PainModel\PartyIdentification43Type $ultmtDbtr
     * @return self
     */
    public function setUltmtDbtr(\App\Model\Sepa\PainModel\PartyIdentification43Type $ultmtDbtr)
    {
        $this->ultmtDbtr = $ultmtDbtr;
        return $this;
    }

    /**
     * Gets as intrmyAgt1
     *
     * @return \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     */
    public function getIntrmyAgt1()
    {
        return $this->intrmyAgt1;
    }

    /**
     * Sets a new intrmyAgt1
     *
     * @param \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $intrmyAgt1
     * @return self
     */
    public function setIntrmyAgt1(\App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $intrmyAgt1)
    {
        $this->intrmyAgt1 = $intrmyAgt1;
        return $this;
    }

    /**
     * Gets as intrmyAgt1Acct
     *
     * @return \App\Model\Sepa\PainModel\CashAccount24Type
     */
    public function getIntrmyAgt1Acct()
    {
        return $this->intrmyAgt1Acct;
    }

    /**
     * Sets a new intrmyAgt1Acct
     *
     * @param \App\Model\Sepa\PainModel\CashAccount24Type $intrmyAgt1Acct
     * @return self
     */
    public function setIntrmyAgt1Acct(\App\Model\Sepa\PainModel\CashAccount24Type $intrmyAgt1Acct)
    {
        $this->intrmyAgt1Acct = $intrmyAgt1Acct;
        return $this;
    }

    /**
     * Gets as intrmyAgt2
     *
     * @return \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     */
    public function getIntrmyAgt2()
    {
        return $this->intrmyAgt2;
    }

    /**
     * Sets a new intrmyAgt2
     *
     * @param \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $intrmyAgt2
     * @return self
     */
    public function setIntrmyAgt2(\App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $intrmyAgt2)
    {
        $this->intrmyAgt2 = $intrmyAgt2;
        return $this;
    }

    /**
     * Gets as intrmyAgt2Acct
     *
     * @return \App\Model\Sepa\PainModel\CashAccount24Type
     */
    public function getIntrmyAgt2Acct()
    {
        return $this->intrmyAgt2Acct;
    }

    /**
     * Sets a new intrmyAgt2Acct
     *
     * @param \App\Model\Sepa\PainModel\CashAccount24Type $intrmyAgt2Acct
     * @return self
     */
    public function setIntrmyAgt2Acct(\App\Model\Sepa\PainModel\CashAccount24Type $intrmyAgt2Acct)
    {
        $this->intrmyAgt2Acct = $intrmyAgt2Acct;
        return $this;
    }

    /**
     * Gets as intrmyAgt3
     *
     * @return \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     */
    public function getIntrmyAgt3()
    {
        return $this->intrmyAgt3;
    }

    /**
     * Sets a new intrmyAgt3
     *
     * @param \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $intrmyAgt3
     * @return self
     */
    public function setIntrmyAgt3(\App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $intrmyAgt3)
    {
        $this->intrmyAgt3 = $intrmyAgt3;
        return $this;
    }

    /**
     * Gets as intrmyAgt3Acct
     *
     * @return \App\Model\Sepa\PainModel\CashAccount24Type
     */
    public function getIntrmyAgt3Acct()
    {
        return $this->intrmyAgt3Acct;
    }

    /**
     * Sets a new intrmyAgt3Acct
     *
     * @param \App\Model\Sepa\PainModel\CashAccount24Type $intrmyAgt3Acct
     * @return self
     */
    public function setIntrmyAgt3Acct(\App\Model\Sepa\PainModel\CashAccount24Type $intrmyAgt3Acct)
    {
        $this->intrmyAgt3Acct = $intrmyAgt3Acct;
        return $this;
    }

    /**
     * Gets as cdtrAgt
     *
     * @return \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     */
    public function getCdtrAgt()
    {
        return $this->cdtrAgt;
    }

    /**
     * Sets a new cdtrAgt
     *
     * @param \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $cdtrAgt
     * @return self
     */
    public function setCdtrAgt(\App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $cdtrAgt)
    {
        $this->cdtrAgt = $cdtrAgt;
        return $this;
    }

    /**
     * Gets as cdtrAgtAcct
     *
     * @return \App\Model\Sepa\PainModel\CashAccount24Type
     */
    public function getCdtrAgtAcct()
    {
        return $this->cdtrAgtAcct;
    }

    /**
     * Sets a new cdtrAgtAcct
     *
     * @param \App\Model\Sepa\PainModel\CashAccount24Type $cdtrAgtAcct
     * @return self
     */
    public function setCdtrAgtAcct(\App\Model\Sepa\PainModel\CashAccount24Type $cdtrAgtAcct)
    {
        $this->cdtrAgtAcct = $cdtrAgtAcct;
        return $this;
    }

    /**
     * Gets as cdtr
     *
     * @return \App\Model\Sepa\PainModel\PartyIdentification43Type
     */
    public function getCdtr()
    {
        return $this->cdtr;
    }

    /**
     * Sets a new cdtr
     *
     * @param \App\Model\Sepa\PainModel\PartyIdentification43Type $cdtr
     * @return self
     */
    public function setCdtr(\App\Model\Sepa\PainModel\PartyIdentification43Type $cdtr)
    {
        $this->cdtr = $cdtr;
        return $this;
    }

    /**
     * Gets as cdtrAcct
     *
     * @return \App\Model\Sepa\PainModel\CashAccount24Type
     */
    public function getCdtrAcct()
    {
        return $this->cdtrAcct;
    }

    /**
     * Sets a new cdtrAcct
     *
     * @param \App\Model\Sepa\PainModel\CashAccount24Type $cdtrAcct
     * @return self
     */
    public function setCdtrAcct(\App\Model\Sepa\PainModel\CashAccount24Type $cdtrAcct)
    {
        $this->cdtrAcct = $cdtrAcct;
        return $this;
    }

    /**
     * Gets as ultmtCdtr
     *
     * @return \App\Model\Sepa\PainModel\PartyIdentification43Type
     */
    public function getUltmtCdtr()
    {
        return $this->ultmtCdtr;
    }

    /**
     * Sets a new ultmtCdtr
     *
     * @param \App\Model\Sepa\PainModel\PartyIdentification43Type $ultmtCdtr
     * @return self
     */
    public function setUltmtCdtr(\App\Model\Sepa\PainModel\PartyIdentification43Type $ultmtCdtr)
    {
        $this->ultmtCdtr = $ultmtCdtr;
        return $this;
    }

    /**
     * Adds as instrForCdtrAgt
     *
     * @param \App\Model\Sepa\PainModel\InstructionForCreditorAgent1Type $instrForCdtrAgt
     *@return self
     */
    public function addToInstrForCdtrAgt(\App\Model\Sepa\PainModel\InstructionForCreditorAgent1Type $instrForCdtrAgt)
    {
        $this->instrForCdtrAgt[] = $instrForCdtrAgt;
        return $this;
    }

    /**
     * isset instrForCdtrAgt
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInstrForCdtrAgt($index)
    {
        return isset($this->instrForCdtrAgt[$index]);
    }

    /**
     * unset instrForCdtrAgt
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInstrForCdtrAgt($index)
    {
        unset($this->instrForCdtrAgt[$index]);
    }

    /**
     * Gets as instrForCdtrAgt
     *
     * @return \App\Model\Sepa\PainModel\InstructionForCreditorAgent1Type[]
     */
    public function getInstrForCdtrAgt()
    {
        return $this->instrForCdtrAgt;
    }

    /**
     * Sets a new instrForCdtrAgt
     *
     * @param \App\Model\Sepa\PainModel\InstructionForCreditorAgent1Type[] $instrForCdtrAgt
     * @return self
     */
    public function setInstrForCdtrAgt(array $instrForCdtrAgt)
    {
        $this->instrForCdtrAgt = $instrForCdtrAgt;
        return $this;
    }

    /**
     * Gets as instrForDbtrAgt
     *
     * @return string
     */
    public function getInstrForDbtrAgt()
    {
        return $this->instrForDbtrAgt;
    }

    /**
     * Sets a new instrForDbtrAgt
     *
     * @param string $instrForDbtrAgt
     * @return self
     */
    public function setInstrForDbtrAgt($instrForDbtrAgt)
    {
        $this->instrForDbtrAgt = $instrForDbtrAgt;
        return $this;
    }

    /**
     * Gets as purp
     *
     * @return \App\Model\Sepa\PainModel\Purpose2ChoiceType
     */
    public function getPurp()
    {
        return $this->purp;
    }

    /**
     * Sets a new purp
     *
     * @param \App\Model\Sepa\PainModel\Purpose2ChoiceType $purp
     * @return self
     */
    public function setPurp(\App\Model\Sepa\PainModel\Purpose2ChoiceType $purp)
    {
        $this->purp = $purp;
        return $this;
    }

    /**
     * Adds as rgltryRptg
     *
     * @param \App\Model\Sepa\PainModel\RegulatoryReporting3Type $rgltryRptg
     *@return self
     */
    public function addToRgltryRptg(\App\Model\Sepa\PainModel\RegulatoryReporting3Type $rgltryRptg)
    {
        $this->rgltryRptg[] = $rgltryRptg;
        return $this;
    }

    /**
     * isset rgltryRptg
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRgltryRptg($index)
    {
        return isset($this->rgltryRptg[$index]);
    }

    /**
     * unset rgltryRptg
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRgltryRptg($index)
    {
        unset($this->rgltryRptg[$index]);
    }

    /**
     * Gets as rgltryRptg
     *
     * @return \App\Model\Sepa\PainModel\RegulatoryReporting3Type[]
     */
    public function getRgltryRptg()
    {
        return $this->rgltryRptg;
    }

    /**
     * Sets a new rgltryRptg
     *
     * @param \App\Model\Sepa\PainModel\RegulatoryReporting3Type[] $rgltryRptg
     * @return self
     */
    public function setRgltryRptg(array $rgltryRptg)
    {
        $this->rgltryRptg = $rgltryRptg;
        return $this;
    }

    /**
     * Gets as tax
     *
     * @return \App\Model\Sepa\PainModel\TaxInformation3Type
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * @param \App\Model\Sepa\PainModel\TaxInformation3Type $tax
     * @return self
     */
    public function setTax(\App\Model\Sepa\PainModel\TaxInformation3Type $tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Adds as rltdRmtInf
     *
     * @param \App\Model\Sepa\PainModel\RemittanceLocation2Type $rltdRmtInf
     *@return self
     */
    public function addToRltdRmtInf(\App\Model\Sepa\PainModel\RemittanceLocation2Type $rltdRmtInf)
    {
        $this->rltdRmtInf[] = $rltdRmtInf;
        return $this;
    }

    /**
     * isset rltdRmtInf
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRltdRmtInf($index)
    {
        return isset($this->rltdRmtInf[$index]);
    }

    /**
     * unset rltdRmtInf
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRltdRmtInf($index)
    {
        unset($this->rltdRmtInf[$index]);
    }

    /**
     * Gets as rltdRmtInf
     *
     * @return \App\Model\Sepa\PainModel\RemittanceLocation2Type[]
     */
    public function getRltdRmtInf()
    {
        return $this->rltdRmtInf;
    }

    /**
     * Sets a new rltdRmtInf
     *
     * @param \App\Model\Sepa\PainModel\RemittanceLocation2Type[] $rltdRmtInf
     * @return self
     */
    public function setRltdRmtInf(array $rltdRmtInf)
    {
        $this->rltdRmtInf = $rltdRmtInf;
        return $this;
    }

    /**
     * Gets as rmtInf
     *
     * @return \App\Model\Sepa\PainModel\RemittanceInformation7Type
     */
    public function getRmtInf()
    {
        return $this->rmtInf;
    }

    /**
     * Sets a new rmtInf
     *
     * @param \App\Model\Sepa\PainModel\RemittanceInformation7Type $rmtInf
     * @return self
     */
    public function setRmtInf(\App\Model\Sepa\PainModel\RemittanceInformation7Type $rmtInf)
    {
        $this->rmtInf = $rmtInf;
        return $this;
    }

    /**
     * Adds as splmtryData
     *
     * @param \App\Model\Sepa\PainModel\SupplementaryData1Type $splmtryData
     *@return self
     */
    public function addToSplmtryData(\App\Model\Sepa\PainModel\SupplementaryData1Type $splmtryData)
    {
        $this->splmtryData[] = $splmtryData;
        return $this;
    }

    /**
     * isset splmtryData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSplmtryData($index)
    {
        return isset($this->splmtryData[$index]);
    }

    /**
     * unset splmtryData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSplmtryData($index)
    {
        unset($this->splmtryData[$index]);
    }

    /**
     * Gets as splmtryData
     *
     * @return \App\Model\Sepa\PainModel\SupplementaryData1Type[]
     */
    public function getSplmtryData()
    {
        return $this->splmtryData;
    }

    /**
     * Sets a new splmtryData
     *
     * @param \App\Model\Sepa\PainModel\SupplementaryData1Type[] $splmtryData
     * @return self
     */
    public function setSplmtryData(array $splmtryData)
    {
        $this->splmtryData = $splmtryData;
        return $this;
    }


}

?>