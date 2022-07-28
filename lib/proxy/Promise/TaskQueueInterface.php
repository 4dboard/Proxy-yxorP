<?php namespace yxorP\lib\proxy\Promise;
interface TaskQueueInterface
{
    public function isEmpty();

    public function add(callable $task);

    public function run();
}