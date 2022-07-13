<?php

namespace yxorP\inc\proxy\Promise;

use Throwable;

/**
 * A promise that has been rejected.
 *
 * Thenning off of this promise will invoke the onRejected callback
 * immediately and ignore other callbacks.
 */
class RejectedPromise implements PromiseInterface
{
    private $reason;

    public function __construct($reason)
    {
        if (method_exists($reason, 'then')) {
            throw new InvalidArgumentException(
                'You cannot create a RejectedPromise with a promise.');
        }

        $this->reason = $reason;
    }

    public function otherwise(callable $onRejected): PromiseInterface|Promise|static
    {
        return $this->then(null, $onRejected);
    }

    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
    ): mixed
    {
        // If there's no onRejected callback then just return self.
        if (!$onRejected) {
            return $this;
        }

        $queue = queue();
        $reason = $this->reason;
        $p = new Promise([$queue, 'run']);
        $queue->add(static function () use ($p, $reason, $onRejected) {
            if ($p->getState() === self::PENDING) {
                try {
                    // Return a resolved promise if onRejected does not throw.
                    $p->resolve($onRejected($reason));
                } catch (Throwable|Exception $e) {
                    // onRejected threw, so return a rejected promise.
                    $p->reject($e);
                }
            }
        });

        return $p;
    }

    public function wait(bool $unwrap = true)
    {
        if ($unwrap) {
            throw exception_for($this->reason);
        }
    }

    public function getState(): string
    {
        return self::REJECTED;
    }

    public function resolve(mixed $value)
    {
        throw new LogicException("Cannot resolve a rejected promise");
    }

    public function reject(mixed $reason)
    {
        if ($reason !== $this->reason) {
            throw new LogicException("Cannot reject a rejected promise");
        }
    }

    public function cancel()
    {
        // pass
    }
}
