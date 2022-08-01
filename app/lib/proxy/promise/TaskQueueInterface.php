<?php namespace yxorP\app\lib\proxy\Promise;
interface TaskQueueInterface
{
    public function isEmpty();

    public function add(callable $task);

    public function run();
}
