<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing GenericAccountIdentification1Type
 *
 * 
 * XSD Type: GenericAccountIdentification1
 */
class GenericAccountIdentification1Type
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\AccountSchemeName1ChoiceType $schmeNm
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
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\AccountSchemeName1ChoiceType
     */
    public function getSchmeNm()
    {
        return $this->schmeNm;
    }

    /**
     * Sets a new schmeNm
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\AccountSchemeName1ChoiceType $schmeNm
     * @return self
     */
    public function setSchmeNm(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\AccountSchemeName1ChoiceType $schmeNm)
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