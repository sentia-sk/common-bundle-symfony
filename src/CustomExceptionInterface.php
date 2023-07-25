<?php

namespace SentiaSk\CommonBundleSymfony;

interface CustomExceptionInterface
{
    public function getCustomMessage(): ?string;

    public function getFrontendMessage(): ?string;
}
