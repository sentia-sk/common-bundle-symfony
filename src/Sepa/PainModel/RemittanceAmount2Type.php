<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing RemittanceAmount2Type
 *
 * 
 * XSD Type: RemittanceAmount2
 */
class RemittanceAmount2Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $duePyblAmt
     */
    private $duePyblAmt = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DiscountAmountAndType1Type[] $dscntApldAmt
     */
    private $dscntApldAmt = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $cdtNoteAmt
     */
    private $cdtNoteAmt = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmountAndType1Type[] $taxAmt
     */
    private $taxAmt = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DocumentAdjustment1Type[] $adjstmntAmtAndRsn
     */
    private $adjstmntAmtAndRsn = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $rmtdAmt
     */
    private $rmtdAmt = null;

    /**
     * Gets as duePyblAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getDuePyblAmt()
    {
        return $this->duePyblAmt;
    }

    /**
     * Sets a new duePyblAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $duePyblAmt
     * @return self
     */
    public function setDuePyblAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $duePyblAmt)
    {
        $this->duePyblAmt = $duePyblAmt;
        return $this;
    }

    /**
     * Adds as dscntApldAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DiscountAmountAndType1Type $dscntApldAmt
     *@return self
     */
    public function addToDscntApldAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\DiscountAmountAndType1Type $dscntApldAmt)
    {
        $this->dscntApldAmt[] = $dscntApldAmt;
        return $this;
    }

    /**
     * isset dscntApldAmt
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDscntApldAmt($index)
    {
        return isset($this->dscntApldAmt[$index]);
    }

    /**
     * unset dscntApldAmt
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDscntApldAmt($index)
    {
        unset($this->dscntApldAmt[$index]);
    }

    /**
     * Gets as dscntApldAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DiscountAmountAndType1Type[]
     */
    public function getDscntApldAmt()
    {
        return $this->dscntApldAmt;
    }

    /**
     * Sets a new dscntApldAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DiscountAmountAndType1Type[] $dscntApldAmt
     * @return self
     */
    public function setDscntApldAmt(array $dscntApldAmt)
    {
        $this->dscntApldAmt = $dscntApldAmt;
        return $this;
    }

    /**
     * Gets as cdtNoteAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getCdtNoteAmt()
    {
        return $this->cdtNoteAmt;
    }

    /**
     * Sets a new cdtNoteAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $cdtNoteAmt
     * @return self
     */
    public function setCdtNoteAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $cdtNoteAmt)
    {
        $this->cdtNoteAmt = $cdtNoteAmt;
        return $this;
    }

    /**
     * Adds as taxAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmountAndType1Type $taxAmt
     *@return self
     */
    public function addToTaxAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmountAndType1Type $taxAmt)
    {
        $this->taxAmt[] = $taxAmt;
        return $this;
    }

    /**
     * isset taxAmt
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxAmt($index)
    {
        return isset($this->taxAmt[$index]);
    }

    /**
     * unset taxAmt
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxAmt($index)
    {
        unset($this->taxAmt[$index]);
    }

    /**
     * Gets as taxAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmountAndType1Type[]
     */
    public function getTaxAmt()
    {
        return $this->taxAmt;
    }

    /**
     * Sets a new taxAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxAmountAndType1Type[] $taxAmt
     * @return self
     */
    public function setTaxAmt(array $taxAmt)
    {
        $this->taxAmt = $taxAmt;
        return $this;
    }

    /**
     * Adds as adjstmntAmtAndRsn
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DocumentAdjustment1Type $adjstmntAmtAndRsn
     *@return self
     */
    public function addToAdjstmntAmtAndRsn(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\DocumentAdjustment1Type $adjstmntAmtAndRsn)
    {
        $this->adjstmntAmtAndRsn[] = $adjstmntAmtAndRsn;
        return $this;
    }

    /**
     * isset adjstmntAmtAndRsn
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdjstmntAmtAndRsn($index)
    {
        return isset($this->adjstmntAmtAndRsn[$index]);
    }

    /**
     * unset adjstmntAmtAndRsn
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdjstmntAmtAndRsn($index)
    {
        unset($this->adjstmntAmtAndRsn[$index]);
    }

    /**
     * Gets as adjstmntAmtAndRsn
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DocumentAdjustment1Type[]
     */
    public function getAdjstmntAmtAndRsn()
    {
        return $this->adjstmntAmtAndRsn;
    }

    /**
     * Sets a new adjstmntAmtAndRsn
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\DocumentAdjustment1Type[] $adjstmntAmtAndRsn
     * @return self
     */
    public function setAdjstmntAmtAndRsn(array $adjstmntAmtAndRsn)
    {
        $this->adjstmntAmtAndRsn = $adjstmntAmtAndRsn;
        return $this;
    }

    /**
     * Gets as rmtdAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getRmtdAmt()
    {
        return $this->rmtdAmt;
    }

    /**
     * Sets a new rmtdAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $rmtdAmt
     * @return self
     */
    public function setRmtdAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $rmtdAmt)
    {
        $this->rmtdAmt = $rmtdAmt;
        return $this;
    }


}

?>