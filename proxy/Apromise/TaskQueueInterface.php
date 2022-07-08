<?php namespace yxorP\proxy\Apromise;
interface TaskQueueInterface
{
    public function isEmpty();

    public function add(callable $task);

    public function run();
}