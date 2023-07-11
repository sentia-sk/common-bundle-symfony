<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing Party11ChoiceType
 *
 * 
 * XSD Type: Party11Choice
 */
class Party11ChoiceType
{

    /**
     * @property \App\Model\Sepa\PainModel\OrganisationIdentification8Type $orgId
     */
    private $orgId = null;

    /**
     * @property \App\Model\Sepa\PainModel\PersonIdentification5Type $prvtId
     */
    private $prvtId = null;

    /**
     * Gets as orgId
     *
     * @return \App\Model\Sepa\PainModel\OrganisationIdentification8Type
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * Sets a new orgId
     *
     * @param \App\Model\Sepa\PainModel\OrganisationIdentification8Type $orgId
     * @return self
     */
    public function setOrgId(\App\Model\Sepa\PainModel\OrganisationIdentification8Type $orgId)
    {
        $this->orgId = $orgId;
        return $this;
    }

    /**
     * Gets as prvtId
     *
     * @return \App\Model\Sepa\PainModel\PersonIdentification5Type
     */
    public function getPrvtId()
    {
        return $this->prvtId;
    }

    /**
     * Sets a new prvtId
     *
     * @param \App\Model\Sepa\PainModel\PersonIdentification5Type $prvtId
     * @return self
     */
    public function setPrvtId(\App\Model\Sepa\PainModel\PersonIdentification5Type $prvtId)
    {
        $this->prvtId = $prvtId;
        return $this;
    }


}

?>