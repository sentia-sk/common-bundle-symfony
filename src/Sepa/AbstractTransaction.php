<?php

namespace SentiaSk\CommonBundleSymfony\Sepa;

use DateTime;

class AbstractTransaction
{
    public string $prijemcaBanka;

    public function __construct(
        public string $prikazcaUcet,
        public string $prijemcaUcet,
        public string $mena,
        public float $suma,
        public DateTime $datumPrevodu,
        public string $vs,
        public string|null $ks = null,
        public string|null $ss = null,
        public string|null $popis = null,
        public string|null $popis2 = null
    ) {
        $this->prijemcaUcet = trim($prijemcaUcet);
        $this->ks = $this->ks ? trim($this->ks) : null;
        $this->vs = trim($this->vs);
        $this->ss = $this->ss ? trim($this->ss) : null;
        $this->popis = $this->popis ? trim($this->popis) : null;
        $this->popis2 = $this->popis2 ? trim($this->popis2) : null;
    }
}