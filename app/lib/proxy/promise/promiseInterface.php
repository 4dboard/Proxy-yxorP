<?php namespace yxorP\app\lib\proxy\promise;
interface promiseInterface
{
    const PENDING = 'pending';
    const FULFILLED = 'fulfilled';
    const REJECTED = 'rejected';

    public function then(callable $onFulfilled = null, callable $onRejected = null);

    public function otherwise(callable $onRejected);

    public function getState();

    public function resolve($value);

    public function reject($reason);

    public function cancel();

    public function wait($unwrap = true);
}
