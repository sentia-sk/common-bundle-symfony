<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing EquivalentAmount2Type
 *
 * 
 * XSD Type: EquivalentAmount2
 */
class EquivalentAmount2Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     */
    private $amt = null;

    /**
     * @property string $ccyOfTrf
     */
    private $ccyOfTrf = null;

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