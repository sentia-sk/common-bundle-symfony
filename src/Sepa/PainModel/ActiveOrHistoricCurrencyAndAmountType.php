<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing ActiveOrHistoricCurrencyAndAmountType
 *
 * 
 * XSD Type: ActiveOrHistoricCurrencyAndAmount
 */
class ActiveOrHistoricCurrencyAndAmountType
{

    /**
     * @property float $__value
     */
    private $__value = null;

    /**
     * @property string $ccy
     */
    private $ccy = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as ccy
     *
     * @return string
     */
    public function getCcy()
    {
        return $this->ccy;
    }

    /**
     * Sets a new ccy
     *
     * @param string $ccy
     * @return self
     */
    public function setCcy($ccy)
    {
        $this->ccy = $ccy;
        return $this;
    }


}

?>