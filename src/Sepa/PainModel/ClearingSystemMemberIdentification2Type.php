<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing ClearingSystemMemberIdentification2Type
 *
 * 
 * XSD Type: ClearingSystemMemberIdentification2
 */
class ClearingSystemMemberIdentification2Type
{

    /**
     * @property \App\Model\Sepa\PainModel\ClearingSystemIdentification2ChoiceType $clrSysId
     */
    private $clrSysId = null;

    /**
     * @property string $mmbId
     */
    private $mmbId = null;

    /**
     * Gets as clrSysId
     *
     * @return \App\Model\Sepa\PainModel\ClearingSystemIdentification2ChoiceType
     */
    public function getClrSysId()
    {
        return $this->clrSysId;
    }

    /**
     * Sets a new clrSysId
     *
     * @param \App\Model\Sepa\PainModel\ClearingSystemIdentification2ChoiceType $clrSysId
     * @return self
     */
    public function setClrSysId(\App\Model\Sepa\PainModel\ClearingSystemIdentification2ChoiceType $clrSysId)
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