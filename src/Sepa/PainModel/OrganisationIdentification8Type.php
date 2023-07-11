<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing OrganisationIdentification8Type
 *
 * 
 * XSD Type: OrganisationIdentification8
 */
class OrganisationIdentification8Type
{

    /**
     * @property string $anyBIC
     */
    private $anyBIC = null;

    /**
     * @property \App\Model\Sepa\PainModel\GenericOrganisationIdentification1Type[] $othr
     */
    private $othr = null;

    /**
     * Gets as anyBIC
     *
     * @return string
     */
    public function getAnyBIC()
    {
        return $this->anyBIC;
    }

    /**
     * Sets a new anyBIC
     *
     * @param string $anyBIC
     * @return self
     */
    public function setAnyBIC($anyBIC)
    {
        $this->anyBIC = $anyBIC;
        return $this;
    }

    /**
     * Adds as othr
     *
     * @param \App\Model\Sepa\PainModel\GenericOrganisationIdentification1Type $othr
     *@return self
     */
    public function addToOthr(\App\Model\Sepa\PainModel\GenericOrganisationIdentification1Type $othr)
    {
        $this->othr[] = $othr;
        return $this;
    }

    /**
     * isset othr
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOthr($index)
    {
        return isset($this->othr[$index]);
    }

    /**
     * unset othr
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOthr($index)
    {
        unset($this->othr[$index]);
    }

    /**
     * Gets as othr
     *
     * @return \App\Model\Sepa\PainModel\GenericOrganisationIdentification1Type[]
     */
    public function getOthr()
    {
        return $this->othr;
    }

    /**
     * Sets a new othr
     *
     * @param \App\Model\Sepa\PainModel\GenericOrganisationIdentification1Type[] $othr
     * @return self
     */
    public function setOthr(array $othr)
    {
        $this->othr = $othr;
        return $this;
    }


}

?>