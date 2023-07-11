<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing BranchAndFinancialInstitutionIdentification5Type
 *
 * 
 * XSD Type: BranchAndFinancialInstitutionIdentification5
 */
class BranchAndFinancialInstitutionIdentification5Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\FinancialInstitutionIdentification8Type $finInstnId
     */
    private $finInstnId = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\BranchData2Type $brnchId
     */
    private $brnchId = null;

    /**
     * Gets as finInstnId
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\FinancialInstitutionIdentification8Type
     */
    public function getFinInstnId()
    {
        return $this->finInstnId;
    }

    /**
     * Sets a new finInstnId
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\FinancialInstitutionIdentification8Type $finInstnId
     * @return self
     */
    public function setFinInstnId(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\FinancialInstitutionIdentification8Type $finInstnId)
    {
        $this->finInstnId = $finInstnId;
        return $this;
    }

    /**
     * Gets as brnchId
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\BranchData2Type
     */
    public function getBrnchId()
    {
        return $this->brnchId;
    }

    /**
     * Sets a new brnchId
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\BranchData2Type $brnchId
     * @return self
     */
    public function setBrnchId(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\BranchData2Type $brnchId)
    {
        $this->brnchId = $brnchId;
        return $this;
    }


}

?>