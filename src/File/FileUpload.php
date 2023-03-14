<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\File;

use Symfony\Component\HttpClient\Exception\ServerException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUpload {
    public function __construct(
        private ?UploadedFile $uploadedFile = null,
        private ?string $targetDirectory = null,
    ){
    }

    public function upload(UploadedFile $file, string $targetDirectory, string $fileName): void
    {
        $this->uploadedFile = $file;
        $this->targetDirectory = $targetDirectory;

        try {
            $file->move($targetDirectory, $fileName);
        } catch (FileException $e) {
            throw new ServerException($e->getMessage());
        }
    }

    public function getExtension(): string
    {
        return $this->uploadedFile->getClientOriginalExtension();
    }

    public function getTargetDirectory(): string
    {
        return $this->targetDirectory;
    }
}
