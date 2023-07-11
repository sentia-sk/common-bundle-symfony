<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing PartyIdentification43Type
 *
 * 
 * XSD Type: PartyIdentification43
 */
class PartyIdentification43Type
{

    /**
     * @property string $nm
     */
    private $nm = null;

    /**
     * @property \App\Model\Sepa\PainModel\PostalAddress6Type $pstlAdr
     */
    private $pstlAdr = null;

    /**
     * @property \App\Model\Sepa\PainModel\Party11ChoiceType $id
     */
    private $id = null;

    /**
     * @property string $ctryOfRes
     */
    private $ctryOfRes = null;

    /**
     * @property \App\Model\Sepa\PainModel\ContactDetails2Type $ctctDtls
     */
    private $ctctDtls = null;

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
     * Gets as pstlAdr
     *
     * @return \App\Model\Sepa\PainModel\PostalAddress6Type
     */
    public function getPstlAdr()
    {
        return $this->pstlAdr;
    }

    /**
     * Sets a new pstlAdr
     *
     * @param \App\Model\Sepa\PainModel\PostalAddress6Type $pstlAdr
     * @return self
     */
    public function setPstlAdr(\App\Model\Sepa\PainModel\PostalAddress6Type $pstlAdr)
    {
        $this->pstlAdr = $pstlAdr;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return \App\Model\Sepa\PainModel\Party11ChoiceType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \App\Model\Sepa\PainModel\Party11ChoiceType $id
     * @return self
     */
    public function setId(\App\Model\Sepa\PainModel\Party11ChoiceType $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ctryOfRes
     *
     * @return string
     */
    public function getCtryOfRes()
    {
        return $this->ctryOfRes;
    }

    /**
     * Sets a new ctryOfRes
     *
     * @param string $ctryOfRes
     * @return self
     */
    public function setCtryOfRes($ctryOfRes)
    {
        $this->ctryOfRes = $ctryOfRes;
        return $this;
    }

    /**
     * Gets as ctctDtls
     *
     * @return \App\Model\Sepa\PainModel\ContactDetails2Type
     */
    public function getCtctDtls()
    {
        return $this->ctctDtls;
    }

    /**
     * Sets a new ctctDtls
     *
     * @param \App\Model\Sepa\PainModel\ContactDetails2Type $ctctDtls
     * @return self
     */
    public function setCtctDtls(\App\Model\Sepa\PainModel\ContactDetails2Type $ctctDtls)
    {
        $this->ctctDtls = $ctctDtls;
        return $this;
    }


}

?>