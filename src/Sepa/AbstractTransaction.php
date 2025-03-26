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
        public int $suma,
        public DateTime $datumPrevodu,
        public string $vs,
        public string|null $ks = null,
        public string|null $ss = null,
        public string|null $nazovPrijemcu = null,
        public string|null $informacia = null
    ) {
        $this->mena = trim($this->mena);
        $this->ks = $this->ks ? trim($this->ks) : null;
        $this->vs = trim($this->vs);
        $this->ss = $this->ss ? trim($this->ss) : null;
        $this->nazovPrijemcu = $this->nazovPrijemcu ? trim($this->nazovPrijemcu) : null;
        $this->informacia = $this->informacia ? trim($this->informacia) : null;
    }
}