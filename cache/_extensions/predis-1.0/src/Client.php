<?php /* yxorP */

/* yxorP */

namespace Predis;

use InvalidArgumentException;
use Predis\Command\CommandInterface;
use Predis\Command\RawCommand;
use Predis\Command\ScriptCommand;
use Predis\Configuration\Options;
use Predis\Configuration\OptionsInterface;
use Predis\Connection\AggregateConnectionInterface;
use Predis\Connection\ConnectionInterface;
use Predis\Connection\ParametersInterface;
use Predis\Monitor\Consumer as MonitorConsumer;
use Predis\Pipeline\Atomic;
use Predis\Pipeline\FireAndForget;
use Predis\Pipeline\Pipeline;
use Predis\PubSub\Consumer as PubSubConsumer;
use Predis\Response\ErrorInterface as ErrorResponseInterface;
use Predis\Response\ResponseInterface;
use Predis\Response\ServerException;
use Predis\Transaction\MultiExec as MultiExecTransaction;
use UnexpectedValueException;

/**
 * @property mixed|void|null $profile
 * @property mixed|ConnectionInterface|void|null $connection
 * @property Options|OptionsInterface $options
 */
class Client implements AClientInterface
{
    public const VERSION = '1.0.2-dev';

    protected $connection;
    protected Options|OptionsInterface $options;
    private $profile;

    public function __construct($parameters = null, $options = null)
    {
        $this->options = $this->createOptions($options ?: array());
        $this->connection = $this->createConnection($parameters ?: array());
        $this->profile = $this->options->profile;
    }

    protected function createOptions($options): OptionsInterface|Options
    {
        if (is_array($options)) {
            return new Options($options);
        }

        if ($options instanceof OptionsInterface) {
            return $options;
        }

        throw new InvalidArgumentException("Invalid type for client options.");
    }

    protected function createConnection($parameters)
    {
        if ($parameters instanceof ConnectionInterface) {
            return $parameters;
        }

        if ($parameters instanceof ParametersInterface || is_string($parameters)) {
            return $this->options->connections->create($parameters);
        }

        if (is_array($parameters)) {
            if (!isset($parameters[0])) {
                return $this->options->connections->create($parameters);
            }

            $options = $this->options;

            if ($options->defined('aggregate')) {
                $initializer = $this->getConnectionInitializerWrapper($options->aggregate);
                $connection = $initializer($parameters, $options);
            } else {
                if ($options->defined('replication') && $replication = $options->replication) {
                    $connection = $replication;
                } else {
                    $connection = $options->cluster;
                }

                $options->connections->aggregate($connection, $parameters);
            }

            return $connection;
        }

        if (is_callable($parameters)) {
            $initializer = $this->getConnectionInitializerWrapper($parameters);
            return $initializer($this->options);
        }

        throw new InvalidArgumentException('Invalid type for connection parameters.');
    }

    protected function getConnectionInitializerWrapper($callable): callable
    {
        return static function () use ($callable) {
            $connection = call_user_func_array($callable, func_get_args());

            if (!$connection instanceof ConnectionInterface) {
                throw new UnexpectedValueException(
                    'The callable connection initializer returned an invalid type.'
                );
            }

            return $connection;
        };
    }

    public function getProfile()
    {
        return $this->profile;
    }

    public function getOptions(): OptionsInterface|Options
    {
        return $this->options;
    }

    /**
     * @throws NotSupportedException
     */
    public function getClientFor($connectionID): Client
    {
        if (!$connection = $this->getConnectionById($connectionID)) {
            throw new InvalidArgumentException("Invalid connection ID: $connectionID.");
        }

        return new static($connection, $this->options);
    }

    /**
     * @throws NotSupportedException
     */
    public function getConnectionById($connectionID)
    {
        if (!$this->connection instanceof AggregateConnectionInterface) {
            throw new NotSupportedException(
                'Retrieving connections by ID is supported only by aggregate connections.'
            );
        }

        return $this->connection->getConnectionById($connectionID);
    }

    public function connect()
    {
        $this->connection->connect();
    }

    public function quit(): void
    {
        $this->disconnect();
    }

