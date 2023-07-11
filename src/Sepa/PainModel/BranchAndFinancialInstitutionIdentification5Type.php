<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing BranchAndFinancialInstitutionIdentification5Type
 *
 * 
 * XSD Type: BranchAndFinancialInstitutionIdentification5
 */
class BranchAndFinancialInstitutionIdentification5Type
{

    /**
     * @property \App\Model\Sepa\PainModel\FinancialInstitutionIdentification8Type $finInstnId
     */
    private $finInstnId = null;

    /**
     * @property \App\Model\Sepa\PainModel\BranchData2Type $brnchId
     */
    private $brnchId = null;

    /**
     * Gets as finInstnId
     *
     * @return \App\Model\Sepa\PainModel\FinancialInstitutionIdentification8Type
     */
    public function getFinInstnId()
    {
        return $this->finInstnId;
    }

    /**
     * Sets a new finInstnId
     *
     * @param \App\Model\Sepa\PainModel\FinancialInstitutionIdentification8Type $finInstnId
     * @return self
     */
    public function setFinInstnId(\App\Model\Sepa\PainModel\FinancialInstitutionIdentification8Type $finInstnId)
    {
        $this->finInstnId = $finInstnId;
        return $this;
    }

    /**
     * Gets as brnchId
     *
     * @return \App\Model\Sepa\PainModel\BranchData2Type
     */
    public function getBrnchId()
    {
        return $this->brnchId;
    }

    /**
     * Sets a new brnchId
     *
     * @param \App\Model\Sepa\PainModel\BranchData2Type $brnchId
     * @return self
     */
    public function setBrnchId(\App\Model\Sepa\PainModel\BranchData2Type $brnchId)
    {
        $this->brnchId = $brnchId;
        return $this;
    }


}

?>