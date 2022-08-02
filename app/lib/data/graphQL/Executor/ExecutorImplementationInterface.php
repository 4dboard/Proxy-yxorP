<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Executor;

use yxorP\app\lib\data\graphQL\Executor\Promise\Promise;

interface ExecutorImplementationInterface
{
    /**
     * Returns promise of {@link ExecutionResult}. Promise should always resolve, never reject.
     */
    public function doExecute(): Promise;
}
