<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing PersonIdentification5Type
 *
 * 
 * XSD Type: PersonIdentification5
 */
class PersonIdentification5Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DateAndPlaceOfBirthType $dtAndPlcOfBirth
     */
    private $dtAndPlcOfBirth = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericPersonIdentification1Type[] $othr
     */
    private $othr = null;

    /**
     * Gets as dtAndPlcOfBirth
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DateAndPlaceOfBirthType
     */
    public function getDtAndPlcOfBirth()
    {
        return $this->dtAndPlcOfBirth;
    }

    /**
     * Sets a new dtAndPlcOfBirth
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DateAndPlaceOfBirthType $dtAndPlcOfBirth
     * @return self
     */
    public function setDtAndPlcOfBirth(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\DateAndPlaceOfBirthType $dtAndPlcOfBirth)
    {
        $this->dtAndPlcOfBirth = $dtAndPlcOfBirth;
        return $this;
    }

    /**
     * Adds as othr
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericPersonIdentification1Type $othr
     *@return self
     */
    public function addToOthr(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericPersonIdentification1Type $othr)
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
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericPersonIdentification1Type[]
     */
    public function getOthr()
    {
        return $this->othr;
    }

    /**
     * Sets a new othr
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericPersonIdentification1Type[] $othr
     * @return self
     */
    public function setOthr(array $othr)
    {
        $this->othr = $othr;
        return $this;
    }


}

?>