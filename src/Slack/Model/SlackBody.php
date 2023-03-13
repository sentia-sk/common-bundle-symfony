<?php
declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Slack\Model;

class SlackBody
{
    /**
     * @var Block[]
     */
    public array $blocks = [];

    public function toArray(): array
    {
        $blockArray = [];
        foreach ($this->blocks as $block) {
            $blockArray[] = $block->toArray();
        }
        return [
            'blocks' => $blockArray,
        ];
    }

}
