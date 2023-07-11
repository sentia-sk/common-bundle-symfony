<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing DocumentType
 *
 * 
 * XSD Type: Document
 */
class DocumentType
{

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CustomerCreditTransferInitiationV05Type $cstmrCdtTrfInitn
     */
    private $cstmrCdtTrfInitn = null;

    /**
     * Gets as cstmrCdtTrfInitn
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CustomerCreditTransferInitiationV05Type
     */
    public function getCstmrCdtTrfInitn()
    {
        return $this->cstmrCdtTrfInitn;
    }

    /**
     * Sets a new cstmrCdtTrfInitn
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CustomerCreditTransferInitiationV05Type $cstmrCdtTrfInitn
     * @return self
     */
    public function setCstmrCdtTrfInitn(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\CustomerCreditTransferInitiationV05Type $cstmrCdtTrfInitn)
    {
        $this->cstmrCdtTrfInitn = $cstmrCdtTrfInitn;
        return $this;
    }


}

?>