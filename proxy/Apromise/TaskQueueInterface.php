<?php namespace yxorP\proxyApromise;
interface TaskQueueInterface
{
    public function isEmpty();

    public function add(callable $task);

    public function run();
}