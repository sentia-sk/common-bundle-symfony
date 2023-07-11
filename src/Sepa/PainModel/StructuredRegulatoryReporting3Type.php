<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing StructuredRegulatoryReporting3Type
 *
 * 
 * XSD Type: StructuredRegulatoryReporting3
 */
class StructuredRegulatoryReporting3Type
{

    /**
     * @property string $tp
     */
    private $tp = null;

    /**
     * @property \DateTime $dt
     */
    private $dt = null;

    /**
     * @property string $ctry
     */
    private $ctry = null;

    /**
     * @property string $cd
     */
    private $cd = null;

    /**
     * @property \App\Model\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $amt
     */
    private $amt = null;

    /**
     * @property string[] $inf
     */
    private $inf = null;

    /**
     * Gets as tp
     *
     * @return string
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Sets a new tp
     *
     * @param string $tp
     * @return self
     */
    public function setTp($tp)
    {
        $this->tp = $tp;
        return $this;
    }

    /**
     * Gets as dt
     *
     * @return \DateTime
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Sets a new dt
     *
     * @param \DateTime $dt
     * @return self
     */
    public function setDt(\DateTime $dt)
    {
        $this->dt = $dt;
        return $this;
    }

    /**
     * Gets as ctry
     *
     * @return string
     */
    public function getCtry()
    {
        return $this->ctry;
    }

    /**
     * Sets a new ctry
     *
     * @param string $ctry
     * @return self
     */
    public function setCtry($ctry)
    {
        $this->ctry = $ctry;
        return $this;
    }

    /**
     * Gets as cd
     *
     * @return string
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * Sets a new cd
     *
     * @param string $cd
     * @return self
     */
    public function setCd($cd)
    {
        $this->cd = $cd;
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

    /**
     * Adds as inf
     *
     * @return self
     * @param string $inf
     */
    public function addToInf($inf)
    {
        $this->inf[] = $inf;
        return $this;
    }

    /**
     * isset inf
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInf($index)
    {
        return isset($this->inf[$index]);
    }

    /**
     * unset inf
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInf($index)
    {
        unset($this->inf[$index]);
    }

    /**
     * Gets as inf
     *
     * @return string[]
     */
    public function getInf()
    {
        return $this->inf;
    }

    /**
     * Sets a new inf
     *
     * @param string $inf
     * @return self
     */
    public function setInf(array $inf)
    {
        $this->inf = $inf;
        return $this;
    }


}

?>