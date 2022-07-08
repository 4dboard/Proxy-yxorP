<?php namespace Bugsnag;
class Pipeline
{
    private $pipes;

    public function __construct(array $pipes = [])
    {
        $this->pipes = $pipes;
    }

    public function pipe(callable $pipe)
    {
        $this->pipes[] = $pipe;
        return $this;
    }

    public function insertBefore(callable $pipe, $beforeClass)
    {
        $beforePosition = null;
        foreach ($this->pipes as $index => $callable) {
            $class = get_class($callable);
            if ($class === $beforeClass) {
                $beforePosition = $index;
                break;
            }
        }
        if ($beforePosition === null) {
            $this->pipes[] = $pipe;
        } else {
            array_splice($this->pipes, $beforePosition, 0, [$pipe]);
        }
        return $this;
    }

    public function execute($passable, callable $destination)
    {
        $first = function ($passable) use ($destination) {
            return call_user_func($destination, $passable);
        };
        $pipes = array_reverse($this->pipes);
        return call_user_func(array_reduce($pipes, $this->getSlice(), $first), $passable);
    }

    protected function getSlice()
    {
        return function ($stack, $pipe) {
            return function ($passable) use ($stack, $pipe) {
                return call_user_func($pipe, $passable, $stack);
            };
        };
    }
}