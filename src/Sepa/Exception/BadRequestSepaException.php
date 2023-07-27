<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Sepa\Exception;

use SentiaSk\CommonBundleSymfony\Exception\BaseException;
use Throwable;

class BadRequestSepaException extends BaseException
{

    protected string $commonCodeMessage = 'Problem occured';

    public function __construct(
        string $message = '',
        public ?string $frontEndMessage = '',
        int $code = 400,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}