<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing PersonIdentification5Type
 *
 * 
 * XSD Type: PersonIdentification5
 */
class PersonIdentification5Type
{

    /**
     * @property \App\Model\Sepa\PainModel\DateAndPlaceOfBirthType $dtAndPlcOfBirth
     */
    private $dtAndPlcOfBirth = null;

    /**
     * @property \App\Model\Sepa\PainModel\GenericPersonIdentification1Type[] $othr
     */
    private $othr = null;

    /**
     * Gets as dtAndPlcOfBirth
     *
     * @return \App\Model\Sepa\PainModel\DateAndPlaceOfBirthType
     */
    public function getDtAndPlcOfBirth()
    {
        return $this->dtAndPlcOfBirth;
    }

    /**
     * Sets a new dtAndPlcOfBirth
     *
     * @param \App\Model\Sepa\PainModel\DateAndPlaceOfBirthType $dtAndPlcOfBirth
     * @return self
     */
    public function setDtAndPlcOfBirth(\App\Model\Sepa\PainModel\DateAndPlaceOfBirthType $dtAndPlcOfBirth)
    {
        $this->dtAndPlcOfBirth = $dtAndPlcOfBirth;
        return $this;
    }

    /**
     * Adds as othr
     *
     * @param \App\Model\Sepa\PainModel\GenericPersonIdentification1Type $othr
     *@return self
     */
    public function addToOthr(\App\Model\Sepa\PainModel\GenericPersonIdentification1Type $othr)
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
     * @return \App\Model\Sepa\PainModel\GenericPersonIdentification1Type[]
     */
    public function getOthr()
    {
        return $this->othr;
    }

    /**
     * Sets a new othr
     *
     * @param \App\Model\Sepa\PainModel\GenericPersonIdentification1Type[] $othr
     * @return self
     */
    public function setOthr(array $othr)
    {
        $this->othr = $othr;
        return $this;
    }


}

?>