<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Sepa\Exception;

use SentiaSk\CommonBundleSymfony\Exception\CustomExceptionInterface;
use Throwable;

class BadRequestSepaException extends \RuntimeException implements CustomExceptionInterface
{

    public function __construct(
        string $message = '',
        public ?string $frontEndMessage = '',
        int $code = 400,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getFrontendMessage(): ?string
    {
        return $this->frontEndMessage ?? '';
    }

    private function getFromTrace(): array
    {
        $trace = $this->getTrace();
        /** @var array $lastTrace */
        $lastTrace = reset($trace);
        $resolvedArgs = [];
        foreach ($lastTrace['args'] ?? [] as $key => $args) {
            if (is_object($args)) {
                $resolvedArgs[$key] = $args::class;
                continue;
            }
            if (is_array($args)) {
                $resolvedArgs[$key] = json_encode($args);
                continue;
            }
            $resolvedArgs[$key] = $args;
        }
        $lastTrace['args'] = $resolvedArgs;
        return $lastTrace;
    }

    public function getCustomMessage(): ?string
    {
        $lastTrace = $this->getFromTrace();
        $array['message'] = sprintf(
            '%s - %s - Generated: Problem occurred in %s->%s with args: %s - Line: %d',
            $this->getFrontEndMessage(),
            $this->message,
            $lastTrace['class'] ?? '',
            $lastTrace['function'] ?? '',
            implode(', ', $lastTrace['args'] ?? []),
            $this->getLine()
        );

        /** @phpstan-ignore-next-line */
        return json_encode($array);
    }
}