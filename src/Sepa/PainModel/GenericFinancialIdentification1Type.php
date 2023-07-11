<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing GenericFinancialIdentification1Type
 *
 * 
 * XSD Type: GenericFinancialIdentification1
 */
class GenericFinancialIdentification1Type
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \App\Model\Sepa\PainModel\FinancialIdentificationSchemeName1ChoiceType $schmeNm
     */
    private $schmeNm = null;

    /**
     * @property string $issr
     */
    private $issr = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as schmeNm
     *
     * @return \App\Model\Sepa\PainModel\FinancialIdentificationSchemeName1ChoiceType
     */
    public function getSchmeNm()
    {
        return $this->schmeNm;
    }

    /**
     * Sets a new schmeNm
     *
     * @param \App\Model\Sepa\PainModel\FinancialIdentificationSchemeName1ChoiceType $schmeNm
     * @return self
     */
    public function setSchmeNm(\App\Model\Sepa\PainModel\FinancialIdentificationSchemeName1ChoiceType $schmeNm)
    {
        $this->schmeNm = $schmeNm;
        return $this;
    }

    /**
     * Gets as issr
     *
     * @return string
     */
    public function getIssr()
    {
        return $this->issr;
    }

    /**
     * Sets a new issr
     *
     * @param string $issr
     * @return self
     */
    public function setIssr($issr)
    {
        $this->issr = $issr;
        return $this;
    }


}

?>