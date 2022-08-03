<?php namespace yxorP\app\lib\proxy\promise;

use InvalidArgumentException;
use LogicException;
use Throwable;

class fulfilledPromise implements promiseInterface
{
    private $value;

    public function __construct($value)
    {
        if (method_exists($value, 'then')) {
            throw new InvalidArgumentException('You cannot create a FulfilledPromise with a promise.');
        }
        $this->value = $value;
    }

    public function otherwise(callable $onRejected)
    {
        return $this->then(null, $onRejected);
    }

    public function then(callable $onFulfilled = null, callable $onRejected = null)
    {
        if (!$onFulfilled) {
            return $this;
        }
        $queue = queue();
        $p = new promise([$queue, 'run']);
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

    public function getState()
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
