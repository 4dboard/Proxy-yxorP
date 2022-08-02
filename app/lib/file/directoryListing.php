<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use ArrayIterator;
use Generator;
use IteratorAggregate;
use Traversable;

class directoryListing implements IteratorAggregate
{
    private $listing;

    public function __construct(iterable $listing)
    {
        $this->listing = $listing;
    }

    public function filter(callable $filter): directoryListing
    {
        $generator = (static function (iterable $listing) use ($filter): Generator {
            foreach ($listing as $item) {
                if ($filter($item)) {
                    yield $item;
                }
            }
        })($this->listing);
        return new directoryListing($generator);
    }

    public function map(callable $mapper): directoryListing
    {
        $generator = (static function (iterable $listing) use ($mapper): Generator {
            foreach ($listing as $item) {
                yield $mapper($item);
            }
        })($this->listing);
        return new directoryListing($generator);
    }

    public function sortByPath(): directoryListing
    {
        $listing = $this->toArray();
        usort($listing, function (storageAttributesInterface $a, storageAttributesInterface $b) {
            return $a->path() <=> $b->path();
        });
        return new directoryListing($listing);
    }

    public function toArray(): array
    {
        return $this->listing instanceof Traversable ? iterator_to_array($this->listing, false) : (array)$this->listing;
    }

    public function getIterator(): Traversable
    {
        return $this->listing instanceof Traversable ? $this->listing : new ArrayIterator($this->listing);
    }
}
