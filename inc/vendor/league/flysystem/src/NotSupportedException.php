<?php

namespace League\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;
use SplFileInfo;

class NotSupportedException extends RuntimeException implements FilesystemException
{
    /**
     * Create a new exception for a link.
     *
     * @param SplFileInfo $file
     *
     * @return static
     */
    public static function forLink(SplFileInfo $file): static
    {
        $message = 'Links are not supported, encountered link at ';

        return new static($message . $file->getPathname());
    }

    /**
     * Create a new exception for a link.
     *
     * @param string $systemType
     *
     * @return static
     */
    #[Pure] public static function forFtpSystemType(string $systemType): static
    {
        $message = "The FTP system type '$systemType' is currently not supported.";

        return new static($message);
    }
}
