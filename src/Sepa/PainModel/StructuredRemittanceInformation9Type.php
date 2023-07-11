<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing StructuredRemittanceInformation9Type
 *
 * 
 * XSD Type: StructuredRemittanceInformation9
 */
class StructuredRemittanceInformation9Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ReferredDocumentInformation3Type[] $rfrdDocInf
     */
    private $rfrdDocInf = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\RemittanceAmount2Type $rfrdDocAmt
     */
    private $rfrdDocAmt = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CreditorReferenceInformation2Type $cdtrRefInf
     */
    private $cdtrRefInf = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type $invcr
     */
    private $invcr = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type $invcee
     */
    private $invcee = null;

    /**
     * @property string[] $addtlRmtInf
     */
    private $addtlRmtInf = null;

    /**
     * Adds as rfrdDocInf
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ReferredDocumentInformation3Type $rfrdDocInf
     *@return self
     */
    public function addToRfrdDocInf(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ReferredDocumentInformation3Type $rfrdDocInf)
    {
        $this->rfrdDocInf[] = $rfrdDocInf;
        return $this;
    }

    /**
     * isset rfrdDocInf
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRfrdDocInf($index)
    {
        return isset($this->rfrdDocInf[$index]);
    }

    /**
     * unset rfrdDocInf
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRfrdDocInf($index)
    {
        unset($this->rfrdDocInf[$index]);
    }

    /**
     * Gets as rfrdDocInf
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ReferredDocumentInformation3Type[]
     */
    public function getRfrdDocInf()
    {
        return $this->rfrdDocInf;
    }

    /**
     * Sets a new rfrdDocInf
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ReferredDocumentInformation3Type[] $rfrdDocInf
     * @return self
     */
    public function setRfrdDocInf(array $rfrdDocInf)
    {
        $this->rfrdDocInf = $rfrdDocInf;
        return $this;
    }

    /**
     * Gets as rfrdDocAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\RemittanceAmount2Type
     */
    public function getRfrdDocAmt()
    {
        return $this->rfrdDocAmt;
    }

    /**
     * Sets a new rfrdDocAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\RemittanceAmount2Type $rfrdDocAmt
     * @return self
     */
    public function setRfrdDocAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\RemittanceAmount2Type $rfrdDocAmt)
    {
        $this->rfrdDocAmt = $rfrdDocAmt;
        return $this;
    }

    /**
     * Gets as cdtrRefInf
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CreditorReferenceInformation2Type
     */
    public function getCdtrRefInf()
    {
        return $this->cdtrRefInf;
    }

    /**
     * Sets a new cdtrRefInf
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CreditorReferenceInformation2Type $cdtrRefInf
     * @return self
     */
    public function setCdtrRefInf(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\CreditorReferenceInformation2Type $cdtrRefInf)
    {
        $this->cdtrRefInf = $cdtrRefInf;
        return $this;
    }

    /**
     * Gets as invcr
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type
     */
    public function getInvcr()
    {
        return $this->invcr;
    }

    /**
     * Sets a new invcr
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type $invcr
     * @return self
     */
    public function setInvcr(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type $invcr)
    {
        $this->invcr = $invcr;
        return $this;
    }

    /**
     * Gets as invcee
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type
     */
    public function getInvcee()
    {
        return $this->invcee;
    }

    /**
     * Sets a new invcee
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type $invcee
     * @return self
     */
    public function setInvcee(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type $invcee)
    {
        $this->invcee = $invcee;
        return $this;
    }

    /**
     * Adds as addtlRmtInf
     *
     * @return self
     * @param string $addtlRmtInf
     */
    public function addToAddtlRmtInf($addtlRmtInf)
    {
        $this->addtlRmtInf[] = $addtlRmtInf;
        return $this;
    }

    /**
     * isset addtlRmtInf
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddtlRmtInf($index)
    {
        return isset($this->addtlRmtInf[$index]);
    }

    /**
     * unset addtlRmtInf
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddtlRmtInf($index)
    {
        unset($this->addtlRmtInf[$index]);
    }

    /**
     * Gets as addtlRmtInf
     *
     * @return string[]
     */
    public function getAddtlRmtInf()
    {
        return $this->addtlRmtInf;
    }

    /**
     * Sets a new addtlRmtInf
     *
     * @param string $addtlRmtInf
     * @return self
     */
    public function setAddtlRmtInf(array $addtlRmtInf)
    {
        $this->addtlRmtInf = $addtlRmtInf;
        return $this;
    }


}

?>