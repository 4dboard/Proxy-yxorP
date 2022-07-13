<?php

namespace MongoDB\Tests\GridFS;

use function in_array;
use function stream_get_wrappers;
use function stream_wrapper_register;
use function stream_wrapper_unregister;
use const SEEK_SET;
use const STREAM_IS_URL;

final class UnusableStream
{
    public static function register($protocol = 'unusable'): void
    {
        if (in_array($protocol, stream_get_wrappers())) {
            stream_wrapper_unregister($protocol);
        }

        stream_wrapper_register($protocol, UnusableStream::class, STREAM_IS_URL);
    }

    public function stream_close(): void
    {
    }

    public function stream_eof(): bool
    {
        return true;
    }

    public function stream_open($path, $mode, $options, &$openedPath): bool
    {
        return true;
    }

    public function stream_read($length): bool
    {
        return false;
    }

    public function stream_seek($offset, $whence = SEEK_SET): bool
    {
        return true;
    }

    public function stream_stat(): array
    {
        return [];
    }

    public function stream_tell(): int
    {
        return 0;
    }

    public function stream_write($data): int
    {
        return 0;
    }
}
