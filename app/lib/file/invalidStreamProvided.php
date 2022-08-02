<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use InvalidArgumentException as BaseInvalidArgumentException;

class invalidStreamProvided extends BaseInvalidArgumentException implements filesystemExceptionInterface
{
}
