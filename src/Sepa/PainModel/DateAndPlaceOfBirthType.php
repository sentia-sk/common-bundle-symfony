<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing DateAndPlaceOfBirthType
 *
 * 
 * XSD Type: DateAndPlaceOfBirth
 */
class DateAndPlaceOfBirthType
{

    /**
     * @property \DateTime $birthDt
     */
    private $birthDt = null;

    /**
     * @property string $prvcOfBirth
     */
    private $prvcOfBirth = null;

    /**
     * @property string $cityOfBirth
     */
    private $cityOfBirth = null;

    /**
     * @property string $ctryOfBirth
     */
    private $ctryOfBirth = null;

    /**
     * Gets as birthDt
     *
     * @return \DateTime
     */
    public function getBirthDt()
    {
        return $this->birthDt;
    }

    /**
     * Sets a new birthDt
     *
     * @param \DateTime $birthDt
     * @return self
     */
    public function setBirthDt(\DateTime $birthDt)
    {
        $this->birthDt = $birthDt;
        return $this;
    }

    /**
     * Gets as prvcOfBirth
     *
     * @return string
     */
    public function getPrvcOfBirth()
    {
        return $this->prvcOfBirth;
    }

    /**
     * Sets a new prvcOfBirth
     *
     * @param string $prvcOfBirth
     * @return self
     */
    public function setPrvcOfBirth($prvcOfBirth)
    {
        $this->prvcOfBirth = $prvcOfBirth;
        return $this;
    }

    /**
     * Gets as cityOfBirth
     *
     * @return string
     */
    public function getCityOfBirth()
    {
        return $this->cityOfBirth;
    }

    /**
     * Sets a new cityOfBirth
     *
     * @param string $cityOfBirth
     * @return self
     */
    public function setCityOfBirth($cityOfBirth)
    {
        $this->cityOfBirth = $cityOfBirth;
        return $this;
    }

    /**
     * Gets as ctryOfBirth
     *
     * @return string
     */
    public function getCtryOfBirth()
    {
        return $this->ctryOfBirth;
    }

    /**
     * Sets a new ctryOfBirth
     *
     * @param string $ctryOfBirth
     * @return self
     */
    public function setCtryOfBirth($ctryOfBirth)
    {
        $this->ctryOfBirth = $ctryOfBirth;
        return $this;
    }


}

?>