<?php

declare(strict_types=1);

namespace yxorP\app\lib\version\Exception;

use Throwable;

interface versionMissingExceptionInterface extends Throwable
{
    public static function create(string $packageName): self;
}
