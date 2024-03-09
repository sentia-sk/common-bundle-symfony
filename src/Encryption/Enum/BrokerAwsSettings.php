<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Encryption\Enum;

use App\Enum\CodelistTrait;
use App\Enum\TransEnumTrait;
use Symfony\Contracts\Translation\TranslatableInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * nastavenia pre brokera
 * FE by mal byt urobeny tak, ze po doplneni dalsieho parametra do tohto Enumu, tam netreba nic robit.
 */
enum BrokerAwsSettings: string
{
    use CodelistTrait;
    use TransEnumTrait;

    case KmsKeyArn = 'kmsKeyArn';
    case S3AccessKey = 'S3AccessKey';
    case S3SecretKey = 'S3SecretKey';
    case S3Region = 'S3Region';
    case S3PrivateBucket = 'S3PrivateBucket';
    case S3PublicBucket = 'S3PublicBucket';

    public function nameTransId(): string
    {
        return match ($this) {
            self::KmsKeyArn => 'cl.aws_setting.kms_key_arn',
            self::S3AccessKey => 'cl.aws_setting.s3_access_key',
            self::S3SecretKey => 'cl.aws_setting.s3_secret_key',
            self::S3Region => 'cl.aws_setting.s3_region',
            self::S3PrivateBucket => 'cl.aws_setting.s3_private_bucket',
            self::S3PublicBucket => 'cl.aws_setting.s3_public_bucket',
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
