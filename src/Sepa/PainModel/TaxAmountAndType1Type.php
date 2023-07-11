<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing TaxAmountAndType1Type
 *
 * 
 * XSD Type: TaxAmountAndType1
 */
class TaxAmountAndType1Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmountType1ChoiceType $tp
     */
    private $tp = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     */
    private $amt = null;

    /**
     * Gets as tp
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmountType1ChoiceType
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Sets a new tp
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmountType1ChoiceType $tp
     * @return self
     */
    public function setTp(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmountType1ChoiceType $tp)
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