<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing TaxAuthorisation1Type
 *
 * 
 * XSD Type: TaxAuthorisation1
 */
class TaxAuthorisation1Type
{

    /**
     * @property string $titl
     */
    private $titl = null;

    /**
     * @property string $nm
     */
    private $nm = null;

    /**
     * Gets as titl
     *
     * @return string
     */
    public function getTitl()
    {
        return $this->titl;
    }

    /**
     * Sets a new titl
     *
     * @param string $titl
     * @return self
     */
    public function setTitl($titl)
    {
        $this->titl = $titl;
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


}

?>