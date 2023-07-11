<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing GroupHeader48Type
 *
 * 
 * XSD Type: GroupHeader48
 */
class GroupHeader48Type
{

    /**
     * @property string $msgId
     */
    private $msgId = null;

    /**
     * @property \DateTime $creDtTm
     */
    private $creDtTm = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\Authorisation1ChoiceType[] $authstn
     */
    private $authstn = null;

    /**
     * @property string $nbOfTxs
     */
    private $nbOfTxs = null;

    /**
     * @property float $ctrlSum
     */
    private $ctrlSum = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type $initgPty
     */
    private $initgPty = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $fwdgAgt
     */
    private $fwdgAgt = null;

    /**
     * Gets as msgId
     *
     * @return string
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * Sets a new msgId
     *
     * @param string $msgId
     * @return self
     */
    public function setMsgId($msgId)
    {
        $this->msgId = $msgId;
        return $this;
    }

    /**
     * Gets as creDtTm
     *
     * @return \DateTime
     */
    public function getCreDtTm()
    {
        return $this->creDtTm;
    }

    /**
     * Sets a new creDtTm
     *
     * @param \DateTime $creDtTm
     * @return self
     */
    public function setCreDtTm(\DateTime $creDtTm)
    {
        $this->creDtTm = $creDtTm;
        return $this;
    }

    /**
     * Adds as authstn
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\Authorisation1ChoiceType $authstn
     *@return self
     */
    public function addToAuthstn(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\Authorisation1ChoiceType $authstn)
    {
        $this->authstn[] = $authstn;
        return $this;
    }

    /**
     * isset authstn
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAuthstn($index)
    {
        return isset($this->authstn[$index]);
    }

    /**
     * unset authstn
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAuthstn($index)
    {
        unset($this->authstn[$index]);
    }

    /**
     * Gets as authstn
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\Authorisation1ChoiceType[]
     */
    public function getAuthstn()
    {
        return $this->authstn;
    }

    /**
     * Sets a new authstn
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\Authorisation1ChoiceType[] $authstn
     * @return self
     */
    public function setAuthstn(array $authstn)
    {
        $this->authstn = $authstn;
        return $this;
    }

    /**
     * Gets as nbOfTxs
     *
     * @return string
     */
    public function getNbOfTxs()
    {
        return $this->nbOfTxs;
    }

    /**
     * Sets a new nbOfTxs
     *
     * @param string $nbOfTxs
     * @return self
     */
    public function setNbOfTxs($nbOfTxs)
    {
        $this->nbOfTxs = $nbOfTxs;
        return $this;
    }

    /**
     * Gets as ctrlSum
     *
     * @return float
     */
    public function getCtrlSum()
    {
        return $this->ctrlSum;
    }

    /**
     * Sets a new ctrlSum
     *
     * @param float $ctrlSum
     * @return self
     */
    public function setCtrlSum($ctrlSum)
    {
        $this->ctrlSum = $ctrlSum;
        return $this;
    }

    /**
     * Gets as initgPty
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type
     */
    public function getInitgPty()
    {
        return $this->initgPty;
    }

    /**
     * Sets a new initgPty
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type $initgPty
     * @return self
     */
    public function setInitgPty(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\PartyIdentification43Type $initgPty)
    {
        $this->initgPty = $initgPty;
        return $this;
    }

    /**
     * Gets as fwdgAgt
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type
     */
    public function getFwdgAgt()
    {
        return $this->fwdgAgt;
    }

    /**
     * Sets a new fwdgAgt
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $fwdgAgt
     * @return self
     */
    public function setFwdgAgt(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\BranchAndFinancialInstitutionIdentification5Type $fwdgAgt)
    {
        $this->fwdgAgt = $fwdgAgt;
        return $this;
    }


}

?>