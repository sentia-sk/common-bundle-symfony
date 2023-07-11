<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing TaxRecordDetails1Type
 *
 * 
 * XSD Type: TaxRecordDetails1
 */
class TaxRecordDetails1Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxPeriod1Type $prd
     */
    private $prd = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     */
    private $amt = null;

    /**
     * Gets as prd
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxPeriod1Type
     */
    public function getPrd()
    {
        return $this->prd;
    }

    /**
     * Sets a new prd
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxPeriod1Type $prd
     * @return self
     */
    public function setPrd(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxPeriod1Type $prd)
    {
        $this->prd = $prd;
        return $this;
    }

    /**
     * Gets as amt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getAmt()
    {
        return $this->amt;
    }

    /**
     * Sets a new amt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     * @return self
     */
    public function setAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt)
    {
        $this->amt = $amt;
        return $this;
    }


}

?>