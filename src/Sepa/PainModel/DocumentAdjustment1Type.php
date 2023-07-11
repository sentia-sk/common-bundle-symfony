<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing DocumentAdjustment1Type
 *
 * 
 * XSD Type: DocumentAdjustment1
 */
class DocumentAdjustment1Type
{

    /**
     * @property \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     */
    private $amt = null;

    /**
     * @property string $cdtDbtInd
     */
    private $cdtDbtInd = null;

    /**
     * @property string $rsn
     */
    private $rsn = null;

    /**
     * @property string $addtlInf
     */
    private $addtlInf = null;

    /**
     * Gets as amt
     *
     * @return \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getAmt()
    {
        return $this->amt;
    }

    /**
     * Sets a new amt
     *
     * @param \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     * @return self
     */
    public function setAmt(\App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt)
    {
        $this->amt = $amt;
        return $this;
    }

    /**
     * Gets as cdtDbtInd
     *
     * @return string
     */
    public function getCdtDbtInd()
    {
        return $this->cdtDbtInd;
    }

    /**
     * Sets a new cdtDbtInd
     *
     * @param string $cdtDbtInd
     * @return self
     */
    public function setCdtDbtInd($cdtDbtInd)
    {
        $this->cdtDbtInd = $cdtDbtInd;
        return $this;
    }

    /**
     * Gets as rsn
     *
     * @return string
     */
    public function getRsn()
    {
        return $this->rsn;
    }

    /**
     * Sets a new rsn
     *
     * @param string $rsn
     * @return self
     */
    public function setRsn($rsn)
    {
        $this->rsn = $rsn;
        return $this;
    }

    /**
     * Gets as addtlInf
     *
     * @return string
     */
    public function getAddtlInf()
    {
        return $this->addtlInf;
    }

    /**
     * Sets a new addtlInf
     *
     * @param string $addtlInf
     * @return self
     */
    public function setAddtlInf($addtlInf)
    {
        $this->addtlInf = $addtlInf;
        return $this;
    }


}

?>