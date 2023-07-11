<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing CreditorReferenceType2Type
 *
 * 
 * XSD Type: CreditorReferenceType2
 */
class CreditorReferenceType2Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CreditorReferenceType1ChoiceType $cdOrPrtry
     */
    private $cdOrPrtry = null;

    /**
     * @property string $issr
     */
    private $issr = null;

    /**
     * Gets as cdOrPrtry
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CreditorReferenceType1ChoiceType
     */
    public function getCdOrPrtry()
    {
        return $this->cdOrPrtry;
    }

    /**
     * Sets a new cdOrPrtry
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CreditorReferenceType1ChoiceType $cdOrPrtry
     * @return self
     */
    public function setCdOrPrtry(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\CreditorReferenceType1ChoiceType $cdOrPrtry)
    {
        $this->cdOrPrtry = $cdOrPrtry;
        return $this;
    }

    /**
     * Gets as issr
     *
     * @return string
     */
    public function getIssr()
    {
        return $this->issr;
    }

    /**
     * Sets a new issr
     *
     * @param string $issr
     * @return self
     */
    public function setIssr($issr)
    {
        $this->issr = $issr;
        return $this;
    }


}

?>