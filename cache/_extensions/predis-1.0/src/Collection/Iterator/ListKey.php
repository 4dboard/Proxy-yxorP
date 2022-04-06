<?php /* yxorP */

namespace Predis\Collection\Iterator;

use InvalidArgumentException;
use Iterator;
use Predis\AClientInterface;
use Predis\NotSupportedException;

/**
 * @property mixed|null $current
 * @property array $elements
 * @property bool $fetchmore
 * @property false $valid
 * @property int $position
 * @property mixed $count
 * @property $key
 * @property AClientInterface $client
 */
class ListKey implements Iterator
{
    protected AClientInterface $client;
    protected mixed $count;
    protected $key;

    protected $valid;
    protected $fetchmore;
    protected $elements;
    protected $position;
    protected $current;

    /**
     * @throws NotSupportedException
     */
    public function __construct(AClientInterface $client, $key, $count = 10)
    {
        $this->requiredCommand($client, 'LRANGE');

        if ((false === $count = filter_var($count, FILTER_VALIDATE_INT)) || $count < 0) {
            throw new InvalidArgumentException('The $count argument must be a positive integer.');
        }

        $this->client = $client;
        $this->key = $key;
        $this->count = $count;

        $this->reset();
    }

    /**
     * @throws NotSupportedException
     */
    protected function requiredCommand(AClientInterface $client, $commandID): void
    {
        if (!$client->getProfile()->supportsCommand($commandID)) {
            throw new NotSupportedException("The current profile does not support '$commandID'.");
        }
    }

    protected function reset(): void
    {
        $this->valid = true;
        $this->fetchmore = true;
        $this->elements = array();
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
        if (!$this->elements && $this->fetchmore) {
            $this->fetch();
        }

        if ($this->elements) {
            $this->extractNext();
        } else {
            $this->valid = false;
        }
    }

    protected function fetch(): void
    {
        $elements = $this->executeCommand();

        if (count($elements) < $this->count) {
            $this->fetchmore = false;
        }

        $this->elements = $elements;
    }

    protected function executeCommand(): array
    {
        return $this->client->lrange($this->key, $this->position + 1, $this->position + $this->count);
    }

    protected function extractNext(): void
    {
        $this->position++;
        $this->current = array_shift($this->elements);
    }

    public function current()
    {
        return null;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return $this->valid;
    }
}
