<?php

namespace League\Flysystem;

use SplFileInfo;

class UnreadableFileException extends Exception
{
    public static function forFileInfo(SplFileInfo $fileInfo): static
    {
        return new static(
            sprintf(
                'Unreadable file encountered: %s',
                $fileInfo->getRealPath()
            )
        );
    }
}
