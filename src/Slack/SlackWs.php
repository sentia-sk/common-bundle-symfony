<?php
declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Slack;

use Exception;
use SentiaSk\CommonBundleSymfony\Slack\Model\Block;
use SentiaSk\CommonBundleSymfony\Slack\Model\SlackBody;
use SentiaSk\CommonBundleSymfony\Slack\Model\Text;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SlackWs
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
    ){ }

    /**
     * send markdown message to slack webhook
     */
    public function sendMarkdownMessage(string $markdown, string $slackWebhook): void
    {
        $markdownFull = null;
        if (mb_strlen($markdown) > 3000) {
            $markdownFull = $markdown;
            $markdown = substr($markdown,0,2999);
        }

        $block = new Block();
        $block->text = new Text();
        $block->text->text = $markdown;

        $slackBody = new SlackBody();
        $slackBody->blocks[] = $block;

        $res = $this->httpClient->request('POST', $slackWebhook, [
            'json' => $slackBody->toArray()
        ]);

        if ($res->getStatusCode() !== 200) {
            throw new Exception($res->getContent(false));
        }

        if (mb_strlen($markdownFull) > 3000) {
            throw new Exception('Slack allows max. 3000 characters per message.');
        }
    }

}
