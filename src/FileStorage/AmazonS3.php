<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\FileStorage;

use Aws\S3\S3Client;
use Exception;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class AmazonS3
{
    private S3Client $s3Client;
    private const ACL = 'bucket-owner-full-control';

    public function __construct(
        private readonly ParameterBagInterface $params,
    ) {
        $this->s3Client = new S3Client([
            'credentials' => [
                'key' => $this->params->get('aws_access_key'),
                'secret' => $this->params->get('aws_secret_key')
            ],
            'region' => $this->params->get('aws_region'),
            'version' => 'latest'
        ]);
    }

    /**
     * @param string $storageTargetPath - full path to the file we want to create: 'dir1/dir2/dir3/filename.ext'
     * @param string $localTargetPath - full path to the source file: 'c:/dirx/diry/file.ext'
     */
    public function uploadFile(string $bucket, string $storageTargetPath, string $localTargetPath): void
    {
        $this->s3Client->putObject([
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

        return $result['Body'];
    }

    public function deleteFile(string $bucket, string $storageTargetPath): void
    {
        $this->s3Client->deleteMatchingObjects(
            bucket: $bucket,
            prefix: $storageTargetPath
        );
    }
}
