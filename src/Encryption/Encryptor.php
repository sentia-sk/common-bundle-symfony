<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Encryption;

use Aws\Kms\KmsClient;
use SentiaSk\CommonBundleSymfony\Encryption\Enum\BrokerAwsSettings;
use SentiaSk\CommonBundleSymfony\Sepa\Exception\AwsKeyValueException;

class Encryptor
{
    private ?KmsClient $kmsClient = null;
    private ?string $key = null;

    public function createClient(array $arrayKeys)
    {
        $exceptionMessage = null;
        $brokerSettings = [];
        foreach ($arrayKeys as $key => $value) {
            if (!BrokerAwsSettings::tryFrom($value)) {
                $exceptionMessage .= ' Aws key: ' . $value;
                continue;
            }
            $brokerSettings[$key] = $value;
        }
        if ($exceptionMessage) {
            throw new AwsKeyValueException($exceptionMessage . ' not found');
        }
        $this->key = $brokerSettings[BrokerAwsSettings::KmsKeyArn->value];

        $this->kmsClient = new KmsClient([
            'version' => '2014-11-01',
            'region' => $brokerSettings[BrokerAwsSettings::S3Region->value],
            'credentials' => [
                'key' => $brokerSettings[BrokerAwsSettings::S3AccessKey->value],
                'secret' => $brokerSettings[BrokerAwsSettings::S3SecretKey->value]
            ]
        ]);
    }

    public function encryptValue(
        ?string $value = null
    ): ?string {
        if ($value === null) {
            return null;
        }
        $result = $this->kmsClient->encrypt([
            'KeyId' => $this->key,
            'Plaintext' => $value
        ]);

        return $result['CiphertextBlob'];
    }
}