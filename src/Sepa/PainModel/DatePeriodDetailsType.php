<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing DatePeriodDetailsType
 *
 * 
 * XSD Type: DatePeriodDetails
 */
class DatePeriodDetailsType
{

    /**
     * @property \DateTime $frDt
     */
    private $frDt = null;

    /**
     * @property \DateTime $toDt
     */
    private $toDt = null;

    /**
     * Gets as frDt
     *
     * @return \DateTime
     */
    public function getFrDt()
    {
        return $this->frDt;
    }

    /**
     * Sets a new frDt
     *
     * @param \DateTime $frDt
     * @return self
     */
    public function setFrDt(\DateTime $frDt)
    {
        $this->frDt = $frDt;
        return $this;
    }

    /**
     * Gets as toDt
     *
     * @return \DateTime
     */
    public function getToDt()
    {
        return $this->toDt;
    }

    /**
     * Sets a new toDt
     *
     * @param \DateTime $toDt
     * @return self
     */
    public function setToDt(\DateTime $toDt)
    {
        $this->toDt = $toDt;
        return $this;
    }


}

?>