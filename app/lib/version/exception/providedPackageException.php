<?php

declare(strict_types=1);

namespace yxorP\app\lib\version\Exception;

use Exception;

class providedPackageException extends Exception implements versionMissingExceptionInterface
{
    public static function create(string $packageName): versionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
