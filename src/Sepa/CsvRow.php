<?php

namespace SentiaSk\CommonBundleSymfony\Sepa;

use DateTime;
use Exception;
use SentiaSk\CommonBundleSymfony\Sepa\Exception\BadRequestSepaException;
use Symfony\Component\Uid\Uuid;

class CsvRow extends AbstractTransaction
{
    private static int $rowCounter = 0;
    public int $rowNumber = 0;

    /**
     * @throws Exception
     */
    public function __construct(
        public string $prikazcaUcet,
        public string $prijemcaUcet,
        public string $mena,
        public int $suma,
        public DateTime $datumPrevodu,
        public string $vs,
        public string|null $ks = null,
        public string|null $ss = null,
        public string|null $popis = null,
        public string|null $popis2 = null
    ) {
        parent::__construct(
            $this->prikazcaUcet,
            $this->prijemcaUcet,
            $this->mena,
            $this->suma,
            $this->datumPrevodu,
            $this->vs,
            $this->ks,
            $this->ss,
            $this->popis,
            $this->popis2
        );
    }

    /**
     * @throws Exception
     */
    public static function createFromCsv(string $row): self
    {
        $c = explode(";", $row);
        if (count($c) < 11) {
            throw new BadRequestSepaException(frontEndMessage: 'Zlý formát, riadok: ' . (self::$rowCounter + 1));
        }
        return new self(
            str_replace(' ', '', $c[0]),
            str_replace(' ', '', $c[1]),
            $c[3],
            StringNumberModifier::stringToIntModify($c[4]),
            new DateTime($c[5]),
            $c[7],
            $c[6],
            $c[8],
            $c[9],
            $c[10]
        );
    }
}