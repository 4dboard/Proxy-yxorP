<?php namespace yxorP\app\lib\proxy\promise;

use Exception;
use JetBrains\PhpStorm\Pure;
use Throwable;

final class coroutine implements promiseInterface
{
    private $currentPromise;
    private $generator;
    private $result;

    public function __construct(callable $generatorFn)
    {
        $this->generator = $generatorFn();
        $this->result = new promise(function () {
            while (isset($this->currentPromise)) {
                $this->currentPromise->wait();
            }
        });
        $this->nextCoroutine($this->generator->current());
    }

    private function nextCoroutine($yielded)
    {
        $this->currentPromise = promise_for($yielded)->then([$this, '_handleSuccess'], [$this, '_handleFailure']);
    }

    public function then(callable $onFulfilled = null, callable $onRejected = null)
    {
        return $this->result->then($onFulfilled, $onRejected);
    }

    public function otherwise(callable $onRejected)
    {
        return $this->result->otherwise($onRejected);
    }

    /**
     * @throws \Throwable
     */
    public function wait($unwrap = true)
    {
        return $this->result->wait($unwrap);
    }

    #[Pure] public function getState()
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
}
