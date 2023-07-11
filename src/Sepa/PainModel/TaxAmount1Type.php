<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing TaxAmount1Type
 *
 * 
 * XSD Type: TaxAmount1
 */
class TaxAmount1Type
{

    /**
     * @property float $rate
     */
    private $rate = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $taxblBaseAmt
     */
    private $taxblBaseAmt = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $ttlAmt
     */
    private $ttlAmt = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecordDetails1Type[] $dtls
     */
    private $dtls = null;

    /**
     * Gets as rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Gets as taxblBaseAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getTaxblBaseAmt()
    {
        return $this->taxblBaseAmt;
    }

    /**
     * Sets a new taxblBaseAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $taxblBaseAmt
     * @return self
     */
    public function setTaxblBaseAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $taxblBaseAmt)
    {
        $this->taxblBaseAmt = $taxblBaseAmt;
        return $this;
    }

    /**
     * Gets as ttlAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getTtlAmt()
    {
        return $this->ttlAmt;
    }

    /**
     * Sets a new ttlAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $ttlAmt
     * @return self
     */
    public function setTtlAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $ttlAmt)
    {
        $this->ttlAmt = $ttlAmt;
        return $this;
    }

    /**
     * Adds as dtls
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecordDetails1Type $dtls
     *@return self
     */
    public function addToDtls(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecordDetails1Type $dtls)
    {
        $this->dtls[] = $dtls;
        return $this;
    }

    /**
     * isset dtls
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDtls($index)
    {
        return isset($this->dtls[$index]);
    }

    /**
     * unset dtls
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDtls($index)
    {
        unset($this->dtls[$index]);
    }

    /**
     * Gets as dtls
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecordDetails1Type[]
     */
    public function getDtls()
    {
        return $this->dtls;
    }

    /**
     * Sets a new dtls
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecordDetails1Type[] $dtls
     * @return self
     */
    public function setDtls(array $dtls)
    {
        $this->dtls = $dtls;
        return $this;
    }


}

?>