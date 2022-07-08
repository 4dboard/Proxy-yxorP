<?php namespace yxorP\guzzle\Promise;
class TaskQueue implements TaskQueueInterface
{
    private bool $enableShutdown = true;
    private array $queue = [];

    public function __construct($withShutdown = true)
    {
        if ($withShutdown) {
            register_shutdown_function(function () {
                if ($this->enableShutdown) {
                    $err = error_get_last();
                    if (!$err || ($err['type'] ^ E_ERROR)) {
                        $this->run();
                    }
                }
            });
        }
    }

    public function run()
    {
        while ($task = array_shift($this->queue)) {
            $task();
        }
    }

    public function isEmpty(): bool
    {
        return !$this->queue;
    }

    public function add(callable $task)
    {
        $this->queue[] = $task;
    }

    public function disableShutdown()
    {
        $this->enableShutdown = false;
    }
}