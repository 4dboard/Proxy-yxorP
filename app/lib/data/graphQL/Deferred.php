<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL;

use yxorP\app\lib\data\graphQL\Executor\Promise\Adapter\SyncPromise;

class Deferred extends SyncPromise
{
    /**
     * @param callable() : mixed $executor
     */
    public function __construct(callable $executor)
    {
        parent::__construct($executor);
    }

    /**
     * @param callable() : mixed $executor
     */
    public static function create(callable $executor): self
    {
        return new self($executor);
    }
}
