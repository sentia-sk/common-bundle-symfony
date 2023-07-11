<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing PostalAddress6Type
 *
 * 
 * XSD Type: PostalAddress6
 */
class PostalAddress6Type
{

    /**
     * @property string $adrTp
     */
    private $adrTp = null;

    /**
     * @property string $dept
     */
    private $dept = null;

    /**
     * @property string $subDept
     */
    private $subDept = null;

    /**
     * @property string $strtNm
     */
    private $strtNm = null;

    /**
     * @property string $bldgNb
     */
    private $bldgNb = null;

    /**
     * @property string $pstCd
     */
    private $pstCd = null;

    /**
     * @property string $twnNm
     */
    private $twnNm = null;

    /**
     * @property string $ctrySubDvsn
     */
    private $ctrySubDvsn = null;

    /**
     * @property string $ctry
     */
    private $ctry = null;

    /**
     * @property string[] $adrLine
     */
    private $adrLine = null;

    /**
     * Gets as adrTp
     *
     * @return string
     */
    public function getAdrTp()
    {
        return $this->adrTp;
    }

    /**
     * Sets a new adrTp
     *
     * @param string $adrTp
     * @return self
     */
    public function setAdrTp($adrTp)
    {
        $this->adrTp = $adrTp;
        return $this;
    }

    /**
     * Gets as dept
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Sets a new dept
     *
     * @param string $dept
     * @return self
     */
    public function setDept($dept)
    {
        $this->dept = $dept;
        return $this;
    }

    /**
     * Gets as subDept
     *
     * @return string
     */
    public function getSubDept()
    {
        return $this->subDept;
    }

    /**
     * Sets a new subDept
     *
     * @param string $subDept
     * @return self
     */
    public function setSubDept($subDept)
    {
        $this->subDept = $subDept;
        return $this;
    }

    /**
     * Gets as strtNm
     *
     * @return string
     */
    public function getStrtNm()
    {
        return $this->strtNm;
    }

    /**
     * Sets a new strtNm
     *
     * @param string $strtNm
     * @return self
     */
    public function setStrtNm($strtNm)
    {
        $this->strtNm = $strtNm;
        return $this;
    }

    /**
     * Gets as bldgNb
     *
     * @return string
     */
    public function getBldgNb()
    {
        return $this->bldgNb;
    }

    /**
     * Sets a new bldgNb
     *
     * @param string $bldgNb
     * @return self
     */
    public function setBldgNb($bldgNb)
    {
        $this->bldgNb = $bldgNb;
        return $this;
    }

    /**
     * Gets as pstCd
     *
     * @return string
     */
    public function getPstCd()
    {
        return $this->pstCd;
    }

    /**
     * Sets a new pstCd
     *
     * @param string $pstCd
     * @return self
     */
    public function setPstCd($pstCd)
    {
        $this->pstCd = $pstCd;
        return $this;
    }

    /**
     * Gets as twnNm
     *
     * @return string
     */
    public function getTwnNm()
    {
        return $this->twnNm;
    }

    /**
     * Sets a new twnNm
     *
     * @param string $twnNm
     * @return self
     */
    public function setTwnNm($twnNm)
    {
        $this->twnNm = $twnNm;
        return $this;
    }

    /**
     * Gets as ctrySubDvsn
     *
     * @return string
     */
    public function getCtrySubDvsn()
    {
        return $this->ctrySubDvsn;
    }

    /**
     * Sets a new ctrySubDvsn
     *
     * @param string $ctrySubDvsn
     * @return self
     */
    public function setCtrySubDvsn($ctrySubDvsn)
    {
        $this->ctrySubDvsn = $ctrySubDvsn;
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

    /**
     * Adds as adrLine
     *
     * @return self
     * @param string $adrLine
     */
    public function addToAdrLine($adrLine)
    {
        $this->adrLine[] = $adrLine;
        return $this;
    }

    /**
     * isset adrLine
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdrLine($index)
    {
        return isset($this->adrLine[$index]);
    }

    /**
     * unset adrLine
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdrLine($index)
    {
        unset($this->adrLine[$index]);
    }

    /**
     * Gets as adrLine
     *
     * @return string[]
     */
    public function getAdrLine()
    {
        return $this->adrLine;
    }

    /**
     * Sets a new adrLine
     *
     * @param string $adrLine
     * @return self
     */
    public function setAdrLine(array $adrLine)
    {
        $this->adrLine = $adrLine;
        return $this;
    }


}

?>