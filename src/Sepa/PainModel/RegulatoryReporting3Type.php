<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing RegulatoryReporting3Type
 *
 * 
 * XSD Type: RegulatoryReporting3
 */
class RegulatoryReporting3Type
{

    /**
     * @property string $dbtCdtRptgInd
     */
    private $dbtCdtRptgInd = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\RegulatoryAuthority2Type $authrty
     */
    private $authrty = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\StructuredRegulatoryReporting3Type[] $dtls
     */
    private $dtls = null;

    /**
     * Gets as dbtCdtRptgInd
     *
     * @return string
     */
    public function getDbtCdtRptgInd()
    {
        return $this->dbtCdtRptgInd;
    }

    /**
     * Sets a new dbtCdtRptgInd
     *
     * @param string $dbtCdtRptgInd
     * @return self
     */
    public function setDbtCdtRptgInd($dbtCdtRptgInd)
    {
        $this->dbtCdtRptgInd = $dbtCdtRptgInd;
        return $this;
    }

    /**
     * Gets as authrty
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\RegulatoryAuthority2Type
     */
    public function getAuthrty()
    {
        return $this->authrty;
    }

    /**
     * Sets a new authrty
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\RegulatoryAuthority2Type $authrty
     * @return self
     */
    public function setAuthrty(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\RegulatoryAuthority2Type $authrty)
    {
        $this->authrty = $authrty;
        return $this;
    }

    /**
     * Adds as dtls
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\StructuredRegulatoryReporting3Type $dtls
     *@return self
     */
    public function addToDtls(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\StructuredRegulatoryReporting3Type $dtls)
    {
        $this->dtls[] = $dtls;
        return $this;
    }

    /**
     * isset dtls
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDtls($index)
    {
        return isset($this->dtls[$index]);
    }

    /**
     * unset dtls
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDtls($index)
    {
        unset($this->dtls[$index]);
    }

    /**
     * Gets as dtls
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\StructuredRegulatoryReporting3Type[]
     */
    public function getDtls()
    {
        return $this->dtls;
    }

    /**
     * Sets a new dtls
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\StructuredRegulatoryReporting3Type[] $dtls
     * @return self
     */
    public function setDtls(array $dtls)
    {
        $this->dtls = $dtls;
        return $this;
    }


}

?>