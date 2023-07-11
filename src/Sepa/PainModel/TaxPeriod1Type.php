<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing TaxPeriod1Type
 *
 * 
 * XSD Type: TaxPeriod1
 */
class TaxPeriod1Type
{

    /**
     * @property \DateTime $yr
     */
    private $yr = null;

    /**
     * @property string $tp
     */
    private $tp = null;

    /**
     * @property \App\Model\Sepa\PainModel\DatePeriodDetailsType $frToDt
     */
    private $frToDt = null;

    /**
     * Gets as yr
     *
     * @return \DateTime
     */
    public function getYr()
    {
        return $this->yr;
    }

    /**
     * Sets a new yr
     *
     * @param \DateTime $yr
     * @return self
     */
    public function setYr(\DateTime $yr)
    {
        $this->yr = $yr;
        return $this;
    }

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
     * Gets as frToDt
     *
     * @return \App\Model\Sepa\PainModel\DatePeriodDetailsType
     */
    public function getFrToDt()
    {
        return $this->frToDt;
    }

    /**
     * Sets a new frToDt
     *
     * @param \App\Model\Sepa\PainModel\DatePeriodDetailsType $frToDt
     * @return self
     */
    public function setFrToDt(\App\Model\Sepa\PainModel\DatePeriodDetailsType $frToDt)
    {
        $this->frToDt = $frToDt;
        return $this;
    }


}

?>