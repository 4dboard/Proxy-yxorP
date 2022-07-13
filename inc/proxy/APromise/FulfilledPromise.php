<?php

namespace yxorP\inc\proxy\Promise;

use Throwable;

/**
 * A promise that has been fulfilled.
 *
 * Thenning off of this promise will invoke the onFulfilled callback
 * immediately and ignore other callbacks.
 */
class FulfilledPromise implements PromiseInterface
{
    private $value;

    public function __construct($value)
    {
        if (method_exists($value, 'then')) {
            throw new InvalidArgumentException(
                'You cannot create a FulfilledPromise with a promise.');
        }

        $this->value = $value;
    }

    public function otherwise(callable $onRejected): mixed
    {
        return $this->then(null, $onRejected);
    }

    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
    ): mixed
    {
        // Return itself if there is no onFulfilled function.
        if (!$onFulfilled) {
            return $this;
        }

        $queue = queue();
        $p = new Promise([$queue, 'run']);
        $value = $this->value;
        $queue->add(static function () use ($p, $value, $onFulfilled) {
            if ($p->getState() === self::PENDING) {
                try {
                    $p->resolve($onFulfilled($value));
                } catch (Throwable|Exception $e) {
                    $p->reject($e);
                }
            }
        });

        return $p;
    }

    public function wait(bool $unwrap = true)
    {
        return null;
    }

    public function getState(): string
    {
        return self::FULFILLED;
    }

    public function resolve(mixed $value)
    {
        if ($value !== $this->value) {
            throw new LogicException("Cannot resolve a fulfilled promise");
        }
    }

    public function reject(mixed $reason)
    {
        throw new LogicException("Cannot reject a fulfilled promise");
    }

    public function cancel()
    {
        // pass
    }
}
