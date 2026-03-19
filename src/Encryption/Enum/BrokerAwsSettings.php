<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Encryption\Enum;

use App\Enum\Broker\EmailClientType;
use App\Enum\CodelistTrait;
use App\Enum\Common\DataType;
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
    case SESFromEmailAddress = 'SESFromEmailAddress';
    case EmailClientType = 'EmailClientType';

    public function nameTransId(): string
    {
        return match ($this) {
            self::KmsKeyArn => 'cl.aws_setting.kms_key_arn',
            self::S3AccessKey => 'cl.aws_setting.s3_access_key',
            self::S3SecretKey => 'cl.aws_setting.s3_secret_key',
            self::S3Region => 'cl.aws_setting.s3_region',
            self::S3PrivateBucket => 'cl.aws_setting.s3_private_bucket',
            self::S3PublicBucket => 'cl.aws_setting.s3_public_bucket',
            self::SESFromEmailAddress => 'cl.aws_setting.ses_from_email_address',
            self::EmailClientType => 'cl.aws_setting.email_client_type',
        };
    }

    public function dataType(): DataType
    {
        return match ($this) {
            self::KmsKeyArn, self::S3AccessKey, self::S3SecretKey,
            self::S3Region, self::S3PrivateBucket, self::S3PublicBucket, self::SESFromEmailAddress => DataType::String,

            self::EmailClientType => DataType::Enum,
        };
    }

    public static function getAllAsCodeList(TranslatorInterface $translator): array
    {
        $ret = [];
        foreach (self::cases() as $case) {
            $enumValues = [];
            if ($case->dataType() === DataType::Enum) {
                $enumValues = EmailClientType::getAllAsCodeList($translator);
            }
            $ret[] = [
                'id' => $case->value,
                'name' => $case->trans($translator, function: 'nameTransId'),
                'type' => $case->dataType(),
                'enumValues' => $enumValues
            ];
        }
        return $ret;
    }


}
