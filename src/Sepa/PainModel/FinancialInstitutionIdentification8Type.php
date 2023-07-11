<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing FinancialInstitutionIdentification8Type
 *
 * 
 * XSD Type: FinancialInstitutionIdentification8
 */
class FinancialInstitutionIdentification8Type
{

    /**
     * @property string $bICFI
     */
    private $bICFI = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ClearingSystemMemberIdentification2Type $clrSysMmbId
     */
    private $clrSysMmbId = null;

    /**
     * @property string $nm
     */
    private $nm = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PostalAddress6Type $pstlAdr
     */
    private $pstlAdr = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericFinancialIdentification1Type $othr
     */
    private $othr = null;

    /**
     * Gets as bICFI
     *
     * @return string
     */
    public function getBICFI()
    {
        return $this->bICFI;
    }

    /**
     * Sets a new bICFI
     *
     * @param string $bICFI
     * @return self
     */
    public function setBICFI($bICFI)
    {
        $this->bICFI = $bICFI;
        return $this;
    }

    /**
     * Gets as clrSysMmbId
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ClearingSystemMemberIdentification2Type
     */
    public function getClrSysMmbId()
    {
        return $this->clrSysMmbId;
    }

    /**
     * Sets a new clrSysMmbId
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ClearingSystemMemberIdentification2Type $clrSysMmbId
     * @return self
     */
    public function setClrSysMmbId(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ClearingSystemMemberIdentification2Type $clrSysMmbId)
    {
        $this->clrSysMmbId = $clrSysMmbId;
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
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PostalAddress6Type
     */
    public function getPstlAdr()
    {
        return $this->pstlAdr;
    }

    /**
     * Sets a new pstlAdr
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PostalAddress6Type $pstlAdr
     * @return self
     */
    public function setPstlAdr(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\PostalAddress6Type $pstlAdr)
    {
        $this->pstlAdr = $pstlAdr;
        return $this;
    }

    /**
     * Gets as othr
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericFinancialIdentification1Type
     */
    public function getOthr()
    {
        return $this->othr;
    }

    /**
     * Sets a new othr
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericFinancialIdentification1Type $othr
     * @return self
     */
    public function setOthr(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericFinancialIdentification1Type $othr)
    {
        $this->othr = $othr;
        return $this;
    }


}

?>