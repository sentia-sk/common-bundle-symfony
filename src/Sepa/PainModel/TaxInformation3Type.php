<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing TaxInformation3Type
 *
 * 
 * XSD Type: TaxInformation3
 */
class TaxInformation3Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxParty1Type $cdtr
     */
    private $cdtr = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxParty2Type $dbtr
     */
    private $dbtr = null;

    /**
     * @property string $admstnZn
     */
    private $admstnZn = null;

    /**
     * @property string $refNb
     */
    private $refNb = null;

    /**
     * @property string $mtd
     */
    private $mtd = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $ttlTaxblBaseAmt
     */
    private $ttlTaxblBaseAmt = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $ttlTaxAmt
     */
    private $ttlTaxAmt = null;

    /**
     * @property \DateTime $dt
     */
    private $dt = null;

    /**
     * @property float $seqNb
     */
    private $seqNb = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecord1Type[] $rcrd
     */
    private $rcrd = null;

    /**
     * Gets as cdtr
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxParty1Type
     */
    public function getCdtr()
    {
        return $this->cdtr;
    }

    /**
     * Sets a new cdtr
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxParty1Type $cdtr
     * @return self
     */
    public function setCdtr(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxParty1Type $cdtr)
    {
        $this->cdtr = $cdtr;
        return $this;
    }

    /**
     * Gets as dbtr
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxParty2Type
     */
    public function getDbtr()
    {
        return $this->dbtr;
    }

    /**
     * Sets a new dbtr
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxParty2Type $dbtr
     * @return self
     */
    public function setDbtr(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxParty2Type $dbtr)
    {
        $this->dbtr = $dbtr;
        return $this;
    }

    /**
     * Gets as admstnZn
     *
     * @return string
     */
    public function getAdmstnZn()
    {
        return $this->admstnZn;
    }

    /**
     * Sets a new admstnZn
     *
     * @param string $admstnZn
     * @return self
     */
    public function setAdmstnZn($admstnZn)
    {
        $this->admstnZn = $admstnZn;
        return $this;
    }

    /**
     * Gets as refNb
     *
     * @return string
     */
    public function getRefNb()
    {
        return $this->refNb;
    }

    /**
     * Sets a new refNb
     *
     * @param string $refNb
     * @return self
     */
    public function setRefNb($refNb)
    {
        $this->refNb = $refNb;
        return $this;
    }

    /**
     * Gets as mtd
     *
     * @return string
     */
    public function getMtd()
    {
        return $this->mtd;
    }

    /**
     * Sets a new mtd
     *
     * @param string $mtd
     * @return self
     */
    public function setMtd($mtd)
    {
        $this->mtd = $mtd;
        return $this;
    }

    /**
     * Gets as ttlTaxblBaseAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getTtlTaxblBaseAmt()
    {
        return $this->ttlTaxblBaseAmt;
    }

    /**
     * Sets a new ttlTaxblBaseAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $ttlTaxblBaseAmt
     * @return self
     */
    public function setTtlTaxblBaseAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $ttlTaxblBaseAmt)
    {
        $this->ttlTaxblBaseAmt = $ttlTaxblBaseAmt;
        return $this;
    }

    /**
     * Gets as ttlTaxAmt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType
     */
    public function getTtlTaxAmt()
    {
        return $this->ttlTaxAmt;
    }

    /**
     * Sets a new ttlTaxAmt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $ttlTaxAmt
     * @return self
     */
    public function setTtlTaxAmt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ActiveOrHistoricCurrencyAndAmountType $ttlTaxAmt)
    {
        $this->ttlTaxAmt = $ttlTaxAmt;
        return $this;
    }

    /**
     * Gets as dt
     *
     * @return \DateTime
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Sets a new dt
     *
     * @param \DateTime $dt
     * @return self
     */
    public function setDt(\DateTime $dt)
    {
        $this->dt = $dt;
        return $this;
    }

    /**
     * Gets as seqNb
     *
     * @return float
     */
    public function getSeqNb()
    {
        return $this->seqNb;
    }

    /**
     * Sets a new seqNb
     *
     * @param float $seqNb
     * @return self
     */
    public function setSeqNb($seqNb)
    {
        $this->seqNb = $seqNb;
        return $this;
    }

    /**
     * Adds as rcrd
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecord1Type $rcrd
     *@return self
     */
    public function addToRcrd(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecord1Type $rcrd)
    {
        $this->rcrd[] = $rcrd;
        return $this;
    }

    /**
     * isset rcrd
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRcrd($index)
    {
        return isset($this->rcrd[$index]);
    }

    /**
     * unset rcrd
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRcrd($index)
    {
        unset($this->rcrd[$index]);
    }

    /**
     * Gets as rcrd
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecord1Type[]
     */
    public function getRcrd()
    {
        return $this->rcrd;
    }

    /**
     * Sets a new rcrd
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\TaxRecord1Type[] $rcrd
     * @return self
     */
    public function setRcrd(array $rcrd)
    {
        $this->rcrd = $rcrd;
        return $this;
    }


}

?>