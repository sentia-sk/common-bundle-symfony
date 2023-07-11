<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing Cheque7Type
 *
 * 
 * XSD Type: Cheque7
 */
class Cheque7Type
{

    /**
     * @property string $chqTp
     */
    private $chqTp = null;

    /**
     * @property string $chqNb
     */
    private $chqNb = null;

    /**
     * @property \App\Model\Sepa\PainModel\NameAndAddress10Type $chqFr
     */
    private $chqFr = null;

    /**
     * @property \App\Model\Sepa\PainModel\ChequeDeliveryMethod1ChoiceType $dlvryMtd
     */
    private $dlvryMtd = null;

    /**
     * @property \App\Model\Sepa\PainModel\NameAndAddress10Type $dlvrTo
     */
    private $dlvrTo = null;

    /**
     * @property string $instrPrty
     */
    private $instrPrty = null;

    /**
     * @property \DateTime $chqMtrtyDt
     */
    private $chqMtrtyDt = null;

    /**
     * @property string $frmsCd
     */
    private $frmsCd = null;

    /**
     * @property string[] $memoFld
     */
    private $memoFld = null;

    /**
     * @property string $rgnlClrZone
     */
    private $rgnlClrZone = null;

    /**
     * @property string $prtLctn
     */
    private $prtLctn = null;

    /**
     * @property string[] $sgntr
     */
    private $sgntr = null;

    /**
     * Gets as chqTp
     *
     * @return string
     */
    public function getChqTp()
    {
        return $this->chqTp;
    }

    /**
     * Sets a new chqTp
     *
     * @param string $chqTp
     * @return self
     */
    public function setChqTp($chqTp)
    {
        $this->chqTp = $chqTp;
        return $this;
    }

    /**
     * Gets as chqNb
     *
     * @return string
     */
    public function getChqNb()
    {
        return $this->chqNb;
    }

    /**
     * Sets a new chqNb
     *
     * @param string $chqNb
     * @return self
     */
    public function setChqNb($chqNb)
    {
        $this->chqNb = $chqNb;
        return $this;
    }

    /**
     * Gets as chqFr
     *
     * @return \App\Model\Sepa\PainModel\NameAndAddress10Type
     */
    public function getChqFr()
    {
        return $this->chqFr;
    }

    /**
     * Sets a new chqFr
     *
     * @param \App\Model\Sepa\PainModel\NameAndAddress10Type $chqFr
     * @return self
     */
    public function setChqFr(\App\Model\Sepa\PainModel\NameAndAddress10Type $chqFr)
    {
        $this->chqFr = $chqFr;
        return $this;
    }

    /**
     * Gets as dlvryMtd
     *
     * @return \App\Model\Sepa\PainModel\ChequeDeliveryMethod1ChoiceType
     */
    public function getDlvryMtd()
    {
        return $this->dlvryMtd;
    }

    /**
     * Sets a new dlvryMtd
     *
     * @param \App\Model\Sepa\PainModel\ChequeDeliveryMethod1ChoiceType $dlvryMtd
     * @return self
     */
    public function setDlvryMtd(\App\Model\Sepa\PainModel\ChequeDeliveryMethod1ChoiceType $dlvryMtd)
    {
        $this->dlvryMtd = $dlvryMtd;
        return $this;
    }

    /**
     * Gets as dlvrTo
     *
     * @return \App\Model\Sepa\PainModel\NameAndAddress10Type
     */
    public function getDlvrTo()
    {
        return $this->dlvrTo;
    }

    /**
     * Sets a new dlvrTo
     *
     * @param \App\Model\Sepa\PainModel\NameAndAddress10Type $dlvrTo
     * @return self
     */
    public function setDlvrTo(\App\Model\Sepa\PainModel\NameAndAddress10Type $dlvrTo)
    {
        $this->dlvrTo = $dlvrTo;
        return $this;
    }

    /**
     * Gets as instrPrty
     *
     * @return string
     */
    public function getInstrPrty()
    {
        return $this->instrPrty;
    }

    /**
     * Sets a new instrPrty
     *
     * @param string $instrPrty
     * @return self
     */
    public function setInstrPrty($instrPrty)
    {
        $this->instrPrty = $instrPrty;
        return $this;
    }

    /**
     * Gets as chqMtrtyDt
     *
     * @return \DateTime
     */
    public function getChqMtrtyDt()
    {
        return $this->chqMtrtyDt;
    }

    /**
     * Sets a new chqMtrtyDt
     *
     * @param \DateTime $chqMtrtyDt
     * @return self
     */
    public function setChqMtrtyDt(\DateTime $chqMtrtyDt)
    {
        $this->chqMtrtyDt = $chqMtrtyDt;
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
     * Adds as memoFld
     *
     * @return self
     * @param string $memoFld
     */
    public function addToMemoFld($memoFld)
    {
        $this->memoFld[] = $memoFld;
        return $this;
    }

    /**
     * isset memoFld
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMemoFld($index)
    {
        return isset($this->memoFld[$index]);
    }

    /**
     * unset memoFld
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMemoFld($index)
    {
        unset($this->memoFld[$index]);
    }

    /**
     * Gets as memoFld
     *
     * @return string[]
     */
    public function getMemoFld()
    {
        return $this->memoFld;
    }

    /**
     * Sets a new memoFld
     *
     * @param string $memoFld
     * @return self
     */
    public function setMemoFld(array $memoFld)
    {
        $this->memoFld = $memoFld;
        return $this;
    }

    /**
     * Gets as rgnlClrZone
     *
     * @return string
     */
    public function getRgnlClrZone()
    {
        return $this->rgnlClrZone;
    }

    /**
     * Sets a new rgnlClrZone
     *
     * @param string $rgnlClrZone
     * @return self
     */
    public function setRgnlClrZone($rgnlClrZone)
    {
        $this->rgnlClrZone = $rgnlClrZone;
        return $this;
    }

    /**
     * Gets as prtLctn
     *
     * @return string
     */
    public function getPrtLctn()
    {
        return $this->prtLctn;
    }

    /**
     * Sets a new prtLctn
     *
     * @param string $prtLctn
     * @return self
     */
    public function setPrtLctn($prtLctn)
    {
        $this->prtLctn = $prtLctn;
        return $this;
    }

    /**
     * Adds as sgntr
     *
     * @return self
     * @param string $sgntr
     */
    public function addToSgntr($sgntr)
    {
        $this->sgntr[] = $sgntr;
        return $this;
    }

    /**
     * isset sgntr
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSgntr($index)
    {
        return isset($this->sgntr[$index]);
    }

    /**
     * unset sgntr
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSgntr($index)
    {
        unset($this->sgntr[$index]);
    }

    /**
     * Gets as sgntr
     *
     * @return string[]
     */
    public function getSgntr()
    {
        return $this->sgntr;
    }

    /**
     * Sets a new sgntr
     *
     * @param string $sgntr
     * @return self
     */
    public function setSgntr(array $sgntr)
    {
        $this->sgntr = $sgntr;
        return $this;
    }


}

?>