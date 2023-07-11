<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing RemittanceLocation2Type
 *
 * 
 * XSD Type: RemittanceLocation2
 */
class RemittanceLocation2Type
{

    /**
     * @property string $rmtId
     */
    private $rmtId = null;

    /**
     * @property string $rmtLctnMtd
     */
    private $rmtLctnMtd = null;

    /**
     * @property string $rmtLctnElctrncAdr
     */
    private $rmtLctnElctrncAdr = null;

    /**
     * @property \App\Model\Sepa\PainModel\NameAndAddress10Type $rmtLctnPstlAdr
     */
    private $rmtLctnPstlAdr = null;

    /**
     * Gets as rmtId
     *
     * @return string
     */
    public function getRmtId()
    {
        return $this->rmtId;
    }

    /**
     * Sets a new rmtId
     *
     * @param string $rmtId
     * @return self
     */
    public function setRmtId($rmtId)
    {
        $this->rmtId = $rmtId;
        return $this;
    }

    /**
     * Gets as rmtLctnMtd
     *
     * @return string
     */
    public function getRmtLctnMtd()
    {
        return $this->rmtLctnMtd;
    }

    /**
     * Sets a new rmtLctnMtd
     *
     * @param string $rmtLctnMtd
     * @return self
     */
    public function setRmtLctnMtd($rmtLctnMtd)
    {
        $this->rmtLctnMtd = $rmtLctnMtd;
        return $this;
    }

    /**
     * Gets as rmtLctnElctrncAdr
     *
     * @return string
     */
    public function getRmtLctnElctrncAdr()
    {
        return $this->rmtLctnElctrncAdr;
    }

    /**
     * Sets a new rmtLctnElctrncAdr
     *
     * @param string $rmtLctnElctrncAdr
     * @return self
     */
    public function setRmtLctnElctrncAdr($rmtLctnElctrncAdr)
    {
        $this->rmtLctnElctrncAdr = $rmtLctnElctrncAdr;
        return $this;
    }

    /**
     * Gets as rmtLctnPstlAdr
     *
     * @return \App\Model\Sepa\PainModel\NameAndAddress10Type
     */
    public function getRmtLctnPstlAdr()
    {
        return $this->rmtLctnPstlAdr;
    }

    /**
     * Sets a new rmtLctnPstlAdr
     *
     * @param \App\Model\Sepa\PainModel\NameAndAddress10Type $rmtLctnPstlAdr
     * @return self
     */
    public function setRmtLctnPstlAdr(\App\Model\Sepa\PainModel\NameAndAddress10Type $rmtLctnPstlAdr)
    {
        $this->rmtLctnPstlAdr = $rmtLctnPstlAdr;
        return $this;
    }


}

?>