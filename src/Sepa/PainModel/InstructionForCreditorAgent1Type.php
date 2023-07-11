<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing InstructionForCreditorAgent1Type
 *
 * 
 * XSD Type: InstructionForCreditorAgent1
 */
class InstructionForCreditorAgent1Type
{

    /**
     * @property string $cd
     */
    private $cd = null;

    /**
     * @property string $instrInf
     */
    private $instrInf = null;

    /**
     * Gets as cd
     *
     * @return string
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * Sets a new cd
     *
     * @param string $cd
     * @return self
     */
    public function setCd($cd)
    {
        $this->cd = $cd;
        return $this;
    }

    /**
     * Gets as instrInf
     *
     * @return string
     */
    public function getInstrInf()
    {
        return $this->instrInf;
    }

    /**
     * Sets a new instrInf
     *
     * @param string $instrInf
     * @return self
     */
    public function setInstrInf($instrInf)
    {
        $this->instrInf = $instrInf;
        return $this;
    }


}

?>