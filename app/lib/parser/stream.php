<?php

namespace yxorP\app\lib\parser;

use resource;
use function fclose;
use function fopen;
use function stream_get_contents;

final class stream
{
    public static function getContentAsString(string $path, $context = null): string
    {
        $stream = self::fromPath($path, $context);
        if (0 === $stream) {
            throw unableToLoadResource::dueToInvalidUri($path);
        }
        $content = stream_get_contents($stream);
        fclose($stream);
        return $content;
    }

    private static function fromPath(string $path, $context = null): mixed
    {
        if (null === $context) {
            return @fopen($path, 'r');
        }
        return @fopen($path, 'r', 0, $context);
    }
}