<?php namespace yxorP\app\lib\proxy\promise;

use Throwable;

class eachPromise implements promisorInterface
{
    private $pending = [];
    private $iterable;
    private $concurrency;
    private $onFulfilled;
    private $onRejected;
    private $aggregate;
    private $mutex;

    public function __construct($iterable, array $config = [])
    {
        $this->iterable = iter_for($iterable);
        if (isset($config['concurrency'])) {
            $this->concurrency = $config['concurrency'];
        }
        if (isset($config['fulfilled'])) {
            $this->onFulfilled = $config['fulfilled'];
        }
        if (isset($config['rejected'])) {
            $this->onRejected = $config['rejected'];
        }
    }

    public function promise()
    {
        if ($this->aggregate) {
            return $this->aggregate;
        }
        try {
            $this->createPromise();
            $this->iterable->rewind();
            $this->refillPending();
        } catch (Throwable $e) {
            $this->aggregate->reject($e);
        }
        return $this->aggregate;
    }

    private function createPromise()
    {
        $this->mutex = false;
        $this->aggregate = new promise(function () {
            reset($this->pending);
            if (empty($this->pending) && !$this->iterable->valid()) {
                $this->aggregate->resolve(null);
                return;
            }
            while ($promise = current($this->pending)) {
                next($this->pending);
                $promise->wait();
                if ($this->aggregate->getState() !== promiseInterface::PENDING) {
                    return;
                }
            }
        });
        $clearFn = function () {
            $this->iterable = $this->concurrency = $this->pending = null;
            $this->onFulfilled = $this->onRejected = null;
        };
        $this->aggregate->then($clearFn, $clearFn);
    }

    private function refillPending()
    {
        if (!$this->concurrency) {
            while ($this->addPending() && $this->advanceIterator()) ;
            return;
        }
        $concurrency = is_callable($this->concurrency) ? call_user_func($this->concurrency, count($this->pending)) : $this->concurrency;
        $concurrency = max($concurrency - count($this->pending), 0);
        if (!$concurrency) {
            return;
        }
        $this->addPending();
        while (--$concurrency && $this->advanceIterator() && $this->addPending()) ;
    }

    private function addPending()
    {
        if (!$this->iterable || !$this->iterable->valid()) {
            return false;
        }
        $promise = promise_for($this->iterable->current());
        $idx = $this->iterable->key();
        $this->pending[$idx] = $promise->then(function ($value) use ($idx) {
            if ($this->onFulfilled) {
                call_user_func($this->onFulfilled, $value, $idx, $this->aggregate);
            }
            $this->step($idx);
        }, function ($reason) use ($idx) {
            if ($this->onRejected) {
                call_user_func($this->onRejected, $reason, $idx, $this->aggregate);
            }
            $this->step($idx);
        });
        return true;
    }

    private function step($idx)
    {
        if ($this->aggregate->getState() !== promiseInterface::PENDING) {
            return;
        }
        unset($this->pending[$idx]);
        if ($this->advanceIterator() && !$this->checkIfFinished()) {
            $this->refillPending();
        }
    }

    private function advanceIterator()
    {
        if ($this->mutex) {
            return false;
        }
        $this->mutex = true;
        try {
            $this->iterable->next();
            $this->mutex = false;
            return true;
        } catch (Throwable $e) {
            $this->aggregate->reject($e);
            $this->mutex = false;
            return false;
        }
    }

    private function checkIfFinished()
    {
        if (!$this->pending && !$this->iterable->valid()) {
            $this->aggregate->resolve(null);
            return true;
        }
        return false;
    }
}
