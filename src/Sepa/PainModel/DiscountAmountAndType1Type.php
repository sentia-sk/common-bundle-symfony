<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing DiscountAmountAndType1Type
 *
 * 
 * XSD Type: DiscountAmountAndType1
 */
class DiscountAmountAndType1Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DiscountAmountType1ChoiceType $tp
     */
    private $tp = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     */
    private $amt = null;

    /**
     * Gets as tp
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DiscountAmountType1ChoiceType
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Sets a new tp
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DiscountAmountType1ChoiceType $tp
     * @return self
     */
    public function setTp(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\DiscountAmountType1ChoiceType $tp)
    {
        $this->tp = $tp;
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