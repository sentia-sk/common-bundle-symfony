<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Encryption\Enum;

use App\Enum\CodelistTrait;
use Symfony\Contracts\Translation\TranslatableInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * nastavenia pre brokera
 * FE by mal byt urobeny tak, ze po doplneni dalsieho parametra do tohto Enumu, tam netreba nic robit.
 */
enum BrokerAwsSettings: string implements TranslatableInterface
{
    use CodelistTrait;

    case KmsKeyArn = 'kmsKeyArn';
    case S3AccessKey = 'S3AccessKey';
    case S3SecretKey = 'S3SecretKey';
    case S3Region = 'S3Region';

    public function nameTransId(): string
    {
        return match ($this) {
            self::KmsKeyArn => 'cl.aws_setting.kms_key_arn',
            self::S3AccessKey => 'cl.aws_setting.s3_access_key',
            self::S3SecretKey => 'cl.aws_setting.s3_secret_key',
            self::S3Region => 'cl.aws_setting.s3_region',
        };
    }

    public static function getAllAsCodeList(TranslatorInterface $translator): array
    {
        $ret = [];
        foreach (self::cases() as $case) {
            $ret[] = [
                'id' => $case->value,
                'name' => $case->trans($translator, function: 'nameTransId'),
            ];
        }
        return $ret;
    }


}
