<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing SupplementaryData1Type
 *
 * 
 * XSD Type: SupplementaryData1
 */
class SupplementaryData1Type
{

    /**
     * @property string $plcAndNm
     */
    private $plcAndNm = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\SupplementaryDataEnvelope1Type $envlp
     */
    private $envlp = null;

    /**
     * Gets as plcAndNm
     *
     * @return string
     */
    public function getPlcAndNm()
    {
        return $this->plcAndNm;
    }

    /**
     * Sets a new plcAndNm
     *
     * @param string $plcAndNm
     * @return self
     */
    public function setPlcAndNm($plcAndNm)
    {
        $this->plcAndNm = $plcAndNm;
        return $this;
    }

    /**
     * Gets as envlp
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\SupplementaryDataEnvelope1Type
     */
    public function getEnvlp()
    {
        return $this->envlp;
    }

    /**
     * Sets a new envlp
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\SupplementaryDataEnvelope1Type $envlp
     * @return self
     */
    public function setEnvlp(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\SupplementaryDataEnvelope1Type $envlp)
    {
        $this->envlp = $envlp;
        return $this;
    }


}

?>