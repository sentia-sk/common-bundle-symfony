<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing TaxRecordDetails1Type
 *
 * 
 * XSD Type: TaxRecordDetails1
 */
class TaxRecordDetails1Type
{

    /**
     * @property \App\Model\Sepa\PainModel\TaxPeriod1Type $prd
     */
    private $prd = null;

    /**
     * @property \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     */
    private $amt = null;

    /**
     * Gets as prd
     *
     * @return \App\Model\Sepa\PainModel\TaxPeriod1Type
     */
    public function getPrd()
    {
        return $this->prd;
    }

    /**
     * Sets a new prd
     *
     * @param \App\Model\Sepa\PainModel\TaxPeriod1Type $prd
     * @return self
     */
    public function setPrd(\App\Model\Sepa\PainModel\TaxPeriod1Type $prd)
    {
        $this->prd = $prd;
        return $this;
    }

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


}

?>