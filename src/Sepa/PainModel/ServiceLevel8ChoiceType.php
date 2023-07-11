<?php
namespace App\Model\Sepa\PainModel;

/**
 * Class representing ServiceLevel8ChoiceType
 *
 * 
 * XSD Type: ServiceLevel8Choice
 */
class ServiceLevel8ChoiceType
{

    /**
     * @property string $cd
     */
    private $cd = null;

    /**
     * @property string $prtry
     */
    private $prtry = null;

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
     * Gets as prtry
     *
     * @return string
     */
    public function getPrtry()
    {
        return $this->prtry;
    }

    /**
     * Sets a new prtry
     *
     * @param string $prtry
     * @return self
     */
    public function setPrtry($prtry)
    {
        $this->prtry = $prtry;
        return $this;
    }


}

?>