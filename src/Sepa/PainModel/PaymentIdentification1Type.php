<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing PaymentIdentification1Type
 *
 * 
 * XSD Type: PaymentIdentification1
 */
class PaymentIdentification1Type
{

    /**
     * @property string $instrId
     */
    private $instrId = null;

    /**
     * @property string $endToEndId
     */
    private $endToEndId = null;

    /**
     * Gets as instrId
     *
     * @return string
     */
    public function getInstrId()
    {
        return $this->instrId;
    }

    /**
     * Sets a new instrId
     *
     * @param string $instrId
     * @return self
     */
    public function setInstrId($instrId)
    {
        $this->instrId = $instrId;
        return $this;
    }

    /**
     * Gets as endToEndId
     *
     * @return string
     */
    public function getEndToEndId()
    {
        return $this->endToEndId;
    }

    /**
     * Sets a new endToEndId
     *
     * @param string $endToEndId
     * @return self
     */
    public function setEndToEndId($endToEndId)
    {
        $this->endToEndId = $endToEndId;
        return $this;
    }


}

?>