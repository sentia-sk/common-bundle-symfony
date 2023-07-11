<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing CustomerCreditTransferInitiationV05Type
 *
 * 
 * XSD Type: CustomerCreditTransferInitiationV05
 */
class CustomerCreditTransferInitiationV05Type
{

    /**
     * @property \App\Model\Sepa\PainModel\GroupHeader48Type $grpHdr
     */
    private $grpHdr = null;

    /**
     * @property \App\Model\Sepa\PainModel\PaymentInstruction9Type[] $pmtInf
     */
    private $pmtInf = null;

    /**
     * @property \App\Model\Sepa\PainModel\SupplementaryData1Type[] $splmtryData
     */
    private $splmtryData = null;

    /**
     * Gets as grpHdr
     *
     * @return \App\Model\Sepa\PainModel\GroupHeader48Type
     */
    public function getGrpHdr()
    {
        return $this->grpHdr;
    }

    /**
     * Sets a new grpHdr
     *
     * @param \App\Model\Sepa\PainModel\GroupHeader48Type $grpHdr
     * @return self
     */
    public function setGrpHdr(\App\Model\Sepa\PainModel\GroupHeader48Type $grpHdr)
    {
        $this->grpHdr = $grpHdr;
        return $this;
    }

    /**
     * Adds as pmtInf
     *
     * @param \App\Model\Sepa\PainModel\PaymentInstruction9Type $pmtInf
     *@return self
     */
    public function addToPmtInf(\App\Model\Sepa\PainModel\PaymentInstruction9Type $pmtInf)
    {
        $this->pmtInf[] = $pmtInf;
        return $this;
    }

    /**
     * isset pmtInf
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPmtInf($index)
    {
        return isset($this->pmtInf[$index]);
    }

    /**
     * unset pmtInf
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPmtInf($index)
    {
        unset($this->pmtInf[$index]);
    }

    /**
     * Gets as pmtInf
     *
     * @return \App\Model\Sepa\PainModel\PaymentInstruction9Type[]
     */
    public function getPmtInf()
    {
        return $this->pmtInf;
    }

    /**
     * Sets a new pmtInf
     *
     * @param \App\Model\Sepa\PainModel\PaymentInstruction9Type[] $pmtInf
     * @return self
     */
    public function setPmtInf(array $pmtInf)
    {
        $this->pmtInf = $pmtInf;
        return $this;
    }

    /**
     * Adds as splmtryData
     *
     * @param \App\Model\Sepa\PainModel\SupplementaryData1Type $splmtryData
     *@return self
     */
    public function addToSplmtryData(\App\Model\Sepa\PainModel\SupplementaryData1Type $splmtryData)
    {
        $this->splmtryData[] = $splmtryData;
        return $this;
    }

    /**
     * isset splmtryData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSplmtryData($index)
    {
        return isset($this->splmtryData[$index]);
    }

    /**
     * unset splmtryData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSplmtryData($index)
    {
        unset($this->splmtryData[$index]);
    }

    /**
     * Gets as splmtryData
     *
     * @return \App\Model\Sepa\PainModel\SupplementaryData1Type[]
     */
    public function getSplmtryData()
    {
        return $this->splmtryData;
    }

    /**
     * Sets a new splmtryData
     *
     * @param \App\Model\Sepa\PainModel\SupplementaryData1Type[] $splmtryData
     * @return self
     */
    public function setSplmtryData(array $splmtryData)
    {
        $this->splmtryData = $splmtryData;
        return $this;
    }


}

?>