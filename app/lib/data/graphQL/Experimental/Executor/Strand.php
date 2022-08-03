<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Experimental\Executor;

use Generator;

/**
 * @internal
 */
class Strand
{
    /** @var Generator */
    public Generator $current;

    /** @var Generator[] */
    public array $stack;

    /** @var int */
    public int $depth;

    /** @var bool|null */
    public ?bool $success;

    /** @var mixed */
    public mixed $value;

    public function __construct(Generator $coroutine)
    {
        $this->current = $coroutine;
        $this->stack = [];
        $this->depth = 0;
    }
}
