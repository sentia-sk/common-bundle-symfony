<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing ReferredDocumentInformation3Type
 *
 * 
 * XSD Type: ReferredDocumentInformation3
 */
class ReferredDocumentInformation3Type
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ReferredDocumentType2Type $tp
     */
    private $tp = null;

    /**
     * @property string $nb
     */
    private $nb = null;

    /**
     * @property \DateTime $rltdDt
     */
    private $rltdDt = null;

    /**
     * Gets as tp
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ReferredDocumentType2Type
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Sets a new tp
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ReferredDocumentType2Type $tp
     * @return self
     */
    public function setTp(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ReferredDocumentType2Type $tp)
    {
        $this->tp = $tp;
        return $this;
    }

    /**
     * Gets as nb
     *
     * @return string
     */
    public function getNb()
    {
        return $this->nb;
    }

    /**
     * Sets a new nb
     *
     * @param string $nb
     * @return self
     */
    public function setNb($nb)
    {
        $this->nb = $nb;
        return $this;
    }

    /**
     * Gets as rltdDt
     *
     * @return \DateTime
     */
    public function getRltdDt()
    {
        return $this->rltdDt;
    }

    /**
     * Sets a new rltdDt
     *
     * @param \DateTime $rltdDt
     * @return self
     */
    public function setRltdDt(\DateTime $rltdDt)
    {
        $this->rltdDt = $rltdDt;
        return $this;
    }


}

?>