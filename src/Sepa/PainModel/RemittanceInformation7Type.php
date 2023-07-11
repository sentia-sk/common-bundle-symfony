<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing RemittanceInformation7Type
 *
 * 
 * XSD Type: RemittanceInformation7
 */
class RemittanceInformation7Type
{

    /**
     * @property string[] $ustrd
     */
    private $ustrd = null;

    /**
     * @property \App\Model\Sepa\PainModel\StructuredRemittanceInformation9Type[] $strd
     */
    private $strd = null;

    /**
     * Adds as ustrd
     *
     * @return self
     * @param string $ustrd
     */
    public function addToUstrd($ustrd)
    {
        $this->ustrd[] = $ustrd;
        return $this;
    }

    /**
     * isset ustrd
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUstrd($index)
    {
        return isset($this->ustrd[$index]);
    }

    /**
     * unset ustrd
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUstrd($index)
    {
        unset($this->ustrd[$index]);
    }

    /**
     * Gets as ustrd
     *
     * @return string[]
     */
    public function getUstrd()
    {
        return $this->ustrd;
    }

    /**
     * Sets a new ustrd
     *
     * @param string $ustrd
     * @return self
     */
    public function setUstrd(array $ustrd)
    {
        $this->ustrd = $ustrd;
        return $this;
    }

    /**
     * Adds as strd
     *
     * @param \App\Model\Sepa\PainModel\StructuredRemittanceInformation9Type $strd
     *@return self
     */
    public function addToStrd(\App\Model\Sepa\PainModel\StructuredRemittanceInformation9Type $strd)
    {
        $this->strd[] = $strd;
        return $this;
    }

    /**
     * isset strd
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStrd($index)
    {
        return isset($this->strd[$index]);
    }

    /**
     * unset strd
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStrd($index)
    {
        unset($this->strd[$index]);
    }

    /**
     * Gets as strd
     *
     * @return \App\Model\Sepa\PainModel\StructuredRemittanceInformation9Type[]
     */
    public function getStrd()
    {
        return $this->strd;
    }

    /**
     * Sets a new strd
     *
     * @param \App\Model\Sepa\PainModel\StructuredRemittanceInformation9Type[] $strd
     * @return self
     */
    public function setStrd(array $strd)
    {
        $this->strd = $strd;
        return $this;
    }


}

?>