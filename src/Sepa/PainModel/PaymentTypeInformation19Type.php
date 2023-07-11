<?php
namespace SentiaSk\CommonBundleSymfony\Sepa\PainModel;

/**
 * Class representing PaymentTypeInformation19Type
 *
 * 
 * XSD Type: PaymentTypeInformation19
 */
class PaymentTypeInformation19Type
{

    /**
     * @property string $instrPrty
     */
    private $instrPrty = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ServiceLevel8ChoiceType $svcLvl
     */
    private $svcLvl = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\LocalInstrument2ChoiceType $lclInstrm
     */
    private $lclInstrm = null;

    /**
     * @property \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CategoryPurpose1ChoiceType $ctgyPurp
     */
    private $ctgyPurp = null;

    /**
     * Gets as instrPrty
     *
     * @return string
     */
    public function getInstrPrty()
    {
        return $this->instrPrty;
    }

    /**
     * Sets a new instrPrty
     *
     * @param string $instrPrty
     * @return self
     */
    public function setInstrPrty($instrPrty)
    {
        $this->instrPrty = $instrPrty;
        return $this;
    }

    /**
     * Gets as svcLvl
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ServiceLevel8ChoiceType
     */
    public function getSvcLvl()
    {
        return $this->svcLvl;
    }

    /**
     * Sets a new svcLvl
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\ServiceLevel8ChoiceType $svcLvl
     * @return self
     */
    public function setSvcLvl(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\ServiceLevel8ChoiceType $svcLvl)
    {
        $this->svcLvl = $svcLvl;
        return $this;
    }

    /**
     * Gets as lclInstrm
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\LocalInstrument2ChoiceType
     */
    public function getLclInstrm()
    {
        return $this->lclInstrm;
    }

    /**
     * Sets a new lclInstrm
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\LocalInstrument2ChoiceType $lclInstrm
     * @return self
     */
    public function setLclInstrm(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\LocalInstrument2ChoiceType $lclInstrm)
    {
        $this->lclInstrm = $lclInstrm;
        return $this;
    }

    /**
     * Gets as ctgyPurp
     *
     * @return \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CategoryPurpose1ChoiceType
     */
    public function getCtgyPurp()
    {
        return $this->ctgyPurp;
    }

    /**
     * Sets a new ctgyPurp
     *
     * @param \SentiaSk\CommonBundleSymfony\Sepa\PainModel\CategoryPurpose1ChoiceType $ctgyPurp
     * @return self
     */
    public function setCtgyPurp(\SentiaSk\CommonBundleSymfony\Sepa\PainModel\CategoryPurpose1ChoiceType $ctgyPurp)
    {
        $this->ctgyPurp = $ctgyPurp;
        return $this;
    }


}

?>