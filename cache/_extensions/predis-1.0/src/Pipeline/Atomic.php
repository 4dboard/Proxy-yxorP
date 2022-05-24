<?php /* yxorP */

namespace Predis\Pipeline;

use Predis\AClientInterface;
use Predis\ClientException;
use Predis\Connection\ConnectionInterface;
use Predis\Connection\NodeConnectionInterface;
use Predis\Response\ErrorInterface as ErrorResponseInterface;
use Predis\Response\ResponseInterface;
use Predis\Response\ServerException;
use SplQueue;

class Atomic extends Pipeline
{

    /**
     * @throws ClientException
     */
    public function __construct(AClientInterface $client)
    {
        if (!$client->getProfile()->supportsCommands(array('multi', 'exec', 'discard'))) {
            throw new ClientException(
                "The current profile does not support 'MULTI', 'EXEC' and 'DISCARD'."
            );
        }

        parent::__construct($client);
    }

    /**
     * @throws ClientException
     */
    protected function getConnection()
    {
        $connection = $this->getClient()->getConnection();

        if (!$connection instanceof NodeConnectionInterface) {
            $class = __CLASS__;

            throw new ClientException("The class '$class' does not support aggregate connections.");
        }

        return $connection;
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    protected function executePipeline(ConnectionInterface $connection, SplQueue $commands): array
    {
        $profile = $this->getClient()->getProfile();
        $connection->executeCommand($profile->createCommand('multi'));

        foreach ($commands as $command) {
            $connection->writeRequest($command);
        }

        foreach ($commands as $command) {
            $response = $connection->readResponse($command);

            if ($response instanceof ErrorResponseInterface) {
                $connection->executeCommand($profile->createCommand('discard'));
                throw new ServerException($response->getMessage());
            }
        }

        $executed = $connection->executeCommand($profile->createCommand('exec'));

        if (!isset($executed)) {
            // TODO: should be throwing a more appropriate exception.
            throw new ClientException(
                'The underlying transaction has been aborted by the server.'
            );
        }

        if (count($executed) !== count($commands)) {
            $expected = count($commands);
            $received = count($executed);

            throw new ClientException(
                "Invalid number of responses [expected $expected, received $received]."
            );
        }

        $responses = array();
        $sizeOfPipe = count($commands);
        $exceptions = $this->throwServerExceptions();

        for ($i = 0; $i < $sizeOfPipe; $i++) {
            $command = $commands->dequeue();
            $response = $executed[$i];

            if (!$response instanceof ResponseInterface) {
                $responses[] = $command->parseResponse($response);
            } elseif ($response instanceof ErrorResponseInterface && $exceptions) {
                $this->exception($connection, $response);
            } else {
                $responses[] = $response;
            }

            unset($executed[$i]);
        }

        return $responses;
    }
}
