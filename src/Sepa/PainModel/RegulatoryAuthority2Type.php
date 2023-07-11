<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing RegulatoryAuthority2Type
 *
 * 
 * XSD Type: RegulatoryAuthority2
 */
class RegulatoryAuthority2Type
{

    /**
     * @property string $nm
     */
    private $nm = null;

    /**
     * @property string $ctry
     */
    private $ctry = null;

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
     * Gets as ctry
     *
     * @return string
     */
    public function getCtry()
    {
        return $this->ctry;
    }

    /**
     * Sets a new ctry
     *
     * @param string $ctry
     * @return self
     */
    public function setCtry($ctry)
    {
        $this->ctry = $ctry;
        return $this;
    }


}

?>