<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing Party11ChoiceType
 *
 * 
 * XSD Type: Party11Choice
 */
class Party11ChoiceType
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\OrganisationIdentification8Type $orgId
     */
    private $orgId = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PersonIdentification5Type $prvtId
     */
    private $prvtId = null;

    /**
     * Gets as orgId
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\OrganisationIdentification8Type
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * Sets a new orgId
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\OrganisationIdentification8Type $orgId
     * @return self
     */
    public function setOrgId(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\OrganisationIdentification8Type $orgId)
    {
        $this->orgId = $orgId;
        return $this;
    }

    /**
     * Gets as prvtId
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PersonIdentification5Type
     */
    public function getPrvtId()
    {
        return $this->prvtId;
    }

    /**
     * Sets a new prvtId
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\PersonIdentification5Type $prvtId
     * @return self
     */
    public function setPrvtId(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\PersonIdentification5Type $prvtId)
    {
        $this->prvtId = $prvtId;
        return $this;
    }


}

?>