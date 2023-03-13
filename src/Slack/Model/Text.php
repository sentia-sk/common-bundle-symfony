<?php
declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Slack\Model;

class Text
{
    public string $type = 'mrkdwn';
    public string $text = '';

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'text' => $this->text
        ];
    }

}
