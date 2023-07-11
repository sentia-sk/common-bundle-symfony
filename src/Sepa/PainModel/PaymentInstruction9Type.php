<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing PaymentInstruction9Type
 *
 * 
 * XSD Type: PaymentInstruction9
 */
class PaymentInstruction9Type
{

    /**
     * @property string $pmtInfId
     */
    private $pmtInfId = null;

    /**
     * @property string $pmtMtd
     */
    private $pmtMtd = null;

    /**
     * @property boolean $btchBookg
     */
    private $btchBookg = null;

    /**
     * @property string $nbOfTxs
     */
    private $nbOfTxs = null;

    /**
     * @property float $ctrlSum
     */
    private $ctrlSum = null;

    /**
     * @property \App\Model\Sepa\PainModel\PaymentTypeInformation19Type $pmtTpInf
     */
    private $pmtTpInf = null;

    /**
     * @property \DateTime $reqdExctnDt
     */
    private $reqdExctnDt = null;

    /**
     * @property \DateTime $poolgAdjstmntDt
     */
    private $poolgAdjstmntDt = null;

    /**
     * @property \App\Model\Sepa\PainModel\PartyIdentification43Type $dbtr
     */
    private $dbtr = null;

    /**
     * @property \App\Model\Sepa\PainModel\CashAccount24Type $dbtrAcct
     */
    private $dbtrAcct = null;

    /**
     * @property \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $dbtrAgt
     */
    private $dbtrAgt = null;

    /**
     * @property \App\Model\Sepa\PainModel\CashAccount24Type $dbtrAgtAcct
     */
    private $dbtrAgtAcct = null;

    /**
     * @property string $instrForDbtrAgt
     */
    private $instrForDbtrAgt = null;

    /**
     * @property \App\Model\Sepa\PainModel\PartyIdentification43Type $ultmtDbtr
     */
    private $ultmtDbtr = null;

    /**
     * @property string $chrgBr
     */
    private $chrgBr = null;

    /**
     * @property \App\Model\Sepa\PainModel\CashAccount24Type $chrgsAcct
     */
    private $chrgsAcct = null;

    /**
     * @property \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     * $chrgsAcctAgt
     */
    private $chrgsAcctAgt = null;

    /**
     * @property \App\Model\Sepa\PainModel\CreditTransferTransaction6Type[] $cdtTrfTxInf
     */
    private $cdtTrfTxInf = array();

    /**
     * Gets as pmtInfId
     *
     * @return string
     */
    public function getPmtInfId()
    {
        return $this->pmtInfId;
    }

    /**
     * Sets a new pmtInfId
     *
     * @param string $pmtInfId
     * @return self
     */
    public function setPmtInfId($pmtInfId)
    {
        $this->pmtInfId = $pmtInfId;
        return $this;
    }

    /**
     * Gets as pmtMtd
     *
     * @return string
     */
    public function getPmtMtd()
    {
        return $this->pmtMtd;
    }

    /**
     * Sets a new pmtMtd
     *
     * @param string $pmtMtd
     * @return self
     */
    public function setPmtMtd($pmtMtd)
    {
        $this->pmtMtd = $pmtMtd;
        return $this;
    }

    /**
     * Gets as btchBookg
     *
     * @return boolean
     */
    public function getBtchBookg()
    {
        return $this->btchBookg;
    }

    /**
     * Sets a new btchBookg
     *
     * @param boolean $btchBookg
     * @return self
     */
    public function setBtchBookg($btchBookg)
    {
        $this->btchBookg = $btchBookg;
        return $this;
    }

    /**
     * Gets as nbOfTxs
     *
     * @return string
     */
    public function getNbOfTxs()
    {
        return $this->nbOfTxs;
    }

    /**
     * Sets a new nbOfTxs
     *
     * @param string $nbOfTxs
     * @return self
     */
    public function setNbOfTxs($nbOfTxs)
    {
        $this->nbOfTxs = $nbOfTxs;
        return $this;
    }

    /**
     * Gets as ctrlSum
     *
     * @return float
     */
    public function getCtrlSum()
    {
        return $this->ctrlSum;
    }

