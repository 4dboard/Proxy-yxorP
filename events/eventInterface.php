<?php

namespace yxorP\events;

interface eventInterface
{
    const EV_READ = ;

    /**
     * Delay the execution of a callback.
     * @param float $delay
     * @param $func
     * @param $args
     * @return int|bool
     */
    public function delay(float $delay, $func, $args): bool|int;

    /**
     * Repeatedly execute a callback.
     * @param float $interval
     * @param $func
     * @param $args
     * @return int|bool
     */
    public function repeat(float $interval, $func, $args): bool|int;

    /**
     * Delete a timer.
     * @param $timer_id
     * @return bool
     */
    public function deleteTimer($timer_id): bool;

    /**
     * Execute a callback when a stream resource becomes readable or is closed for reading.
     * @param $stream
     * @param $func
     * @return void
     */
    public function onReadable($stream, $func);

    /**
     * Cancel a callback of stream readable.
     * @param $stream
     * @return void
     */
    public function offReadable($stream);

    /**
     * Execute a callback when a stream resource becomes writable or is closed for writing.
     * @param $stream
     * @param $func
     * @return void
     */
    public function onWritable($stream, $func);

    /**
     * Cancel a callback of stream writable.
     * @param $stream
     * @return mixed
     */
    public function offWritable($stream): string|array|object|null;

    /**
     * Execute a callback when a signal is received.
     * @param $signal
     * @param $func
     * @return void
     */
    public function onSignal($signal, $func);

    /**
     * Cancel a callback of signal.
     * @param $signal
     * @return void
     */
    public function offSignal($signal);

    /**
     * Delete all timer.
     * @return void
     */
    public function deleteAllTimer();

    /**
     * Run the event loop.
     * @return void
     */
    public function run();

    /**
     * Stop event loop.
     * @return void
     */
    public function stop();

    /**
     *
     * @return int
     */
    public function getTimerCount(): int;
}
