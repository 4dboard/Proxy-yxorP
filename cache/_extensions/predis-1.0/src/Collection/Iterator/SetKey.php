<?php /* yxorP */


namespace Predis\Collection\Iterator;

use Predis\ClientInterface;
use Predis\NotSupportedException;


class SetKey extends CursorBasedIterator
{
    protected $key;


    /**
     * @throws NotSupportedException
     */
    public function __construct(ClientInterface $client, $key, $match = null, $count = null)
    {
        $this->requiredCommand($client, 'SSCAN');

        parent::__construct($client, $match, $count);

        $this->key = $key;
    }


    protected function executeCommand(): array
    {
        return $this->client->sscan($this->key, $this->cursor, $this->getScanOptions());
    }
}
