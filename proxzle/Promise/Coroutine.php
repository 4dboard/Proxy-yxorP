<?php namespace yxorP\proxzle\Promise;

use Exception;
use JetBrains\PhpStorm\Pure;
use Throwable;

final class Coroutine implements PromiseInterface
{
    private $currentPromise;
    private $generator;
    private Promise $result;

    public function __construct(callable $generatorFn)
    {
        $this->generator = $generatorFn();
        $this->result = new Promise(function () {
            while (isset($this->currentPromise)) {
                $this->currentPromise->wait();
            }
        });
        $this->nextCoroutine($this->generator->current());
    }

    public function wait($unwrap = true)
    {
        return $this->result->wait($unwrap);
    }

    public function then(callable $onFulfilled = null, callable $onRejected = null): FulfilledPromise|RejectedPromise|Promise|PromiseInterface
    {
        return $this->result->then($onFulfilled, $onRejected);
    }

    public function otherwise(callable $onRejected): FulfilledPromise|RejectedPromise|Promise|PromiseInterface
    {
        return $this->result->otherwise($onRejected);
    }

    #[Pure] public function getState(): string
    {
        return $this->result->getState();
    }

    public function resolve($value)
    {
        $this->result->resolve($value);
    }

    public function reject($reason)
    {
        $this->result->reject($reason);
    }

    public function cancel()
    {
        $this->currentPromise->cancel();
        $this->result->cancel();
    }

    public function _handleSuccess($value)
    {
        unset($this->currentPromise);
        try {
            $next = $this->generator->send($value);
            if ($this->generator->valid()) {
                $this->nextCoroutine($next);
            } else {
                $this->result->resolve($value);
            }
        } catch (Exception $exception) {
            $this->result->reject($exception);
        } catch (Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }

    public function _handleFailure($reason)
    {
        unset($this->currentPromise);
        try {
            $nextYield = $this->generator->throw(exception_for($reason));
            $this->nextCoroutine($nextYield);
        } catch (Exception $exception) {
            $this->result->reject($exception);
        } catch (Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }

    private function nextCoroutine($yielded)
    {
        $this->currentPromise = promise_for($yielded)->then([$this, '_handleSuccess'], [$this, '_handleFailure']);
    }
}