<?php namespace yxorP\app\lib\data\annotation;

use BadMethodCallException;
use function sprintf;

class annotation
{
    public $value;

    final public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function __get($name)
    {
        throw new BadMethodCallException(sprintf("Unknown property '%s' on annotation '%s'.", $name, static::class));
    }

    public function __set($name, $value)
    {
        throw new BadMethodCallException(sprintf("Unknown property '%s' on annotation '%s'.", $name, static::class));
    }
}
