<?php namespace yxorP\proxzle\Promise;

use InvalidArgumentException;
use LogicException;
use Throwable;

class FulfilledPromise implements PromiseInterface
{
    private $value;

    public function __construct($value)
    {
        if (method_exists($value, 'then')) {
            throw new InvalidArgumentException('You cannot create a FulfilledPromise with a promise.');
        }
        $this->value = $value;
    }

    public function otherwise(callable $onRejected): Promise|PromiseInterface|static
    {
        return $this->then(null, $onRejected);
    }

    public function then(callable $onFulfilled = null, callable $onRejected = null): Promise|PromiseInterface|static
    {
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
                } catch (Throwable $e) {
                    $p->reject($e);
                }
            }
        });
        return $p;
    }

    public function wait($unwrap = true, $defaultDelivery = null)
    {
        return null;
    }

    public function getState(): string
    {
        return self::FULFILLED;
    }

    public function resolve($value)
    {
        if ($value !== $this->value) {
            throw new LogicException("Cannot resolve a fulfilled promise");
        }
    }

    public function reject($reason)
    {
        throw new LogicException("Cannot reject a fulfilled promise");
    }

    public function cancel()
    {
    }
}