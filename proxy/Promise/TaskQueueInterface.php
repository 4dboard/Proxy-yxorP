<?php namespace yxorP\proxzle\Promise;
interface TaskQueueInterface
{
    public function isEmpty();

    public function add(callable $task);

    public function run();
}