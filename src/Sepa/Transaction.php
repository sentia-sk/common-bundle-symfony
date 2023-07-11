<?php

namespace SentiaSk\CommonBundleSymfony\Sepa;

use DateTime;
use Symfony\Component\Uid\Uuid;

class Transaction extends AbstractTransaction
{
    public string $prijemcaBanka;

    /**
     * @throws \Exception
     */
    public function __construct(
        public Uuid $uuid,
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
        $this->prijemcaBanka = SwiftConverter::convert($this->prijemcaUcet, $this->uuid);
        parent::__construct(
            $this->prikazcaUcet,
            $this->prijemcaUcet,
            $this->mena,
            $this->suma,
            $this->datumPrevodu,
            $this->ks,
            $this->vs,
            $this->ss,
            $this->popis,
            $this->popis2
        );
    }

    public static function createFromInvoice(InvoiceInterface $invoice): self
    {
        /** @var DateTime $paymentAt */
        $paymentAt = $invoice->getPaymentAt();
        return new self(
            $invoice->getUuid(),
            str_replace(' ', '', $invoice->getCustomerIban()),
            str_replace(' ', '', $invoice->getSupplierIban()),
            'EUR',
            $invoice->getPrice(),
            $paymentAt->modify('00:00:00'),
            $invoice->getVariableSymbol(),
            $invoice->getConstantSymbol(),
            $invoice->getSpecificSymbol(),
            $invoice->getPaymentNote(),
            $invoice->getPaymentNote()
        );
    }
}