<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\Encryption;

use Aws\Kms\KmsClient;
use SentiaSk\CommonBundleSymfony\Encryption\Enum\BrokerAwsSettings;
use SentiaSk\CommonBundleSymfony\Sepa\Exception\AwsKeyValueException;
use App\Document\EmbeddedCommon\MKeyValue;

class Encryptor
{
    private ?KmsClient $kmsClient = null;
    private ?string $key = null;

    public function createClient(array $arrayKeys)
    {
        $exceptionMessage = null;
        $brokerSettings = [];
        /** @var MKeyValue $MkeyValue */
        foreach ($arrayKeys as $MkeyValue) {
            $value = $MkeyValue->getValue();
            $key = $MkeyValue->getKey();
            if (!BrokerAwsSettings::tryFrom($key)) {
                $exceptionMessage .= ' Aws key: ' . $key;
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

    public function decryptValue(
        ?string $value = null
    ): ?string {
        if ($value === null) {
            return null;
        }
        $result = $this->kmsClient->decrypt([
            'KeyId' => $this->key,
            'CiphertextBlob' => $value
        ]);

        return $result['Plaintext'];
    }
}