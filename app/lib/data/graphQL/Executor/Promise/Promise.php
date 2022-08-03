<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Executor\Promise;

use React\Promise\Promise as ReactPromise;
use yxorP\app\lib\data\graphQL\Executor\Promise\Adapter\SyncPromise;
use yxorP\app\lib\data\graphQL\Utils\Utils;

/**
 * Convenience wrapper for promises represented by Promise Adapter
 */
class Promise
{
    /** @var SyncPromise|ReactPromise */
    public mixed $adoptedPromise;

    /** @var PromiseAdapterInterface */
    private PromiseAdapterInterface $adapter;

    /**
     * @param mixed $adoptedPromise
     * @param PromiseAdapterInterface $adapter
     */
    public function __construct(mixed $adoptedPromise, PromiseAdapterInterface $adapter)
    {
        Utils::invariant(!$adoptedPromise instanceof self, 'Expecting promise from adapted system, got ' . self::class);

        $this->adapter = $adapter;
        $this->adoptedPromise = $adoptedPromise;
    }

    /**
     * @param callable|null $onFulfilled
     * @param callable|null $onRejected
     * @return Promise
     */
    public function then(?callable $onFulfilled = null, ?callable $onRejected = null): Promise
    {
        return $this->adapter->then($this, $onFulfilled, $onRejected);
    }
}
