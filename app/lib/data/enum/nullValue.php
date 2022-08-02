<?php declare(strict_types=1);

namespace yxorP\app\lib\data\enum;

use yxorP\app\lib\data\enum\exception\cloneNotSupportedException;
use yxorP\app\lib\data\enum\exception\serializeNotSupportedException;
use yxorP\app\lib\data\enum\exception\unserializeNotSupportedException;

final class nullValue
{
    private static $instance;

    private function __construct()
    {
    }

    public static function instance(): self
    {
        return self::$instance ?: self::$instance = new self();
    }

    final public function __clone()
    {
        throw new cloneNotSupportedException();
    }

    final public function __sleep(): array
    {
        throw new serializeNotSupportedException();
    }

    final public function __wakeup(): void
    {
        throw new unserializeNotSupportedException();
    }
}
