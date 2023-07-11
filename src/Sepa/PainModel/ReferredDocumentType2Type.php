<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing ReferredDocumentType2Type
 *
 * 
 * XSD Type: ReferredDocumentType2
 */
class ReferredDocumentType2Type
{

    /**
     * @property \App\Model\Sepa\PainModel\ReferredDocumentType1ChoiceType $cdOrPrtry
     */
    private $cdOrPrtry = null;

    /**
     * @property string $issr
     */
    private $issr = null;

    /**
     * Gets as cdOrPrtry
     *
     * @return \App\Model\Sepa\PainModel\ReferredDocumentType1ChoiceType
     */
    public function getCdOrPrtry()
    {
        return $this->cdOrPrtry;
    }

    /**
     * Sets a new cdOrPrtry
     *
     * @param \App\Model\Sepa\PainModel\ReferredDocumentType1ChoiceType $cdOrPrtry
     * @return self
     */
    public function setCdOrPrtry(\App\Model\Sepa\PainModel\ReferredDocumentType1ChoiceType $cdOrPrtry)
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