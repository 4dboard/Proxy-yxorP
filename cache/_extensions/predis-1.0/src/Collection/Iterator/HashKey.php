<?php /* yxorP */

namespace Predis\Collection\Iterator;

use Predis\AClientInterface;
use Predis\NotSupportedException;

/**
 * @property mixed|null $current
 * @property int|string|null $position
 * @property $key
 */
class HashKey extends CursorBasedIterator
{
    protected $key;

    /**
     * @throws NotSupportedException
     */
    public function __construct(AClientInterface $client, $key, $match = null, $count = null)
    {
        $this->requiredCommand($client, 'HSCAN');

        parent::__construct($client, $match, $count);

        $this->key = $key;
    }

    protected function executeCommand(): array
    {
        return $this->client->hscan($this->key, $this->cursor, $this->getScanOptions());
    }

    protected function extractNext()
    {
        $this->position = key($this->elements);
        $this->current = array_shift($this->elements);
    }
}
