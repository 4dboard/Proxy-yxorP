<?php

declare(strict_types=1);

namespace Jean85\Exception;

use Exception;
use JetBrains\PhpStorm\Pure;

class ProvidedPackageException extends Exception implements VersionMissingExceptionInterface
{
    #[Pure] public static function create(string $packageName): VersionMissingExceptionInterface
    {
        return new self('Cannot retrieve a version for package ' . $packageName . ' since it is provided, probably a metapackage');
    }
}
