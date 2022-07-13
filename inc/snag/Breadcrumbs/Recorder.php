<?php

namespace yxorP\inc\snag\Breadcrumbs;

use Countable;
use Iterator;
use JetBrains\PhpStorm\Pure;
use ReturnTypeWillChange;

/**
 * @implements Iterator<int, Breadcrumb>
 */
class Recorder implements Countable, Iterator
{
    /**
     * The maximum number of breadcrumbs to store.
     *
     * @var int
     */
    const MAX_ITEMS = 25;

    /**
     * The recorded breadcrumbs.
     *
     * @var Breadcrumb[]
     */
    protected array $breadcrumbs = [];

    /**
     * The head position.
     *
     * @var int
     */
    protected int $head = 0;

    /**
     * The pointer position.
     *
     * @var int
     */
    protected int $pointer = 0;

    /**
     * The iteration position.
     *
     * @var int
     */
    protected int $position = 0;

    /**
     * Record a breadcrumb.
     *
     * We're recording a maximum of 25 breadcrumbs. Once we've recorded 25, we
     * start wrapping back around and replacing the earlier ones. In order to
     * indicate the start of the list, we advance a head pointer.
     *
     * @param Breadcrumb $breadcrumb
     *
     * @return void
     */
    public function record(Breadcrumb $breadcrumb)
    {
        // advance the head by one if we've caught up
        if ($this->breadcrumbs && $this->pointer === $this->head) {
            $this->head = ($this->head + 1) % static::MAX_ITEMS;
        }

        // record the new breadcrumb
        $this->breadcrumbs[$this->pointer] = $breadcrumb;

        // advance the pointer so we set the next breadcrumb in the next slot
        $this->pointer = ($this->pointer + 1) % static::MAX_ITEMS;
    }

    /**
     * Clear all recorded breadcrumbs.
     *
     * @return void
     */
    public function clear(): mixed
    {
        $this->head = 0;
        $this->pointer = 0;
        $this->position = 0;
        $this->breadcrumbs = [];
    }

    /**
     * Get the current item.
     *
     * @return Breadcrumb
     */
    #[ReturnTypeWillChange]
    public function current(): Breadcrumb
    {
        return $this->breadcrumbs[($this->head + $this->position) % static::MAX_ITEMS];
    }

    /**
     * Get the current key.
     *
     * @return int
     */
    #[ReturnTypeWillChange]
    public function key(): int
    {
        return $this->position;
    }

    /**
     * Advance the key position.
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function next()
    {
        $this->position++;
    }

    /**
     * Rewind the key position.
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * Is the current key position set?
     *
     * @return bool
     */
    #[Pure] #[ReturnTypeWillChange]
    public function valid(): bool
    {
        return $this->position < $this->count();
    }

    /**
     * Get the number of stored breadcrumbs.
     *
     * @return int
     */
    #[ReturnTypeWillChange]
    public function count(): int
    {
        return count($this->breadcrumbs);
    }
}
