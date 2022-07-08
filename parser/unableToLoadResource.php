<?php

namespace yxorP\parser;

use RuntimeException;
use Throwable;

final class unableToLoadResource extends RuntimeException implements cannotProcessHostInterface
{
    public static function dueToInvalidUri(string $uri): self
    {
        return new self('`' . $uri . '`: failed to open stream; No such URI, file or directory.');
    }

    public static function dueToUnavailableService(string $uri, Throwable $exception): self
    {
        return new self('Could not access the URI: `' . $uri . '`.', 0, $exception);
    }

    public static function dueToUnexpectedStatusCode(string $uri, int $statusCode): self
    {
        return new self('Invalid response from URI: `' . $uri . '`.', $statusCode);
    }
}