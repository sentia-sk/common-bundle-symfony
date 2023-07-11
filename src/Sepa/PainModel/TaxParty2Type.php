<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing TaxParty2Type
 *
 * 
 * XSD Type: TaxParty2
 */
class TaxParty2Type
{

    /**
     * @property string $taxId
     */
    private $taxId = null;

    /**
     * @property string $regnId
     */
    private $regnId = null;

    /**
     * @property string $taxTp
     */
    private $taxTp = null;

    /**
     * @property \App\Model\Sepa\PainModel\TaxAuthorisation1Type $authstn
     */
    private $authstn = null;

    /**
     * Gets as taxId
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Sets a new taxId
     *
     * @param string $taxId
     * @return self
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;
        return $this;
    }

    /**
     * Gets as regnId
     *
     * @return string
     */
    public function getRegnId()
    {
        return $this->regnId;
    }

    /**
     * Sets a new regnId
     *
     * @param string $regnId
     * @return self
     */
    public function setRegnId($regnId)
    {
        $this->regnId = $regnId;
        return $this;
    }

    /**
     * Gets as taxTp
     *
     * @return string
     */
    public function getTaxTp()
    {
        return $this->taxTp;
    }

    /**
     * Sets a new taxTp
     *
     * @param string $taxTp
     * @return self
     */
    public function setTaxTp($taxTp)
    {
        $this->taxTp = $taxTp;
        return $this;
    }

    /**
     * Gets as authstn
     *
     * @return \App\Model\Sepa\PainModel\TaxAuthorisation1Type
     */
    public function getAuthstn()
    {
        return $this->authstn;
    }

    /**
     * Sets a new authstn
     *
     * @param \App\Model\Sepa\PainModel\TaxAuthorisation1Type $authstn
     * @return self
     */
    public function setAuthstn(\App\Model\Sepa\PainModel\TaxAuthorisation1Type $authstn)
    {
        $this->authstn = $authstn;
        return $this;
    }


}

?>