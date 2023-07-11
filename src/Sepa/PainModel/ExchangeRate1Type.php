<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing ExchangeRate1Type
 *
 * 
 * XSD Type: ExchangeRate1
 */
class ExchangeRate1Type
{

    /**
     * @property string $unitCcy
     */
    private $unitCcy = null;

    /**
     * @property float $xchgRate
     */
    private $xchgRate = null;

    /**
     * @property string $rateTp
     */
    private $rateTp = null;

    /**
     * @property string $ctrctId
     */
    private $ctrctId = null;

    /**
     * Gets as unitCcy
     *
     * @return string
     */
    public function getUnitCcy()
    {
        return $this->unitCcy;
    }

    /**
     * Sets a new unitCcy
     *
     * @param string $unitCcy
     * @return self
     */
    public function setUnitCcy($unitCcy)
    {
        $this->unitCcy = $unitCcy;
        return $this;
    }

    /**
     * Gets as xchgRate
     *
     * @return float
     */
    public function getXchgRate()
    {
        return $this->xchgRate;
    }

    /**
     * Sets a new xchgRate
     *
     * @param float $xchgRate
     * @return self
     */
    public function setXchgRate($xchgRate)
    {
        $this->xchgRate = $xchgRate;
        return $this;
    }

    /**
     * Gets as rateTp
     *
     * @return string
     */
    public function getRateTp()
    {
        return $this->rateTp;
    }

    /**
     * Sets a new rateTp
     *
     * @param string $rateTp
     * @return self
     */
    public function setRateTp($rateTp)
    {
        $this->rateTp = $rateTp;
        return $this;
    }

    /**
     * Gets as ctrctId
     *
     * @return string
     */
    public function getCtrctId()
    {
        return $this->ctrctId;
    }

    /**
     * Sets a new ctrctId
     *
     * @param string $ctrctId
     * @return self
     */
    public function setCtrctId($ctrctId)
    {
        $this->ctrctId = $ctrctId;
        return $this;
    }


}

?>