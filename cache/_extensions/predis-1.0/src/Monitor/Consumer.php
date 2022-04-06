<?php /* yxorP */

namespace Predis\Monitor;

use Iterator;
use Predis\AClientInterface;
use Predis\Connection\AggregateConnectionInterface;
use Predis\NotSupportedException;

/**
 * @property $position
 * @property bool $valid
 * @property AClientInterface $client
 */
class Consumer implements Iterator
{
    private AClientInterface $client;
    private $valid;
    private $position;

    /**
     * @throws NotSupportedException
     */
    public function __construct(AClientInterface $client)
    {
        $this->assertClient($client);

        $this->client = $client;

        $this->start();
    }

    /**
     * @throws NotSupportedException
     */
    private function assertClient(AClientInterface $client): void
    {
        if ($client->getConnection() instanceof AggregateConnectionInterface) {
            throw new NotSupportedException(
                'Cannot initialize a monitor consumer over aggregate connections.'
            );
        }

        if ($client->getProfile()->supportsCommand('MONITOR') === false) {
            throw new NotSupportedException("The current profile does not support 'MONITOR'.");
        }
    }

    protected function start(): void
    {
        $this->client->executeCommand(
            $this->client->createCommand('MONITOR')
        );
        $this->valid = true;
    }

    public function __destruct()
    {
        $this->stop();
    }

    public function stop(): void
    {
        $this->client->disconnect();
        $this->valid = false;
    }

    public function rewind()
    {

    }

    public function current(): object
    {
        return $this->getValue();
    }

    private function getValue(): object
    {
        $database = 0;
        $client = null;
        $event = $this->client->getConnection()->read();

        $callback = static function ($matches) use (&$database, &$client) {
            if (2 === $count = count($matches)) {

                $database = (int)$matches[1];
            }

            if (4 === $count) {

                $database = (int)$matches[2];
                $client = $matches[3];
            }

            return ' ';
        };

        $event = preg_replace_callback('/ \(db (\d+)\) | \[(\d+) (.*?)] /', $callback, $event, 1);
        @list($timestamp, $command, $arguments) = explode(' ', $event, 3);

        return (object)array(
            'timestamp' => (float)$timestamp,
            'database' => $database,
            'client' => $client,
            'command' => substr($command, 1, -1),
            'arguments' => $arguments,
        );
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position++;
    }

    public function valid(): bool
    {
        return $this->valid;
    }
}
