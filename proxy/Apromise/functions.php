<?php namespace yxorP\proxyApromise;

use ArrayIterator;
use Iterator;
use Throwable;

function queue(TaskQueueInterface $assign = null)
{
    static $queue;
    if ($assign) {
        $queue = $assign;
    } elseif (!$queue) {
        $queue = new TaskQueue();
    }
    return $queue;
}

function task(callable $task): Promise
{
    $queue = queue();
    $promise = new Promise([$queue, 'run']);
    $queue->add(function () use ($task, $promise) {
        try {
            $promise->resolve($task());
        } catch (Throwable $e) {
            $promise->reject($e);
        }
    });
    return $promise;
}

function promise_for($value): FulfilledPromise|Promise|PromiseInterface
{
    if ($value instanceof PromiseInterface) {
        return $value;
    }
    if (method_exists($value, 'then')) {
        $wfn = method_exists($value, 'wait') ? [$value, 'wait'] : null;
        $cfn = method_exists($value, 'cancel') ? [$value, 'cancel'] : null;
        $promise = new Promise($wfn, $cfn);
        $value->then([$promise, 'resolve'], [$promise, 'reject']);
        return $promise;
    }
    return new FulfilledPromise($value);
}

function rejection_for($reason): RejectedPromise|PromiseInterface
{
    if ($reason instanceof PromiseInterface) {
        return $reason;
    }
    return new RejectedPromise($reason);
}

function exception_for($reason): Throwable|AARejectionException
{
    return $reason instanceof Throwable ? $reason : new AARejectionException($reason);
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

function inspect(PromiseInterface $promise): array
{
    try {
        return ['state' => PromiseInterface::FULFILLED, 'value' => $promise->wait()];
    } catch (AARejectionException $e) {
        return ['state' => PromiseInterface::REJECTED, 'reason' => $e->getReason()];
    } catch (Throwable $e) {
        return ['state' => PromiseInterface::REJECTED, 'reason' => $e];
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

function all($promises): RejectedPromise|FulfilledPromise|Promise|PromiseInterface
{
    $results = [];
    return each($promises, function ($value, $idx) use (&$results) {
        $results[$idx] = $value;
    }, function ($reason, $idx, Promise $aggregate) {
        $aggregate->reject($reason);
    })->then(function () use (&$results) {
        ksort($results);
        return $results;
    });
}

function some($count, $promises): RejectedPromise|FulfilledPromise|Promise|PromiseInterface
{
    $results = [];
    $rejections = [];
    return each($promises, function ($value, $idx, PromiseInterface $p) use (&$results, $count) {
        if ($p->getState() !== PromiseInterface::PENDING) {
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
            throw new AggregateExceptionAA('Not enough promises to fulfill count', $rejections);
        }
        ksort($results);
        return array_values($results);
    });
}

function any($promises): RejectedPromise|FulfilledPromise|Promise|PromiseInterface
{
    return some(1, $promises)->then(function ($values) {
        return $values[0];
    });
}

function settle($promises): RejectedPromise|FulfilledPromise|Promise|PromiseInterface
{
    $results = [];
    return each($promises, function ($value, $idx) use (&$results) {
        $results[$idx] = ['state' => PromiseInterface::FULFILLED, 'value' => $value];
    }, function ($reason, $idx) use (&$results) {
        $results[$idx] = ['state' => PromiseInterface::REJECTED, 'reason' => $reason];
    })->then(function () use (&$results) {
        ksort($results);
        return $results;
    });
}

function each($iterable, callable $onFulfilled = null, callable $onRejected = null): Promise|PromiseInterface
{
    return (new EachPromise($iterable, ['fulfilled' => $onFulfilled, 'rejected' => $onRejected]))->promise();
}

function each_limit($iterable, $concurrency, callable $onFulfilled = null, callable $onRejected = null): Promise|PromiseInterface
{
    return (new EachPromise($iterable, ['fulfilled' => $onFulfilled, 'rejected' => $onRejected, 'concurrency' => $concurrency]))->promise();
}

function each_limit_all($iterable, $concurrency, callable $onFulfilled = null): Promise|PromiseInterface
{
    return each_limit($iterable, $concurrency, $onFulfilled, function ($reason, $idx, PromiseInterface $aggregate) {
        $aggregate->reject($reason);
    });
}

function is_fulfilled(PromiseInterface $promise): bool
{
    return $promise->getState() === PromiseInterface::FULFILLED;
}

function is_rejected(PromiseInterface $promise): bool
{
    return $promise->getState() === PromiseInterface::REJECTED;
}

function is_settled(PromiseInterface $promise): bool
{
    return $promise->getState() !== PromiseInterface::PENDING;
}

function coroutine(callable $generatorFn): Coroutine
{
    return new Coroutine($generatorFn);
}