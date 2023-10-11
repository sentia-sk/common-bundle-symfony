<?php

namespace SentiaSk\CommonBundleSymfony\Sepa;

use Exception;
use Symfony\Component\Uid\Uuid;

class SwiftConverter
{

    private static array $banks = [];

    public function __construct(
        private string $bankCode,
        private string $bankName,
        private string $swift
    ) {
    }

    /**
     * @throws Exception
     */
    public static function convert(string $iban, Uuid|int $uuidOrRow, string $className = null): string
    {
        if (!self::$banks) {
            self::init();
        }
        if (strlen($iban) !== 24) {
            throw new Exception(
                'Zlý formát IBAN: ' . $iban . ' ' .
                ($uuidOrRow instanceof Uuid
                    ? ($className . ' uuid: ' . $uuidOrRow->toRfc4122())
                    : ('riadok: ' . $uuidOrRow))
            );
        }
        $bankCode = substr($iban, 4, 4);
        if (array_key_exists($bankCode, self::$banks)) {
            return self::$banks[$bankCode]->swift;
        }
        throw new Exception(
            'Neviem nájsť SWIFT podľa IBAN: ' . $iban . ' ' .
            ($uuidOrRow instanceof Uuid
                ? ($className . ' uuid: ' . $uuidOrRow->toRfc4122())
                : ('riadok: ' . $uuidOrRow))
        );
    }

    private static function add(string $bankCode, string $bankName, string $swift): void
    {
        self::$banks[$bankCode] = new SwiftConverter($bankCode, $bankName, $swift);
    }

    private static function init(): void
    {
        self::add('0200', 'Všeobecná úverová banka, a.s.', 'SUBASKBX');
        self::add('0900', 'Slovenská sporiteľňa, a.s.', 'GIBASKBX');
        self::add('0720', 'Národná banka Slovenska', 'NBSBSKBX');
        self::add('1100', 'Tatra banka, a.s.', 'TATRSKBX');
        self::add('1111', 'UniCredit Bank Czech Republic and Slovakia, a.s., pobočka zahraničnej banky', 'UNCRSKBX');
        self::add('3000', 'Slovenská záručná a rozvojová banka, a.s.', 'SLZBSKBA');
        self::add('3100', 'Sberbank Slovensko, a.s. ', 'LUBASKBX');
        self::add('5200', 'OTP Banka Slovensko, a.s. ', 'OTPVSKBX');
        self::add('5600', 'Prima banka Slovensko, a.s.', 'KOMASK2X');
        self::add('5900', 'Prvá stavebná sporiteľňa, a.s.', 'PRVASKBA');
        self::add('6500', 'Poštová banka, a.s.', 'POBNSKBA');
        self::add('7300', 'ING Bank N.V.,  pobočka zahraničnej banky', 'INGBSKBX');
        self::add('7500', 'Československá obchodná banka, a.s.', 'CEKOSKBX');
        self::add('7930', 'Wustenrot stavebná sporiteľňa, a.s.', 'WUSTSKBA');
        self::add('8050', 'Commerzbank Aktiengesellschaft, pobočka zahraničnej banky, Bratislava', 'COBASKBX');
        self::add('8100', 'Komerční banka, a.s., pobočka zahraničnej banky', 'KOMBSKBA');
        self::add('8120', 'Privatbanka, a.s.', 'BSLOSK22');
        self::add('8130', 'Citibank Europe plc, pobočka zahraničnej banky', 'CITISKBA');
        self::add('8170', 'ČSOB stavebná sporiteľňa, a.s.', 'KBSPSKBX');
        self::add('8160', 'EXIMBANKA SR', 'EXSKSKBX');
        self::add('8180', 'Štátna pokladnica', 'SPSRSKBA');
        self::add('8320', 'J&T BANKA, a.s., pobočka zahraničnej banky', 'JTBPSKBA');
        self::add('8330', 'Fio banka, a.s., pobočka zahraničnej banky', 'FIOZSKBA');
        self::add('8360', 'mBank S.A., pobočka zahraničnej banky', 'BREXSKBX');
        self::add('8370', 'Oberbank AG  pobočka zahraničnej banky v Slovenskej republike', 'OBKLSKBA');
        self::add('8410', 'ZUNO BANK AG, pobočka zahraničnej banky', 'RIDBSKBX');
        self::add('8420', 'BKS Bank AG, pobočka zahraničnej banky v SR', 'BFKKSKBB');
        self::add('8430', 'KDB Bank Europe Ltd., pobočka zahraničnej banky', 'KODBSKBX');
        self::add('9951', 'Burza cenných papierov v Bratislave, a.s.', 'XBRASKB1');
        self::add('9952', 'Trust Pay, a.s.', 'TPAYSKBX');
        self::add('2010', 'Fio banka, a.s.', 'FIOBCZPP');
    }
}
