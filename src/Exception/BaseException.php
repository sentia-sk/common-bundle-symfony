<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Exception;

class BaseException extends \RuntimeException implements CustomExceptionInterface
{
    protected string $commonCodeMessage = '';

    public function getCustomMessage(): ?string
    {
        $lastTrace = $this->getFromTrace();
        $array['message'] = sprintf(
            '%s - %s - DEBUG INFO: [' . $this->commonCodeMessage . '] in %s->%s() with args: %s - Line: %d',
            $this->getFrontEndMessage(),
            $this->message,
            $lastTrace['class'] ?? '',
            $lastTrace['function'] ?? '',
            implode(', ', $lastTrace['args'] ?? []),
            $this->getLine()
        );

        return json_encode($array, JSON_UNESCAPED_UNICODE) ?: '';
    }

    public function getFrontEndMessage(): ?string
    {
        return json_encode(['message' => $this->frontEndMessage ?? ''],JSON_UNESCAPED_UNICODE) ?: '';
    }

    protected function getFromTrace(): array
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
                $resolvedArgs[$key] = json_encode($args,JSON_UNESCAPED_UNICODE);
                continue;
            }
            $resolvedArgs[$key] = $args;
        }
        $lastTrace['args'] = $resolvedArgs;
        return $lastTrace;
    }

}
