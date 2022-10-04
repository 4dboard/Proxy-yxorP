<?php

declare(strict_types=1);

namespace Jean85\Exception;

use Throwable;

interface VersionMissingExceptionInterface extends Throwable
{
    public static function create(string $packageName): self;
}
