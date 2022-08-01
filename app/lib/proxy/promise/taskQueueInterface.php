<?php namespace yxorP\app\lib\proxy\Promise;
interface taskQueueInterface
{
    public function isEmpty();

    public function add(callable $task);

    public function run();
}
