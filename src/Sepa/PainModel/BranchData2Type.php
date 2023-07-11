<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing BranchData2Type
 *
 * 
 * XSD Type: BranchData2
 */
class BranchData2Type
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $nm
     */
    private $nm = null;

    /**
     * @property \App\Model\Sepa\PainModel\PostalAddress6Type $pstlAdr
     */
    private $pstlAdr = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

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


}

?>