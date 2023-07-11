<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing CreditorReferenceInformation2Type
 *
 * 
 * XSD Type: CreditorReferenceInformation2
 */
class CreditorReferenceInformation2Type
{

    /**
     * @property \App\Model\Sepa\PainModel\CreditorReferenceType2Type $tp
     */
    private $tp = null;

    /**
     * @property string $ref
     */
    private $ref = null;

    /**
     * Gets as tp
     *
     * @return \App\Model\Sepa\PainModel\CreditorReferenceType2Type
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Sets a new tp
     *
     * @param \App\Model\Sepa\PainModel\CreditorReferenceType2Type $tp
     * @return self
     */
    public function setTp(\App\Model\Sepa\PainModel\CreditorReferenceType2Type $tp)
    {
        $this->tp = $tp;
        return $this;
    }

    /**
     * Gets as ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Sets a new ref
     *
     * @param string $ref
     * @return self
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }


}

?>