<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing AccountIdentification4ChoiceType
 *
 * 
 * XSD Type: AccountIdentification4Choice
 */
class AccountIdentification4ChoiceType
{

    /**
     * @property string $iBAN
     */
    private $iBAN = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericAccountIdentification1Type $othr
     */
    private $othr = null;

    /**
     * Gets as iBAN
     *
     * @return string
     */
    public function getIBAN()
    {
        return $this->iBAN;
    }

    /**
     * Sets a new iBAN
     *
     * @param string $iBAN
     * @return self
     */
    public function setIBAN($iBAN)
    {
        $this->iBAN = $iBAN;
        return $this;
    }

    /**
     * Gets as othr
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericAccountIdentification1Type
     */
    public function getOthr()
    {
        return $this->othr;
    }

    /**
     * Sets a new othr
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericAccountIdentification1Type $othr
     * @return self
     */
    public function setOthr(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\GenericAccountIdentification1Type $othr)
    {
        $this->othr = $othr;
        return $this;
    }


}

?>