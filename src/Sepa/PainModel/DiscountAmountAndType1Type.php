<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing DiscountAmountAndType1Type
 *
 * 
 * XSD Type: DiscountAmountAndType1
 */
class DiscountAmountAndType1Type
{

    /**
     * @property \App\Model\Sepa\PainModel\DiscountAmountType1ChoiceType $tp
     */
    private $tp = null;

    /**
     * @property \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     */
    private $amt = null;

    /**
     * Gets as tp
     *
     * @return \App\Model\Sepa\PainModel\DiscountAmountType1ChoiceType
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Sets a new tp
     *
     * @param \App\Model\Sepa\PainModel\DiscountAmountType1ChoiceType $tp
     * @return self
     */
    public function setTp(\App\Model\Sepa\PainModel\DiscountAmountType1ChoiceType $tp)
    {
        $this->tp = $tp;
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