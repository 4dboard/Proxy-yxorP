<?php
/*
 * Copyright 2017-present MongoDB, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace yxorP\app\lib\data\mongoDB\Model;

use Countable;
use Iterator;
use IteratorIterator;
use JetBrains\PhpStorm\Pure;
use ReturnTypeWillChange;
use Traversable;
use function count;
use function current;
use function key;
use function next;
use function reset;

/**
 * Iterator for wrapping a Traversable and caching its results.
 *
 * By caching results, this iterators allows a Traversable to be counted and
 * rewound multiple times, even if the wrapped object does not natively support
 * those operations (e.g. MongoDB\Driver\Cursor).
 *
 * @internal
 */
class CachingIterator implements Countable, Iterator
{
    /** @var array */
    private array $items = [];

    /** @var Iterator */
    private Iterator|Traversable|IteratorIterator $iterator;

    /** @var boolean */
    private bool $iteratorAdvanced = false;

    /** @var boolean */
    private bool $iteratorExhausted = false;

    /**
     * Initialize the iterator and stores the first item in the cache. This
     * effectively rewinds the Traversable and the wrapping IteratorIterator.
     * Additionally, this mimics behavior of the SPL iterators and allows users
     * to omit an explicit call to rewind() before using the other methods.
     *
     * @param Traversable $traversable
     */
    public function __construct(Traversable $traversable)
    {
        $this->iterator = $traversable instanceof Iterator ? $traversable : new IteratorIterator($traversable);

        $this->iterator->rewind();
        $this->storeCurrentItem();
    }

    /**
     * Stores the current item in the cache.
     */
    private function storeCurrentItem()
    {
        if (!$this->iterator->valid()) {
            return;
        }

        $this->items[$this->iterator->key()] = $this->iterator->current();
    }

    /**
     * @see http://php.net/countable.count
     * @return integer
     */
    #[ReturnTypeWillChange]
    public function count(): int
    {
        $this->exhaustIterator();

        return count($this->items);
    }

    /**
     * Ensures that the inner iterator is fully consumed and cached.
     */
    private function exhaustIterator()
    {
        while (!$this->iteratorExhausted) {
            $this->next();
        }
    }

    /**
     * @see http://php.net/iterator.next
     * @return void
     */
    #[ReturnTypeWillChange]
    public function next()
    {
        if (!$this->iteratorExhausted) {
            $this->iteratorAdvanced = true;
            $this->iterator->next();

            $this->storeCurrentItem();

            $this->iteratorExhausted = !$this->iterator->valid();
        }

        next($this->items);
    }

    /**
     * @see http://php.net/iterator.current
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function current(): mixed
    {
        return current($this->items);
    }

    /**
     * @see http://php.net/iterator.rewind
     * @return void
     */
    #[ReturnTypeWillChange]
    public function rewind()
    {
        /* If the iterator has advanced, exhaust it now so that future iteration
         * can rely on the cache.
         */
        if ($this->iteratorAdvanced) {
            $this->exhaustIterator();
        }

        reset($this->items);
    }

    /**
     * @see http://php.net/iterator.valid
     * @return boolean
     */
    #[Pure] #[ReturnTypeWillChange]
    public function valid(): bool
    {
        return $this->key() !== null;
    }

    /**
     * @see http://php.net/iterator.key
     * @return int|string|null
     */
    #[ReturnTypeWillChange]
    public function key(): int|string|null
    {
        return key($this->items);
    }
}
