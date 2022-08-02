<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;
interface filesystemWriterInterface
{
    public function write(string $location, string $contents, array $config = []): void;

    public function writeStream(string $location, $contents, array $config = []): void;

    public function setVisibility(string $path, string $visibility): void;

    public function delete(string $location): void;

    public function deleteDirectory(string $location): void;

    public function createDirectory(string $location, array $config = []): void;

    public function move(string $source, string $destination, array $config = []): void;

    public function copy(string $source, string $destination, array $config = []): void;
}
