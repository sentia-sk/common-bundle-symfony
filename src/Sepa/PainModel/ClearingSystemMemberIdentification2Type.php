<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing ClearingSystemMemberIdentification2Type
 *
 * 
 * XSD Type: ClearingSystemMemberIdentification2
 */
class ClearingSystemMemberIdentification2Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ClearingSystemIdentification2ChoiceType $clrSysId
     */
    private $clrSysId = null;

    /**
     * @property string $mmbId
     */
    private $mmbId = null;

    /**
     * Gets as clrSysId
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ClearingSystemIdentification2ChoiceType
     */
    public function getClrSysId()
    {
        return $this->clrSysId;
    }

    /**
     * Sets a new clrSysId
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ClearingSystemIdentification2ChoiceType $clrSysId
     * @return self
     */
    public function setClrSysId(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ClearingSystemIdentification2ChoiceType $clrSysId)
    {
        $this->clrSysId = $clrSysId;
        return $this;
    }

    /**
     * Gets as mmbId
     *
     * @return string
     */
    public function getMmbId()
    {
        return $this->mmbId;
    }

    /**
     * Sets a new mmbId
     *
     * @param string $mmbId
     * @return self
     */
    public function setMmbId($mmbId)
    {
        $this->mmbId = $mmbId;
        return $this;
    }


}

?>