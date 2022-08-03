<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Experimental\Executor;

use yxorP\app\lib\data\graphQL\Type\Definition\ObjectType;
use yxorP\app\lib\data\graphQL\Type\Definition\ResolveInfo;

/**
 * @internal
 */
class CoroutineContext
{
    /** @var CoroutineContextShared */
    public CoroutineContextShared $shared;

    /** @var ObjectType */
    public ObjectType $type;

    /** @var mixed */
    public mixed $value;

    /** @var object */
    public object $result;

    /** @var string[] */
    public array $path;

    /** @var ResolveInfo */
    public ResolveInfo $resolveInfo;

    /** @var string[]|null */
    public ?array $nullFence;

    /**
     * @param mixed $value
     * @param object $result
     * @param string[] $path
     * @param string[]|null $nullFence
     */
    public function __construct(
        CoroutineContextShared $shared,
        ObjectType             $type,
        mixed                  $value,
        object                 $result,
        array                  $path,
        ?array                 $nullFence = null
    )
    {
        $this->shared = $shared;
        $this->type = $type;
        $this->value = $value;
        $this->result = $result;
        $this->path = $path;
        $this->nullFence = $nullFence;
    }
}
