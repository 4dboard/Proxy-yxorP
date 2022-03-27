<?php /* yxorP */


namespace Predis\Pipeline;

use Predis\Connection\ConnectionInterface;
use SplQueue;


class FireAndForget extends Pipeline
{

    protected function executePipeline(ConnectionInterface $connection, SplQueue $commands): array
    {
        while (!$commands->isEmpty()) {
            $connection->writeRequest($commands->dequeue());
        }

        $connection->disconnect();

        return array();
    }
}
