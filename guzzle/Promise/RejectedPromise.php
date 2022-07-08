<?php namespace yxorP\guzzle\Promise;

use Exception;
use InvalidArgumentException;
use LogicException;
use Throwable;

class RejectedPromise implements PromiseInterface
{
    private $reason;

    public function __construct($reason)
    {
        if (method_exists($reason, 'then')) {
            throw new InvalidArgumentException('You cannot create a RejectedPromise with a promise.');
        }
        $this->reason = $reason;
    }

    public function otherwise(callable $onRejected): Promise|PromiseInterface|static
    {
        return $this->then(null, $onRejected);
    }

    public function then(callable $onFulfilled = null, callable $onRejected = null): Promise|PromiseInterface|static
    {
        if (!$onRejected) {
            return $this;
        }
        $queue = queue();
        $reason = $this->reason;
        $p = new Promise([$queue, 'run']);
        $queue->add(static function () use ($p, $reason, $onRejected) {
            if ($p->getState() === self::PENDING) {
                try {
                    $p->resolve($onRejected($reason));
                } catch (Throwable $e) {
                    $p->reject($e);
                }
            }
        });
        return $p;
    }

    /**
     * @throws Throwable
     */
    public function wait($unwrap = true, $defaultDelivery = null)
    {
        if ($unwrap) {
            throw exception_for($this->reason);
        }
    }

    public function getState(): string
    {
        return self::REJECTED;
    }

    public function resolve($value)
    {
        throw new LogicException("Cannot resolve a rejected promise");
    }

    public function reject($reason)
    {
        if ($reason !== $this->reason) {
            throw new LogicException("Cannot reject a rejected promise");
        }
    }

    public function cancel()
    {
    }
}