    /**
     * Sets a new ctrlSum
     *
     * @param float $ctrlSum
     * @return self
     */
    public function setCtrlSum($ctrlSum)
    {
        $this->ctrlSum = $ctrlSum;
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
     * Gets as reqdExctnDt
     *
     * @return \DateTime
     */
    public function getReqdExctnDt()
    {
        return $this->reqdExctnDt;
    }

    /**
     * Sets a new reqdExctnDt
     *
     * @param \DateTime $reqdExctnDt
     * @return self
     */
    public function setReqdExctnDt(\DateTime $reqdExctnDt)
    {
        $this->reqdExctnDt = $reqdExctnDt;
        return $this;
    }

    /**
     * Gets as poolgAdjstmntDt
     *
     * @return \DateTime
     */
    public function getPoolgAdjstmntDt()
    {
        return $this->poolgAdjstmntDt;
    }

    /**
     * Sets a new poolgAdjstmntDt
     *
     * @param \DateTime $poolgAdjstmntDt
     * @return self
     */
    public function setPoolgAdjstmntDt(\DateTime $poolgAdjstmntDt)
    {
        $this->poolgAdjstmntDt = $poolgAdjstmntDt;
        return $this;
    }

    /**
     * Gets as dbtr
     *
     * @return \App\Model\Sepa\PainModel\PartyIdentification43Type
     */
    public function getDbtr()
    {
        return $this->dbtr;
    }

    /**
     * Sets a new dbtr
     *
     * @param \App\Model\Sepa\PainModel\PartyIdentification43Type $dbtr
     * @return self
     */
    public function setDbtr(\App\Model\Sepa\PainModel\PartyIdentification43Type $dbtr)
    {
        $this->dbtr = $dbtr;
        return $this;
    }

    /**
     * Gets as dbtrAcct
     *
     * @return \App\Model\Sepa\PainModel\CashAccount24Type
     */
    public function getDbtrAcct()
    {
        return $this->dbtrAcct;
    }

    /**
     * Sets a new dbtrAcct
     *
     * @param \App\Model\Sepa\PainModel\CashAccount24Type $dbtrAcct
     * @return self
     */
    public function setDbtrAcct(\App\Model\Sepa\PainModel\CashAccount24Type $dbtrAcct)
    {
        $this->dbtrAcct = $dbtrAcct;
        return $this;
    }

    /**
     * Gets as dbtrAgt
     *
     * @return \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     */
    public function getDbtrAgt()
    {
        return $this->dbtrAgt;
    }

    /**
     * Sets a new dbtrAgt
     *
     * @param \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $dbtrAgt
     * @return self
     */
    public function setDbtrAgt(\App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $dbtrAgt)
    {
        $this->dbtrAgt = $dbtrAgt;
        return $this;
    }

    /**
     * Gets as dbtrAgtAcct
     *
     * @return \App\Model\Sepa\PainModel\CashAccount24Type
     */
    public function getDbtrAgtAcct()
    {
        return $this->dbtrAgtAcct;
    }

    /**
     * Sets a new dbtrAgtAcct
     *
     * @param \App\Model\Sepa\PainModel\CashAccount24Type $dbtrAgtAcct
     * @return self
     */
    public function setDbtrAgtAcct(\App\Model\Sepa\PainModel\CashAccount24Type $dbtrAgtAcct)
    {
        $this->dbtrAgtAcct = $dbtrAgtAcct;
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
     * Gets as chrgsAcct
     *
     * @return \App\Model\Sepa\PainModel\CashAccount24Type
     */
    public function getChrgsAcct()
    {
        return $this->chrgsAcct;
    }

    /**
     * Sets a new chrgsAcct
     *
     * @param \App\Model\Sepa\PainModel\CashAccount24Type $chrgsAcct
     * @return self
     */
    public function setChrgsAcct(\App\Model\Sepa\PainModel\CashAccount24Type $chrgsAcct)
    {
        $this->chrgsAcct = $chrgsAcct;
        return $this;
    }

    /**
     * Gets as chrgsAcctAgt
     *
     * @return \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     */
    public function getChrgsAcctAgt()
    {
        return $this->chrgsAcctAgt;
    }

    /**
     * Sets a new chrgsAcctAgt
     *
     * @param \App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $chrgsAcctAgt
     * @return self
     */
    public function setChrgsAcctAgt(\App\Model\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $chrgsAcctAgt)
    {
        $this->chrgsAcctAgt = $chrgsAcctAgt;
        return $this;
    }

    /**
     * Adds as cdtTrfTxInf
     *
     * @param \App\Model\Sepa\PainModel\CreditTransferTransaction6Type $cdtTrfTxInf
     *@return self
     */
    public function addToCdtTrfTxInf(\App\Model\Sepa\PainModel\CreditTransferTransaction6Type $cdtTrfTxInf)
    {
        $this->cdtTrfTxInf[] = $cdtTrfTxInf;
        return $this;
    }

    /**
     * isset cdtTrfTxInf
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCdtTrfTxInf($index)
    {
        return isset($this->cdtTrfTxInf[$index]);
    }

    /**
     * unset cdtTrfTxInf
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCdtTrfTxInf($index)
    {
        unset($this->cdtTrfTxInf[$index]);
    }

    /**
     * Gets as cdtTrfTxInf
     *
     * @return \App\Model\Sepa\PainModel\CreditTransferTransaction6Type[]
     */
    public function getCdtTrfTxInf()
    {
        return $this->cdtTrfTxInf;
    }

    /**
     * Sets a new cdtTrfTxInf
     *
     * @param \App\Model\Sepa\PainModel\CreditTransferTransaction6Type[] $cdtTrfTxInf
     * @return self
     */
    public function setCdtTrfTxInf(array $cdtTrfTxInf)
    {
        $this->cdtTrfTxInf = $cdtTrfTxInf;
        return $this;
    }


}

?>