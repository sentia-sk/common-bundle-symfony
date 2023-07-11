<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing DocumentType
 *
 * 
 * XSD Type: Document
 */
class DocumentType
{

    /**
     * @property \App\Model\Sepa\PainModel\CustomerCreditTransferInitiationV05Type $cstmrCdtTrfInitn
     */
    private $cstmrCdtTrfInitn = null;

    /**
     * Gets as cstmrCdtTrfInitn
     *
     * @return \App\Model\Sepa\PainModel\CustomerCreditTransferInitiationV05Type
     */
    public function getCstmrCdtTrfInitn()
    {
        return $this->cstmrCdtTrfInitn;
    }

    /**
     * Sets a new cstmrCdtTrfInitn
     *
     * @param \App\Model\Sepa\PainModel\CustomerCreditTransferInitiationV05Type $cstmrCdtTrfInitn
     * @return self
     */
    public function setCstmrCdtTrfInitn(\App\Model\Sepa\PainModel\CustomerCreditTransferInitiationV05Type $cstmrCdtTrfInitn)
    {
        $this->cstmrCdtTrfInitn = $cstmrCdtTrfInitn;
        return $this;
    }


}

?>