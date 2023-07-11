<?php

namespace SentiaSk\CommonBundleSymfony\Sepa;

use DateTime;
use Symfony\Component\Uid\Uuid;

interface InvoiceInterface
{
    public function getPaymentAt(): ?DateTime;
    public function getUuid(): Uuid;
    public function getCustomerIban(): string;
    public function getSupplierIban(): string;
    public function getPrice(): float;
    public function getConstantSymbol(): ?string;
    public function getVariableSymbol(): string;
    public function getSpecificSymbol(): ?string;
    public function getPaymentNote(): ?string;
}