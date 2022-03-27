<?php /* yxorP */


namespace Predis\Pipeline;

use Predis\CommunicationException;
use Predis\Connection\Aggregate\ClusterInterface;
use Predis\Connection\ConnectionInterface;
use Predis\Connection\NodeConnectionInterface;
use Predis\NotSupportedException;
use SplQueue;


class ConnectionErrorProof extends Pipeline
{

    protected function getConnection()
    {
        return $this->getClient()->getConnection();
    }


    /**
     * @throws NotSupportedException
     */
    protected function executePipeline(ConnectionInterface $connection, SplQueue $commands): array
    {
        if ($connection instanceof NodeConnectionInterface) {
            return $this->executeSingleNode($connection, $commands);
        }

        if ($connection instanceof ClusterInterface) {
            return $this->executeCluster($connection, $commands);
        }

        $class = get_class($connection);

        throw new NotSupportedException("The connection class '$class' is not supported.");
    }


    protected function executeSingleNode(NodeConnectionInterface $connection, SplQueue $commands): array
    {
        $responses = array();
        $sizeOfPipe = count($commands);

        foreach ($commands as $command) {
            $connection->writeRequest($command);
        }

        for ($i = 0; $i < $sizeOfPipe; $i++) {
            $command = $commands->dequeue();

            $responses[$i] = $connection->readResponse($command);
        }

        return $responses;
    }


    protected function executeCluster(ClusterInterface $connection, SplQueue $commands): array
    {
        $responses = array();
        $sizeOfPipe = count($commands);
        $exceptions = array();

        foreach ($commands as $command) {
            $cmdConnection = $connection->getConnection($command);

            if (isset($exceptions[spl_object_hash($cmdConnection)])) {
                continue;
            }

            try {
                $cmdConnection->writeRequest($command);
            } catch (CommunicationException $exception) {
                $exceptions[spl_object_hash($cmdConnection)] = $exception;
            }
        }

        for ($i = 0; $i < $sizeOfPipe; $i++) {
            $command = $commands->dequeue();

            $cmdConnection = $connection->getConnection($command);
            $connectionHash = spl_object_hash($cmdConnection);

            if (isset($exceptions[$connectionHash])) {
                $responses[$i] = $exceptions[$connectionHash];
                continue;
            }

            try {
                $responses[$i] = $cmdConnection->readResponse($command);
            } catch (CommunicationException $exception) {
                $responses[$i] = $exception;
                $exceptions[$connectionHash] = $exception;
            }
        }

        return $responses;
    }
}
