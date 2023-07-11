<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing NameAndAddress10Type
 *
 * 
 * XSD Type: NameAndAddress10
 */
class NameAndAddress10Type
{

    /**
     * @property string $nm
     */
    private $nm = null;

    /**
     * @property \App\Model\Sepa\PainModel\PostalAddress6Type $adr
     */
    private $adr = null;

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
     * Gets as adr
     *
     * @return \App\Model\Sepa\PainModel\PostalAddress6Type
     */
    public function getAdr()
    {
        return $this->adr;
    }

    /**
     * Sets a new adr
     *
     * @param \App\Model\Sepa\PainModel\PostalAddress6Type $adr
     * @return self
     */
    public function setAdr(\App\Model\Sepa\PainModel\PostalAddress6Type $adr)
    {
        $this->adr = $adr;
        return $this;
    }


}

?>