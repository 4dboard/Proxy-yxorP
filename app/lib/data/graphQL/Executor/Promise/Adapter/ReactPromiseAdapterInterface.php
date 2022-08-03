<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Executor\Promise\Adapter;

use React\Promise\Promise as ReactPromise;
use React\Promise\PromiseInterface as ReactPromiseInterface;
use Throwable;
use yxorP\app\lib\data\graphQL\Executor\Promise\Promise;
use yxorP\app\lib\data\graphQL\Executor\Promise\PromiseAdapterInterface;
use yxorP\app\lib\data\graphQL\Utils\Utils;
use function React\Promise\all;
use function React\Promise\reject;
use function React\Promise\resolve;
use function yxorP\app\lib\proxy\promise\all;

class ReactPromiseAdapterInterface implements PromiseAdapterInterface
{
    /**
     * @inheritdoc
     */
    public function isThenable(mixed $value): bool
    {
        return $value instanceof ReactPromiseInterface;
    }

    /**
     * @inheritdoc
     */
    public function convertThenable(object $thenable): Promise
    {
        return new Promise($thenable, $this);
    }

    /**
     * @inheritdoc
     */
    public function then(Promise $promise, ?callable $onFulfilled = null, ?callable $onRejected = null): Promise
    {
        /** @var ReactPromiseInterface $adoptedPromise */
        $adoptedPromise = $promise->adoptedPromise;

        return new Promise($adoptedPromise->then($onFulfilled, $onRejected), $this);
    }

    /**
     * @inheritdoc
     */
    public function create(callable $resolver): Promise
    {
        $promise = new ReactPromise($resolver);

        return new Promise($promise, $this);
    }

    /**
     * @inheritdoc
     */
    public function createFulfilled(mixed $value = null): Promise
    {
        $promise = resolve($value);

        return new Promise($promise, $this);
    }

    /**
     * @inheritdoc
     */
    public function createRejected(Throwable $reason): Promise
    {
        $promise = reject($reason);

        return new Promise($promise, $this);
    }

    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function all(array $promisesOrValues): Promise
    {
        // TODO: rework with generators when PHP minimum required version is changed to 5.5+
        $promisesOrValues = Utils::map(
            $promisesOrValues,
            static function ($item) {
                return $item instanceof Promise ? $item->adoptedPromise : $item;
            }
        );

        $promise = all($promisesOrValues)->then(static function ($values) use ($promisesOrValues): array {
            $orderedResults = [];

            foreach ($promisesOrValues as $key => $value) {
                $orderedResults[$key] = $values[$key];
            }

            return $orderedResults;
        });

        return new Promise($promise, $this);
    }
}
