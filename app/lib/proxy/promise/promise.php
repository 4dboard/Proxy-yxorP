<?php namespace yxorP\app\lib\proxy\promise;

use Exception;
use LogicException;
use Throwable;

class promise implements promiseInterface
{
    private $state = self::PENDING;
    private $result;
    private $cancelFn;
    private $waitFn;
    private $waitList;
    private $handlers = [];

    public function __construct(callable $waitFn = null, callable $cancelFn = null)
    {
        $this->waitFn = $waitFn;
        $this->cancelFn = $cancelFn;
    }

    public function resolve($value)
    {
        $this->settle(self::FULFILLED, $value);
    }

    private function settle($state, $value)
    {
        if ($this->state !== self::PENDING) {
            if ($state === $this->state && $value === $this->result) {
                return;
            }
            throw $this->state === $state ? new LogicException("The promise is already {$state}.") : new LogicException("Cannot change a {$this->state} promise to {$state}");
        }
        if ($value === $this) {
            throw new LogicException('Cannot fulfill or reject a promise with itself');
        }
        $this->state = $state;
        $this->result = $value;
        $handlers = $this->handlers;
        $this->handlers = null;
        $this->waitList = $this->waitFn = null;
        $this->cancelFn = null;
        if (!$handlers) {
            return;
        }
        if (!method_exists($value, 'then')) {
            $id = $state === self::FULFILLED ? 1 : 2;
            queue()->add(static function () use ($id, $value, $handlers) {
                foreach ($handlers as $handler) {
                    self::callHandler($id, $value, $handler);
                }
            });
        } elseif ($value instanceof promise && $value->getState() === self::PENDING) {
            $value->handlers = array_merge($value->handlers, $handlers);
        } else {
            $value->then(static function ($value) use ($handlers) {
                foreach ($handlers as $handler) {
                    self::callHandler(1, $value, $handler);
                }
            }, static function ($reason) use ($handlers) {
                foreach ($handlers as $handler) {
                    self::callHandler(2, $reason, $handler);
                }
            });
        }
    }

    private static function callHandler($index, $value, array $handler)
    {
        $promise = $handler[0];
        if ($promise->getState() !== self::PENDING) {
            return;
        }
        try {
            if (isset($handler[$index])) {
                $promise->resolve($handler[$index]($value));
            } elseif ($index === 1) {
                $promise->resolve($value);
            } else {
                $promise->reject($value);
            }
        } catch (Throwable $reason) {
            $promise->reject($reason);
        }
    }

    public function getState()
    {
        return $this->state;
    }

    public function otherwise(callable $onRejected)
    {
        return $this->then(null, $onRejected);
    }

    public function then(callable $onFulfilled = null, callable $onRejected = null)
    {
        if ($this->state === self::PENDING) {
            $p = new promise(null, [$this, 'cancel']);
            $this->handlers[] = [$p, $onFulfilled, $onRejected];
            $p->waitList = $this->waitList;
            $p->waitList[] = $this;
            return $p;
        }
        if ($this->state === self::FULFILLED) {
            return $onFulfilled ? promise_for($this->result)->then($onFulfilled) : promise_for($this->result);
        }
        $rejection = rejection_for($this->result);
        return $onRejected ? $rejection->then(null, $onRejected) : $rejection;
    }

    public function wait($unwrap = true)
    {
        $this->waitIfPending();
        $inner = $this->result instanceof promiseInterface ? $this->result->wait($unwrap) : $this->result;
        if ($unwrap) {
            if ($this->result instanceof promiseInterface || $this->state === self::FULFILLED) {
                return $inner;
            } else {
                throw exception_for($inner);
            }
        }
    }

    private function waitIfPending()
    {
        if ($this->state !== self::PENDING) {
            return;
        } elseif ($this->waitFn) {
            $this->invokeWaitFn();
        } elseif ($this->waitList) {
            $this->invokeWaitList();
        } else {
            $this->reject('Cannot wait on a promise that has ' . 'no internal wait function. You must provide a wait ' . 'function when constructing the promise to be able to ' . 'wait on a promise.');
        }
        queue()->run();
        if ($this->state === self::PENDING) {
            $this->reject('Invoking the wait callback did not resolve the promise');
        }
    }

    private function invokeWaitFn()
    {
        try {
            $wfn = $this->waitFn;
            $this->waitFn = null;
            $wfn(true);
        } catch (Exception $reason) {
            if ($this->state === self::PENDING) {
                $this->reject($reason);
            } else {
                throw $reason;
            }
        }
    }

    public function reject($reason)
    {
        $this->settle(self::REJECTED, $reason);
    }

    private function invokeWaitList()
    {
        $waitList = $this->waitList;
        $this->waitList = null;
        foreach ($waitList as $result) {
            while (true) {
                $result->waitIfPending();
                if ($result->result instanceof promise) {
                    $result = $result->result;
                } else {
                    if ($result->result instanceof promiseInterface) {
                        $result->result->wait(false);
                    }
                    break;
                }
            }
        }
    }

    public function cancel()
    {
        if ($this->state !== self::PENDING) {
            return;
        }
        $this->waitFn = $this->waitList = null;
        if ($this->cancelFn) {
            $fn = $this->cancelFn;
            $this->cancelFn = null;
            try {
                $fn();
            } catch (Throwable $e) {
                $this->reject($e);
            }
        }
        if ($this->state === self::PENDING) {
            $this->reject(new cancellationException('Promise has been cancelled'));
        }
    }
}
