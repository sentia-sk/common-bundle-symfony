<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing CashAccount24Type
 *
 * 
 * XSD Type: CashAccount24
 */
class CashAccount24Type
{

    /**
     * @property \App\Model\Sepa\PainModel\AccountIdentification4ChoiceType $id
     */
    private $id = null;

    /**
     * @property \App\Model\Sepa\PainModel\CashAccountType2ChoiceType $tp
     */
    private $tp = null;

    /**
     * @property string $ccy
     */
    private $ccy = null;

    /**
     * @property string $nm
     */
    private $nm = null;

    /**
     * Gets as id
     *
     * @return \App\Model\Sepa\PainModel\AccountIdentification4ChoiceType
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param \App\Model\Sepa\PainModel\AccountIdentification4ChoiceType $id
     * @return self
     */
    public function setId(\App\Model\Sepa\PainModel\AccountIdentification4ChoiceType $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as tp
     *
     * @return \App\Model\Sepa\PainModel\CashAccountType2ChoiceType
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Sets a new tp
     *
     * @param \App\Model\Sepa\PainModel\CashAccountType2ChoiceType $tp
     * @return self
     */
    public function setTp(\App\Model\Sepa\PainModel\CashAccountType2ChoiceType $tp)
    {
        $this->tp = $tp;
        return $this;
    }

    /**
     * Gets as ccy
     *
     * @return string
     */
    public function getCcy()
    {
        return $this->ccy;
    }

    /**
     * Sets a new ccy
     *
     * @param string $ccy
     * @return self
     */
    public function setCcy($ccy)
    {
        $this->ccy = $ccy;
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