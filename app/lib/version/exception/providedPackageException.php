<?php

declare(strict_types=1);

namespace yxorP\app\lib\version\Exception;

use Exception;
use JetBrains\PhpStorm\Pure;

class providedPackageException extends Exception implements versionMissingExceptionInterface
{
    #[Pure] public static function create(string $packageName): versionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