    public function disconnect()
    {
        $this->connection->disconnect();
    }

    public function isConnected()
    {
        return $this->connection->isConnected();
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function executeRaw(array $arguments, &$error = null): string
    {
        $error = false;

        $response = $this->connection->executeCommand(
            new RawCommand($arguments)
        );

        if ($response instanceof ResponseInterface) {
            if ($response instanceof ErrorResponseInterface) {
                $error = true;
            }

            return (string)$response;
        }

        return $response;
    }

    /* yxorP */

    /**
     * @throws ServerException
     */
    public function executeCommand(CommandInterface $command): ResponseInterface
    {
        $response = $this->connection->executeCommand($command);

        if ($response instanceof ResponseInterface) {
            if ($response instanceof ErrorResponseInterface) {
                $response = $this->onErrorResponse($command, $response);
            }

            return $response;
        }

        return $command->parseResponse($response);
    }

    /**
     * @throws ServerException
     */
    protected function onErrorResponse(CommandInterface $command, ErrorResponseInterface $response): ResponseInterface
    {
        if ($command instanceof ScriptCommand && $response->getErrorType() === 'NOSCRIPT') {
            $eval = $this->createCommand('EVAL');
            $eval->setRawArguments($command->getEvalArguments());

            return $this->executeCommand($eval);
        }

        if ($this->options->exceptions) {
            throw new ServerException($response->getMessage());
        }

        return $response;
    }

    public function createCommand(string $method, array $arguments = array()): CommandInterface
    {
        return $this->profile->createCommand($method, $arguments);
    }

    public function __call(string $method, array $arguments)
    {
        return $this->executeCommand(
            $this->createCommand($method, $arguments)
        );
    }

    public function pipeline()
    {
        return $this->sharedContextFactory('createPipeline', func_get_args());
    }

    private function sharedContextFactory($initializer, $argv = null)
    {
        switch (count($argv)) {
            case 0:
                return $this->$initializer();

            case 1:
                return is_array($argv[0])
                    ? $this->$initializer($argv[0])
                    : $this->$initializer(null, $argv[0]);

            case 2:
                [$arg0, $arg1] = $argv;

                return $this->$initializer($arg0, $arg1);

            default:
                return $this->$initializer($this, $argv);
        }
    }

    public function transaction()
    {
        return $this->sharedContextFactory('createTransaction', func_get_args());
    }

    public function pubSubLoop()
    {
        return $this->sharedContextFactory('createPubSub', func_get_args());
    }

    public function monitor(): MonitorConsumer
    {
        return new MonitorConsumer($this);
    }

    /**
     * @throws ClientException
     */
    protected function createPipeline(array $options = null, $callable = null): Pipeline|FireAndForget|array|Atomic
    {
        if (isset($options['atomic']) && $options['atomic']) {
            $class = Atomic::class;
        } elseif (isset($options['fire-and-forget']) && $options['fire-and-forget']) {
            $class = FireAndForget::class;
        } else {
            $class = Pipeline::class;
        }
        $pipeline = new $class($this);

        if (isset($callable)) {
            return $pipeline->execute($callable);
        }

        return $pipeline;
    }

    /**
     * @param array|null $options
     * @param null $callable
     * @return MultiExecTransaction|array|null
     * @throws NotSupportedException
     */
    protected function createTransaction(array $options = null, $callable = null): MultiExecTransaction|array|null
    {
        $transaction = new MultiExecTransaction($this, $options);

        if (isset($callable)) {
            try {
                return $transaction->execute($callable);
            } catch (ClientException|Transaction\AbortedMultiExecException|ServerException|CommunicationException $e) {
            }
        }

        return $transaction;
    }

    /**
     * @throws NotSupportedException
     */
    protected function createPubSub(array $options = null, $callable = null): \PubSubConsumer
    {
        $pubsub = new PubSubConsumer($this, $options);

        if (!isset($callable)) {
            return $pubsub;
        }

        foreach ($pubsub as $message) {
            if ($callable($pubsub, $message) === false) {
                $pubsub->stop();
            }
        }
    }
}
