<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing EquivalentAmount2Type
 *
 * 
 * XSD Type: EquivalentAmount2
 */
class EquivalentAmount2Type
{

    /**
     * @property \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     */
    private $amt = null;

    /**
     * @property string $ccyOfTrf
     */
    private $ccyOfTrf = null;

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
     * Gets as ccyOfTrf
     *
     * @return string
     */
    public function getCcyOfTrf()
    {
        return $this->ccyOfTrf;
    }

    /**
     * Sets a new ccyOfTrf
     *
     * @param string $ccyOfTrf
     * @return self
     */
    public function setCcyOfTrf($ccyOfTrf)
    {
        $this->ccyOfTrf = $ccyOfTrf;
        return $this;
    }


}

?>