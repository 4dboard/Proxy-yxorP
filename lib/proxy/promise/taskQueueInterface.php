<?php namespace yxorP\lib\proxy\promise;
interface taskQueueInterface
{
    public function isEmpty();

    public function add(callable $task);

    public function run();
}
