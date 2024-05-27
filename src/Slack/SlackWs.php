<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Slack;

use Exception;
use SentiaSk\CommonBundleSymfony\Slack\Model\Block;
use SentiaSk\CommonBundleSymfony\Slack\Model\SlackBody;
use SentiaSk\CommonBundleSymfony\Slack\Model\Text;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SlackWs
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly MailerInterface $mailer,
        private readonly ParameterBagInterface $params,
    ) {
    }

    /**
     * send markdown message to slack webhook
     */
    private function sendMarkdownMessage(string $markdown, string $slackWebhook): void
    {
        $markdownFull = '';
        if (mb_strlen($markdown) > 3000) {
            $markdownFull = $markdown;
            $markdown = substr($markdown, 0, 2999);
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

    private function sendToEmail(string $message, string $subject, string $slackWebhook): void
    {
        $email = new Email();
        $email->from('rosetta@sentia.sk')
        ->addTo('stefan.soltys@sentia.sk')
        ->addTo('branislav.bobak@sentia.sk')
        ->addTo('martin.cigarsky@sentia.sk')
        ->addTo('diana.kokolusova@sentia.sk')
        ->subject((strtolower($this->params->get('app_env')) === 'prod' ? '[PROD]' : ' [TEST]') . ' ' . $subject)
        ->text($message);
        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface) {
            $this->sendToSlack('Odoslanie Slack emailu zlyhalo', 'Chyba odoslania Slack emailu', $slackWebhook);
        }
    }

    public function sendToSlack(string $markdown, string $subject, string $slackWebhook): void
    {
        $markdown = (strtolower($this->params->get('app_env')) === 'prod' ? '`PROD`' : '`TEST`')
            . " `" . $subject . "`\n"
            . $markdown;
        try {
            $this->sendMarkdownMessage($markdown, $slackWebhook);
        } catch (Exception $e) {
            $this->sendToEmail($markdown . "\n" . $e->getMessage() . ' => ' . $e->getTraceAsString(), $subject, $slackWebhook);
        }
    }

}
