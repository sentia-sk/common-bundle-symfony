<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing TaxRecord1Type
 *
 * 
 * XSD Type: TaxRecord1
 */
class TaxRecord1Type
{

    /**
     * @property string $tp
     */
    private $tp = null;

    /**
     * @property string $ctgy
     */
    private $ctgy = null;

    /**
     * @property string $ctgyDtls
     */
    private $ctgyDtls = null;

    /**
     * @property string $dbtrSts
     */
    private $dbtrSts = null;

    /**
     * @property string $certId
     */
    private $certId = null;

    /**
     * @property string $frmsCd
     */
    private $frmsCd = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxPeriod1Type $prd
     */
    private $prd = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmount1Type $taxAmt
     */
    private $taxAmt = null;

    /**
     * @property string $addtlInf
     */
    private $addtlInf = null;

    /**
     * Gets as tp
     *
     * @return string
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Sets a new tp
     *
     * @param string $tp
     * @return self
     */
    public function setTp($tp)
    {
        $this->tp = $tp;
        return $this;
    }

    /**
     * Gets as ctgy
     *
     * @return string
     */
    public function getCtgy()
    {
        return $this->ctgy;
    }

    /**
     * Sets a new ctgy
     *
     * @param string $ctgy
     * @return self
     */
    public function setCtgy($ctgy)
    {
        $this->ctgy = $ctgy;
        return $this;
    }

    /**
     * Gets as ctgyDtls
     *
     * @return string
     */
    public function getCtgyDtls()
    {
        return $this->ctgyDtls;
    }

    /**
     * Sets a new ctgyDtls
     *
     * @param string $ctgyDtls
     * @return self
     */
    public function setCtgyDtls($ctgyDtls)
    {
        $this->ctgyDtls = $ctgyDtls;
        return $this;
    }

    /**
     * Gets as dbtrSts
     *
     * @return string
     */
    public function getDbtrSts()
    {
        return $this->dbtrSts;
    }

    /**
     * Sets a new dbtrSts
     *
     * @param string $dbtrSts
     * @return self
     */
    public function setDbtrSts($dbtrSts)
    {
        $this->dbtrSts = $dbtrSts;
        return $this;
    }

    /**
     * Gets as certId
     *
     * @return string
     */
    public function getCertId()
    {
        return $this->certId;
    }

    /**
     * Sets a new certId
     *
     * @param string $certId
     * @return self
     */
    public function setCertId($certId)
    {
        $this->certId = $certId;
        return $this;
    }

    /**
     * Gets as frmsCd
     *
     * @return string
     */
    public function getFrmsCd()
    {
        return $this->frmsCd;
    }

    /**
     * Sets a new frmsCd
     *
     * @param string $frmsCd
     * @return self
     */
    public function setFrmsCd($frmsCd)
    {
        $this->frmsCd = $frmsCd;
        return $this;
    }

    /**
     * Gets as prd
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxPeriod1Type
     */
    public function getPrd()
    {
        return $this->prd;
    }

    /**
     * Sets a new prd
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxPeriod1Type $prd
     * @return self
     */
    public function setPrd(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxPeriod1Type $prd)
    {
        $this->prd = $prd;
        return $this;
    }

    /**
     * Gets as taxAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmount1Type
     */
    public function getTaxAmt()
    {
        return $this->taxAmt;
    }

    /**
     * Sets a new taxAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmount1Type $taxAmt
     * @return self
     */
    public function setTaxAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmount1Type $taxAmt)
    {
        $this->taxAmt = $taxAmt;
        return $this;
    }

    /**
     * Gets as addtlInf
     *
     * @return string
     */
    public function getAddtlInf()
    {
        return $this->addtlInf;
    }

    /**
     * Sets a new addtlInf
     *
     * @param string $addtlInf
     * @return self
     */
    public function setAddtlInf($addtlInf)
    {
        $this->addtlInf = $addtlInf;
        return $this;
    }


}

?>