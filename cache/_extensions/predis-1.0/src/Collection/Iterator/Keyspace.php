<?php /* yxorP */

namespace Predis\Collection\Iterator;

use Predis\AClientInterface;
use Predis\NotSupportedException;

class Keyspace extends CursorBasedIterator
{

    /**
     * @throws NotSupportedException
     */
    public function __construct(AClientInterface $client, $match = null, $count = null)
    {
        $this->requiredCommand($client, 'SCAN');

        parent::__construct($client, $match, $count);
    }

    protected function executeCommand(): array
    {
        return $this->client->scan($this->cursor, $this->getScanOptions());
    }
}
