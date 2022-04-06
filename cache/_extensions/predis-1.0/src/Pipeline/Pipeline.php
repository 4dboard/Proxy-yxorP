<?php /* yxorP */

namespace Predis\Pipeline;

use Exception;
use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use Predis\AClientInterface;
use Predis\ClientContextInterface;
use Predis\ClientException;
use Predis\Command\CommandInterface;
use Predis\Connection\Aggregate\ReplicationInterface;
use Predis\Connection\ConnectionInterface;
use Predis\Response\ErrorInterface as ErrorResponseInterface;
use Predis\Response\ResponseInterface;
use Predis\Response\ServerException;
use SplQueue;

/**
 * @property array $responses
 * @property $running
 * @property SplQueue $pipeline
 * @property AClientInterface $client
 */
class Pipeline implements ClientContextInterface
{
    private AClientInterface $client;
    private SplQueue $pipeline;

    private array $responses = array();
    private bool $running = false;

    #[Pure] public function __construct(AClientInterface $client)
    {
        $this->client = $client;
        $this->pipeline = new SplQueue();
    }

    public function __call(string $method, array $arguments)
    {
        $command = $this->client->createCommand($method, $arguments);
        $this->recordCommand($command);

        return $this;
    }

    protected function recordCommand(CommandInterface $command): void
    {
        $this->pipeline->enqueue($command);
    }

    public function executeCommand(CommandInterface $command): Pipeline
    {
        $this->recordCommand($command);

        return $this;
    }

    /**
     * @throws ClientException
     * @throws Exception
     * @throws Exception
     */
    public function execute(mixed $callable = null): array
    {
        if ($callable && !is_callable($callable)) {
            throw new InvalidArgumentException('The argument must be a callable object.');
        }

        $exception = null;
        $this->setRunning(true);

        try {
            if ($callable) {
                $callable($this);
            }

            $this->flushPipeline();
        } catch (Exception $exception) {
            // NOOP
        }

        $this->setRunning(false);

        if ($exception) {
            throw $exception;
        }

        return $this->responses;
    }

    /**
     * @throws ClientException
     */
    private function setRunning($bool): void
    {
        if ($bool && $this->running) {
            throw new ClientException('The current pipeline context is already being executed.');
        }

        $this->running = $bool;
    }

    public function flushPipeline($send = true): Pipeline
    {
        if ($send && !$this->pipeline->isEmpty()) {
            try {
                $responses = $this->executePipeline($this->getConnection(), $this->pipeline);
            } catch (ServerException $e) {
            }
            $this->responses = array_merge($this->responses, $responses);
        } else {
            $this->pipeline = new SplQueue();
        }

        return $this;
    }

    /**
     * @throws ServerException
     */
    protected function executePipeline(ConnectionInterface $connection, SplQueue $commands): array
    {
        foreach ($commands as $command) {
            $connection->writeRequest($command);
        }

        $responses = array();
        $exceptions = $this->throwServerExceptions();

        while (!$commands->isEmpty()) {
            $command = $commands->dequeue();
            $response = $connection->readResponse($command);

            if (!$response instanceof ResponseInterface) {
                $responses[] = $command->parseResponse($response);
            } elseif ($response instanceof ErrorResponseInterface && $exceptions) {
                $this->exception($connection, $response);
            } else {
                $responses[] = $response;
            }
        }

        return $responses;
    }

    protected function throwServerExceptions(): bool
    {
        return (bool)$this->client->getOptions()->exceptions;
    }

    /**
     * @throws ServerException
     */
    protected function exception(ConnectionInterface $connection, ErrorResponseInterface $response): void
    {
        $connection->disconnect();
        $message = $response->getMessage();

        throw new ServerException($message);
    }

    protected function getConnection()
    {
        $connection = $this->getClient()->getConnection();

        if ($connection instanceof ReplicationInterface) {
            $connection->switchTo('master');
        }

        return $connection;
    }

    public function getClient(): AClientInterface
    {
        return $this->client;
    }
}
