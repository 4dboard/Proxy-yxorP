<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;
interface filesystemAdapterInterface
{
    public function fileExists(string $path): bool;

    public function directoryExists(string $path): bool;

    public function write(string $path, string $contents, config $config): void;

    public function writeStream(string $path, $contents, config $config): void;

    public function read(string $path): string;

    public function readStream(string $path);

    public function delete(string $path): void;

    public function deleteDirectory(string $path): void;

    public function createDirectory(string $path, config $config): void;

    public function setVisibility(string $path, string $visibility): void;

    public function visibility(string $path): fileAttributes;

    public function mimeType(string $path): fileAttributes;

    public function lastModified(string $path): fileAttributes;

    public function fileSize(string $path): fileAttributes;

    public function listContents(string $path, bool $deep): iterable;

    public function move(string $source, string $destination, config $config): void;

    public function copy(string $source, string $destination, config $config): void;
}
