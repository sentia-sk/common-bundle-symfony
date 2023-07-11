<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing AmountType3ChoiceType
 *
 * 
 * XSD Type: AmountType3Choice
 */
class AmountType3ChoiceType
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $instdAmt
     */
    private $instdAmt = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\EquivalentAmount2Type $eqvtAmt
     */
    private $eqvtAmt = null;

    /**
     * Gets as instdAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getInstdAmt()
    {
        return $this->instdAmt;
    }

    /**
     * Sets a new instdAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $instdAmt
     * @return self
     */
    public function setInstdAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $instdAmt)
    {
        $this->instdAmt = $instdAmt;
        return $this;
    }

    /**
     * Gets as eqvtAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\EquivalentAmount2Type
     */
    public function getEqvtAmt()
    {
        return $this->eqvtAmt;
    }

    /**
     * Sets a new eqvtAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\EquivalentAmount2Type $eqvtAmt
     * @return self
     */
    public function setEqvtAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\EquivalentAmount2Type $eqvtAmt)
    {
        $this->eqvtAmt = $eqvtAmt;
        return $this;
    }


}

?>