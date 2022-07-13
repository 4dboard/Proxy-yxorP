<?php

namespace ColorThief;

/* Simple priority queue */

class PQueue
{
    private array $contents = [];
    private bool $sorted = false;
    private $comparator = null;

    public function __construct($comparator)
    {
        $this->setComparator($comparator);
    }

    public function setComparator($function)
    {
        $this->comparator = $function;
        $this->sorted = false;
    }

    public function push($object)
    {
        $this->contents[] = $object;
        $this->sorted = false;
    }

    public function peek($index = null)
    {
        if (!$this->sorted) {
            $this->sort();
        }

        if ($index === null) {
            $index = $this->size() - 1;
        }

        return $this->contents[$index];
    }

    private function sort()
    {
        usort($this->contents, $this->comparator);
        $this->sorted = true;
    }

    public function size(): int
    {
        return count($this->contents);
    }

    public function pop()
    {
        if (!$this->sorted) {
            $this->sort();
        }

        return array_pop($this->contents);
    }

    public function map($function)
    {
        return array_map($function, $this->contents);
    }

    public function debug(): array
    {
        if (!$this->sorted) {
            $this->sort();
        }

        return $this->contents;
    }
}
