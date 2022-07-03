<?php namespace yxorP\http;

use Exception;
use Throwable;
use yxorP\Worker;
use function function_exists;
use function is_callable;
use function pcntl_alarm;
use function pcntl_signal;
use function time;
use const PHP_INT_MAX;
use const SIGALRM;

class timer
{
    private static array $_tasks = [];
    private static $_event = null;
    private static int $_timerId = 0;
    private static array $_status = [];

    public static function init($event = null)
    {
        if ($event) {
            self::$_event = $event;
            return;
        }
        if (function_exists('pcntl_signal')) {
            pcntl_signal(SIGALRM, ['\yxorP\Timer', 'signalHandle'], false);
        }
    }

    public static function signalHandle()
    {
        if (!self::$_event) {
            pcntl_alarm(1);
            self::tick();
        }
    }

    public static function tick()
    {
        if (empty(self::$_tasks)) {
            pcntl_alarm(0);
            return;
        }
        $time_now = time();
        foreach (self::$_tasks as $run_time => $task_data) {
            if ($time_now >= $run_time) {
                foreach ($task_data as $index => $one_task) {
                    $task_func = $one_task[0];
                    $task_args = $one_task[1];
                    $persistent = $one_task[2];
                    $time_interval = $one_task[3];
                    try {
                        $task_func(...$task_args);
                    } catch (Throwable $e) {
                        Worker::safeEcho($e);
                    }
                    if ($persistent && !empty(self::$_status[$index])) {
                        $new_run_time = time() + $time_interval;
                        if (!isset(self::$_tasks[$new_run_time])) self::$_tasks[$new_run_time] = [];
                        self::$_tasks[$new_run_time][$index] = [$task_func, (array)$task_args, $persistent, $time_interval];
                    }
                }
                unset(self::$_tasks[$run_time]);
            }
        }
    }

    public static function delay(float $delay, $func, $args = [])
    {
        return static::add($delay, $func, $args, false);
    }

    public static function add(float $time_interval, $func, $args = [], $persistent = true)
    {
        if ($time_interval < 0) {
            Worker::safeEcho(new Exception("bad time_interval"));
            return false;
        }
        if ($args === null) {
            $args = [];
        }
        if (self::$_event) {
            return $persistent ? self::$_event->repeat($time_interval, $func, $args) : self::$_event->delay($time_interval, $func, $args);
        }
        if (!Worker::getAllWorkers()) {
            return;
        }
        if (!is_callable($func)) {
            Worker::safeEcho(new Exception("not callable"));
            return false;
        }
        if (empty(self::$_tasks)) {
            pcntl_alarm(1);
        }
        $run_time = time() + $time_interval;
        if (!isset(self::$_tasks[$run_time])) {
            self::$_tasks[$run_time] = [];
        }
        self::$_timerId = self::$_timerId == PHP_INT_MAX ? 1 : ++self::$_timerId;
        self::$_status[self::$_timerId] = true;
        self::$_tasks[$run_time][self::$_timerId] = [$func, (array)$args, $persistent, $time_interval];
        return self::$_timerId;
    }

    public static function del($timer_id): bool
    {
        if (self::$_event) {
            return self::$_event->deleteTimer($timer_id);
        }
        foreach (self::$_tasks as $run_time => $task_data) {
            if (array_key_exists($timer_id, $task_data)) unset(self::$_tasks[$run_time][$timer_id]);
        }
        if (array_key_exists($timer_id, self::$_status)) unset(self::$_status[$timer_id]);
        return true;
    }

    public static function delAll()
    {
        self::$_tasks = self::$_status = [];
        pcntl_alarm(0);
        self::$_event?->deleteAllTimer();
    }
}