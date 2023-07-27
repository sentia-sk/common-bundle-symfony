<?php

namespace SentiaSk\CommonBundleSymfony\Exception;

interface CustomExceptionInterface
{
    public function getCustomMessage(string $param): ?string;

    public function getFrontendMessage(): ?string;
}
