<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Sepa;

use Exception;
use SentiaSk\CommonBundleSymfony\Sepa\Exception\BadRequestSepaException;

abstract class StringNumberModifier
{
    /**
     * penaznu hodnotu (string) konvertuje na int, pouzitelny v objekte MMoneyValue.
     * napr.: '458,45' skonvertuje na 45845
     * @throws Exception
     */
    public static function stringToIntModify(?string $payload): ?int
    {
        if ($payload === null) {
            return null;
        }
        $payload = str_replace([' ', ','], ['', '.'], $payload);
        if (str_contains($payload, '.')) {
            [$first, $second] = explode('.', $payload);
            if ($second && strlen($second) !== 2) {
                if (strlen($second) === 1) {
                    $payload .= '0';
                } else {
                    throw new BadRequestSepaException(frontEndMessage: 'Nesprávny format, povolené su len číslice zaokrúhlene na maximálne 2 desatinné miesta');
                }
            }
            return (int)str_replace('.', '', $payload);
        }

        return (int)(str_replace('.', '', $payload) . '00');
    }

    public static function intToStringModify(int|float|null $payload, int $decimals = 2): ?string
    {
        if ($payload === null) {
            return null;
        }
        return number_format((float)($payload / 100), $decimals, thousands_separator: '');
    }
}