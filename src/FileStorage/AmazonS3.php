<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\FileStorage;

use Aws\S3\S3Client;
use Exception;
use SentiaSk\CommonBundleSymfony\Encryption\Enum\BrokerAwsSettings;
use SentiaSk\CommonBundleSymfony\Sepa\Exception\AwsKeyValueException;

class AmazonS3
{
    private S3Client $s3Client;
    private const ACL = 'bucket-owner-full-control';

    public function createClientAndResolveKeys(array $awsKeys): void
    {
        $exceptionMessage = null;
        $brokerSettings = [];
        foreach ($awsKeys as $awsKey) {
            $value = $awsKey->getValue();
            $key = $awsKey->getKey();
            if (!BrokerAwsSettings::tryFrom($key)) {
                $exceptionMessage .= ' Aws key: ' . $key;
                continue;
            }
            $brokerSettings[$key] = $value;
        }
        if ($exceptionMessage) {
            throw new AwsKeyValueException($exceptionMessage . ' not found');
        }

        $this->createClientFromArray($brokerSettings);
    }

    public function createClientFromArray(array $brokerSettings): void
    {
        $this->s3Client = new S3Client([
            'credentials' => [
                'key' => $brokerSettings[BrokerAwsSettings::S3AccessKey->value],
                'secret' => $brokerSettings[BrokerAwsSettings::S3SecretKey->value]
            ],
            'region' => $brokerSettings[BrokerAwsSettings::S3Region->value],
            'version' => 'latest'
        ]);
    }


    public function listBuckets()
    {
        return $this->s3Client->listBuckets();
    }

    /**
     * @param string $storageTargetPath - full path to the file we want to create: 'dir1/dir2/dir3/filename.ext'
     * @param string $localTargetPath - full path to the source file: 'c:/dirx/diry/file.ext'
     */
    public function uploadFile(string $bucket, string $storageTargetPath, string $localTargetPath): object
    {
        return $this->s3Client->putObject([
            'Bucket' => $bucket,
            'Key' => $storageTargetPath,
            'Body' => fopen($localTargetPath, 'r'),
            'ACL' => self::ACL,
        ]);
    }

    /**
     * @param string $storageTargetPath - full path to the file we want to create: 'dir1/dir2/dir3/filename.ext'
     */
    public function createFile(string $bucket, string $storageTargetPath, string $rawData): void
    {
        $this->s3Client->putObject([
            'Bucket' => $bucket,
            'Key' => $storageTargetPath,
            'Body' => $rawData,
            'ACL' => self::ACL,
        ]);
    }

    /**
     * @throws Exception
     */
    public function downloadFile(string $bucket, string $storageTargetPath): string
    {
        $result = $this->s3Client->getObject([
            'Bucket' => $bucket,
            'Key' => $storageTargetPath
        ]);

        if (!isset($result['Body'])) {
            throw new Exception('File is corrupted or cannot be downloaded');
        }

        return $result['Body'] . "\n";
    }

    public function deleteFile(string $bucket, string $storageTargetPath): void
    {
        $this->s3Client->deleteMatchingObjects(
            bucket: $bucket,
            prefix: $storageTargetPath
        );
    }
}
