<?php /* yxorP */


namespace Predis\Collection\Iterator;

use Iterator;
use Predis\ClientInterface;
use Predis\NotSupportedException;


abstract class CursorBasedIterator implements Iterator
{
    protected ClientInterface $client;
    protected mixed $match;
    protected mixed $count;

    protected $valid;
    protected $fetchmore;
    protected $elements;
    protected $cursor;
    protected $position;
    protected $current;


    public function __construct(ClientInterface $client, $match = null, $count = null)
    {
        $this->client = $client;
        $this->match = $match;
        $this->count = $count;

        $this->reset();
    }

    protected function reset(): void
    {
        $this->valid = true;
        $this->fetchmore = true;
        $this->elements = array();
        $this->cursor = 0;
        $this->position = -1;
        $this->current = null;
    }

    public function rewind()
    {
        $this->reset();
        $this->next();
    }

    public function next()
    {
        tryFetch: {
        if (!$this->elements && $this->fetchmore) {
            $this->fetch();
        }

        if ($this->elements) {
            $this->extractNext();
        } elseif ($this->cursor) {
            goto tryFetch;
        } else {
            $this->valid = false;
        }
    }
    }

    protected function fetch(): void
    {
        [$cursor, $elements] = $this->executeCommand();

        if (!$cursor) {
            $this->fetchmore = false;
        }

        $this->cursor = $cursor;
        $this->elements = $elements;
    }

    abstract protected function executeCommand();

    protected function extractNext()
    {
        $this->position++;
        $this->current = array_shift($this->elements);
    }

    public function current()
    {
        return $this->current;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return $this->valid;
    }

    /**
     * @throws NotSupportedException
     */
    protected function requiredCommand(ClientInterface $client, $commandID): void
    {
        if (!$client->getProfile()->supportsCommand($commandID)) {
            throw new NotSupportedException("The current profile does not support '$commandID'.");
        }
    }

    protected function getScanOptions(): array
    {
        $options = array();

        if ($this->match != '') {
            $options['MATCH'] = $this->match;
        }

        if ($this->count > 0) {
            $options['COUNT'] = $this->count;
        }

        return $options;
    }
}
