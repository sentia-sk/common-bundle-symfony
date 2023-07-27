<?php

namespace SentiaSk\CommonBundleSymfony\Exception;

interface CustomExceptionInterface
{
    public function getCustomMessage(): ?string;

    public function getFrontendMessage(): ?string;
}
