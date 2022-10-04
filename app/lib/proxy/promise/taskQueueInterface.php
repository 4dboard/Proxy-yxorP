<?php namespace yxorP\app\lib\proxy\promise;
interface taskQueueInterface
{
    public function isEmpty();

    public function add(callable $task);

    public function run();
}
