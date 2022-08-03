<?php namespace yxorP\app\lib\proxy\promise;

use ArrayIterator;
use Exception;
use Iterator;
use Throwable;

function queue(taskQueueInterface $assign = null)
{
    static $queue;
    if ($assign) {
        $queue = $assign;
    } elseif (!$queue) {
        $queue = new taskQueue();
    }
    return $queue;
}

function task(callable $task): promise
{
    $queue = queue();
    $promise = new promise([$queue, 'run']);
    $queue->add(function () use ($task, $promise) {
        try {
            $promise->resolve($task());
        } catch (Throwable $e) {
            $promise->reject($e);
        }
    });
    return $promise;
}

function promise_for($value): promise|fulfilledPromise|promiseInterface
{
    if ($value instanceof promiseInterface) {
        return $value;
    }
    if (method_exists($value, 'then')) {
        $wfn = method_exists($value, 'wait') ? [$value, 'wait'] : null;
        $cfn = method_exists($value, 'cancel') ? [$value, 'cancel'] : null;
        $promise = new promise($wfn, $cfn);
        $value->then([$promise, 'resolve'], [$promise, 'reject']);
        return $promise;
    }
    return new fulfilledPromise($value);
}

function rejection_for($reason): promiseInterface|rejectedPromise
{
    if ($reason instanceof promiseInterface) {
        return $reason;
    }
    return new rejectedPromise($reason);
}

function exception_for($reason): Throwable|aRejectionException
{
    return $reason instanceof Throwable ? $reason : new aRejectionException($reason);
}

function iter_for($value): Iterator|ArrayIterator
{
    if ($value instanceof Iterator) {
        return $value;
    } elseif (is_array($value)) {
        return new ArrayIterator($value);
    } else {
        return new ArrayIterator([$value]);
    }
}

function inspect(promiseInterface $promise): array
{
    try {
        return ['state' => promiseInterface::FULFILLED, 'value' => $promise->wait()];
    } catch (aRejectionException $e) {
        return ['state' => promiseInterface::REJECTED, 'reason' => $e->getReason()];
    } catch (Throwable $e) {
        return ['state' => promiseInterface::REJECTED, 'reason' => $e];
    }
}

function inspect_all($promises): array
{
    $results = [];
    foreach ($promises as $key => $promise) {
        $results[$key] = inspect($promise);
    }
    return $results;
}

function unwrap($promises): array
{
    $results = [];
    foreach ($promises as $key => $promise) {
        $results[$key] = $promise->wait();
    }
    return $results;
}

function all($promises)
{
    $results = [];
    return each($promises, function ($value, $idx) use (&$results) {
        $results[$idx] = $value;
    }, function ($reason, $idx, promise $aggregate) {
        $aggregate->reject($reason);
    })->then(function () use (&$results) {
        ksort($results);
        return $results;
    });
}

function some($count, $promises)
{
    $results = [];
    $rejections = [];
    return each($promises, function ($value, $idx, promiseInterface $p) use (&$results, $count) {
        if ($p->getState() !== promiseInterface::PENDING) {
            return;
        }
        $results[$idx] = $value;
        if (count($results) >= $count) {
            $p->resolve(null);
        }
    }, function ($reason) use (&$rejections) {
        $rejections[] = $reason;
    })->then(function () use (&$results, &$rejections, $count) {
        if (count($results) !== $count) {
            throw new aggregateException('Not enough promises to fulfill count', $rejections);
        }
        ksort($results);
        return array_values($results);
    });
}

function any($promises)
{
    return some(1, $promises)->then(function ($values) {
        return $values[0];
    });
}

function settle($promises)
{
    $results = [];
    return each($promises, function ($value, $idx) use (&$results) {
        $results[$idx] = ['state' => promiseInterface::FULFILLED, 'value' => $value];
    }, function ($reason, $idx) use (&$results) {
        $results[$idx] = ['state' => promiseInterface::REJECTED, 'reason' => $reason];
    })->then(function () use (&$results) {
        ksort($results);
        return $results;
    });
}

function each($iterable, callable $onFulfilled = null, callable $onRejected = null)
{
    return (new eachPromise($iterable, ['fulfilled' => $onFulfilled, 'rejected' => $onRejected]))->promise();
}

function each_limit($iterable, $concurrency, callable $onFulfilled = null, callable $onRejected = null)
{
    return (new eachPromise($iterable, ['fulfilled' => $onFulfilled, 'rejected' => $onRejected, 'concurrency' => $concurrency]))->promise();
}

function each_limit_all($iterable, $concurrency, callable $onFulfilled = null)
{
    return each_limit($iterable, $concurrency, $onFulfilled, function ($reason, $idx, promiseInterface $aggregate) {
        $aggregate->reject($reason);
    });
}

function is_fulfilled(promiseInterface $promise): bool
{
    return $promise->getState() === promiseInterface::FULFILLED;
}

function is_rejected(promiseInterface $promise): bool
{
    return $promise->getState() === promiseInterface::REJECTED;
}

function is_settled(promiseInterface $promise): bool
{
    return $promise->getState() !== promiseInterface::PENDING;
}

function coroutine(callable $generatorFn): coroutine
{
    return new coroutine($generatorFn);
}
