<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing AmountType3ChoiceType
 *
 * 
 * XSD Type: AmountType3Choice
 */
class AmountType3ChoiceType
{

    /**
     * @property \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $instdAmt
     */
    private $instdAmt = null;

    /**
     * @property \App\Model\Sepa\PainModel\EquivalentAmount2Type $eqvtAmt
     */
    private $eqvtAmt = null;

    /**
     * Gets as instdAmt
     *
     * @return \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getInstdAmt()
    {
        return $this->instdAmt;
    }

    /**
     * Sets a new instdAmt
     *
     * @param \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $instdAmt
     * @return self
     */
    public function setInstdAmt(\App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $instdAmt)
    {
        $this->instdAmt = $instdAmt;
        return $this;
    }

    /**
     * Gets as eqvtAmt
     *
     * @return \App\Model\Sepa\PainModel\EquivalentAmount2Type
     */
    public function getEqvtAmt()
    {
        return $this->eqvtAmt;
    }

    /**
     * Sets a new eqvtAmt
     *
     * @param \App\Model\Sepa\PainModel\EquivalentAmount2Type $eqvtAmt
     * @return self
     */
    public function setEqvtAmt(\App\Model\Sepa\PainModel\EquivalentAmount2Type $eqvtAmt)
    {
        $this->eqvtAmt = $eqvtAmt;
        return $this;
    }


}

?>