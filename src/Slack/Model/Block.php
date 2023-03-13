<?php
declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Slack\Model;

class Block
{
    public string $type = 'section';
    public Text $text;

    public function toArray(): array
    {
        return [
            'type' => $this->type,
            'text' => $this->text->toArray(),
        ];
    }

}
