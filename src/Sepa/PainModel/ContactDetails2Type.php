<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing ContactDetails2Type
 *
 * 
 * XSD Type: ContactDetails2
 */
class ContactDetails2Type
{

    /**
     * @property string $nmPrfx
     */
    private $nmPrfx = null;

    /**
     * @property string $nm
     */
    private $nm = null;

    /**
     * @property string $phneNb
     */
    private $phneNb = null;

    /**
     * @property string $mobNb
     */
    private $mobNb = null;

    /**
     * @property string $faxNb
     */
    private $faxNb = null;

    /**
     * @property string $emailAdr
     */
    private $emailAdr = null;

    /**
     * @property string $othr
     */
    private $othr = null;

    /**
     * Gets as nmPrfx
     *
     * @return string
     */
    public function getNmPrfx()
    {
        return $this->nmPrfx;
    }

    /**
     * Sets a new nmPrfx
     *
     * @param string $nmPrfx
     * @return self
     */
    public function setNmPrfx($nmPrfx)
    {
        $this->nmPrfx = $nmPrfx;
        return $this;
    }

    /**
     * Gets as nm
     *
     * @return string
     */
    public function getNm()
    {
        return $this->nm;
    }

    /**
     * Sets a new nm
     *
     * @param string $nm
     * @return self
     */
    public function setNm($nm)
    {
        $this->nm = $nm;
        return $this;
    }

    /**
     * Gets as phneNb
     *
     * @return string
     */
    public function getPhneNb()
    {
        return $this->phneNb;
    }

    /**
     * Sets a new phneNb
     *
     * @param string $phneNb
     * @return self
     */
    public function setPhneNb($phneNb)
    {
        $this->phneNb = $phneNb;
        return $this;
    }

    /**
     * Gets as mobNb
     *
     * @return string
     */
    public function getMobNb()
    {
        return $this->mobNb;
    }

    /**
     * Sets a new mobNb
     *
     * @param string $mobNb
     * @return self
     */
    public function setMobNb($mobNb)
    {
        $this->mobNb = $mobNb;
        return $this;
    }

    /**
     * Gets as faxNb
     *
     * @return string
     */
    public function getFaxNb()
    {
        return $this->faxNb;
    }

    /**
     * Sets a new faxNb
     *
     * @param string $faxNb
     * @return self
     */
    public function setFaxNb($faxNb)
    {
        $this->faxNb = $faxNb;
        return $this;
    }

    /**
     * Gets as emailAdr
     *
     * @return string
     */
    public function getEmailAdr()
    {
        return $this->emailAdr;
    }

    /**
     * Sets a new emailAdr
     *
     * @param string $emailAdr
     * @return self
     */
    public function setEmailAdr($emailAdr)
    {
        $this->emailAdr = $emailAdr;
        return $this;
    }

    /**
     * Gets as othr
     *
     * @return string
     */
    public function getOthr()
    {
        return $this->othr;
    }

    /**
     * Sets a new othr
     *
     * @param string $othr
     * @return self
     */
    public function setOthr($othr)
    {
        $this->othr = $othr;
        return $this;
    }


}

?>