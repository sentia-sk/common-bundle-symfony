<?php

namespace SentiaSk\CommonBundleSymfony\Sepa;

use DateTime;
use Symfony\Component\Uid\Uuid;

interface TransactionInterface
{
    public function getPaymentAt(): ?DateTime;
    public function getUuid(): string;
    public function getCustomerIban(): string;
    public function getClassName(): string;
    public function getSupplierIban(): string;
    public function getPrice(): int;
    public function getConstantSymbol(): ?string;
    public function getVariableSymbol(): string;
    public function getSpecificSymbol(): ?string;
    public function getCreditorInfo(): ?string;
    public function getPaymentNote(): ?string;
}