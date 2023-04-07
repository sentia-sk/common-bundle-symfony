<?php

declare(strict_types=1);

namespace SentiaSk\CommonBundleSymfony\File;

class FileUtil
{

    /**
     * delete directory recursivelly
     */
    public function deleteDir(string $dir): bool
    {
        $this->emptyDir($dir);
        return rmdir($dir);
    }

    /**
     * z adresara vymaze vsetky subory a adresare. Zakladny vstupny adresar ponecha
     */
    public function emptyDir(string $dir): void
    {
        $files = array_diff(scandir($dir), array('.','..'));
        foreach ($files as $file) {
            (is_dir($dir.'/'.$file)) ? $this->deleteDir($dir.'/'.$file) : unlink($dir.'/'.$file);
        }
    }

    /**
     * check if directory is empty (no files, no subdirs)
     */
    public function isEmptyDir(string $pathToDir): bool
    {
        $res = scandir($pathToDir);
        if ($res === false) {
            return false;
        }
        return count($res) == 2;
    }

    /**
     * na vstupe by mala byt validna adresarova cesta, napr: x/y/z/u
     * metoda skontroluje danu adresarovu struktutu a ak adresare neexistuju, tak sa vytvoria
     * je tu tiez kontrola ked je v php nastavena nejaka hodnota 'open_basedir'
     */
    public function mkdirIfNotExists(string $dirPath): bool
    {
        $baseDirString = ini_get('open_basedir');
        $forbiddenDir = null;
        if($baseDirString !== ''){
            $baseDirs = explode(':', $baseDirString);
            foreach($baseDirs as $baseDir){
                if(str_starts_with($dirPath, $baseDir)){
                    $forbiddenDir = $baseDir;
                    break;
                }
            }
        }

        $parts = explode('/', $dirPath);
        if(($count = count($parts)) > 1){
            $path = $parts[0];
            for($i=1; $i<$count; $i++){
                $path .= '/'.$parts[$i];
                if($forbiddenDir !== null && str_starts_with($forbiddenDir, $path)){
                    continue;
                }
                if(!is_dir($path) && !mkdir($path)){
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * create directories: ww/xx/yy/zz/uuid ... only if directories does not exist
     * $basePath - without '/' at the end
     */
    public function createDirsForUuid4(string $basePath, string $uuid, bool $includeUUidDir = true): string
    {
        $path = $this->createUuidBasePath($basePath, $uuid);
        $this->mkdirIfNotExists($path);

        if($includeUUidDir){
            $path .= '/'.$uuid;
            $this->mkdirIfNotExists($path);
        }
        return $path;
    }

    public function getPathByUuid(string $basePath, string $uuid, bool $includeUuidDir = true): string
    {
        $path = $this->createUuidBasePath($basePath, $uuid);
        if ($includeUuidDir) {
            $path .= '/' . $uuid;
        }
        return $path;
    }

    /**
     * use this method if uuid file is deleted. Empty folders will be deleted
     */
    public function clearUuid4Dirs(string $basePath, string $uuid, bool $includeUuidDir = true): void
    {
        $dirPart1 = $uuid[0].$uuid[1];
        $dirPart2 = $uuid[2].$uuid[3];
        $dirPart3 = $uuid[4].$uuid[5];
        $dirPart4 = $uuid[6].$uuid[7];

        if ($includeUuidDir) {
            $path = $basePath.'/'.$dirPart1.'/'.$dirPart2.'/'.$dirPart3.'/'.$dirPart4.'/'.$uuid;
            if(is_dir($path) && $this->isEmptyDir($path)){
                rmdir($path);
            }
        }

        $path = $basePath.'/'.$dirPart1.'/'.$dirPart2.'/'.$dirPart3.'/'.$dirPart4;
        if (is_dir($path) && $this->isEmptyDir($path)) {
            rmdir($path);
        }

        $path = $basePath.'/'.$dirPart1.'/'.$dirPart2.'/'.$dirPart3;
        if (is_dir($path) && $this->isEmptyDir($path)) {
            rmdir($path);
        }

        $path = $basePath.'/'.$dirPart1.'/'.$dirPart2;
        if (is_dir($path) && $this->isEmptyDir($path)) {
            rmdir($path);
        }

        $path = $basePath.'/'.$dirPart1;
        if (is_dir($path) && $this->isEmptyDir($path)) {
            rmdir($path);
        }
    }

    private function createUuidBasePath(string $basePath, string $uuid): string
    {
        $dirPart1 = $uuid[0] . $uuid[1];
        $dirPart2 = $uuid[2] . $uuid[3];
        $dirPart3 = $uuid[4] . $uuid[5];
        $dirPart4 = $uuid[6] . $uuid[7];
        return $basePath . '/' . $dirPart1 . '/' . $dirPart2 . '/' . $dirPart3 . '/' . $dirPart4;
    }
}
