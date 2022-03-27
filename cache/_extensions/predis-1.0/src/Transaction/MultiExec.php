<?php /* yxorP */


namespace Predis\Transaction;

use Exception;
use InvalidArgumentException;
use Predis\ClientContextInterface;
use Predis\ClientException;
use Predis\ClientInterface;
use Predis\Command\CommandInterface;
use Predis\CommunicationException;
use Predis\Connection\AggregateConnectionInterface;
use Predis\NotSupportedException;
use Predis\Protocol\ProtocolException;
use Predis\Response\ErrorInterface as ErrorResponseInterface;
use Predis\Response\ServerException;
use Predis\Response\Status as StatusResponse;
use SplQueue;


class MultiExec implements ClientContextInterface
{
    protected ClientInterface $client;
    protected $commands;
    protected bool $exceptions = true;
    protected int $attempts = 0;
    protected array $watchKeys = array();
    protected bool $modeCAS = false;
    private MultiExecState $state;

    /**
     * @throws NotSupportedException
     */
    public function __construct(ClientInterface $client, array $options = null)
    {
        $this->assertClient($client);

        $this->client = $client;
        $this->state = new MultiExecState();

        $this->configure($client, $options ?: array());
        $this->reset();
    }


    /**
     * @throws NotSupportedException
     */
    private function assertClient(ClientInterface $client): void
    {
        if ($client->getConnection() instanceof AggregateConnectionInterface) {
            throw new NotSupportedException(
                'Cannot initialize a MULTI/EXEC transaction over aggregate connections.'
            );
        }

        if (!$client->getProfile()->supportsCommands(array('MULTI', 'EXEC', 'DISCARD'))) {
            throw new NotSupportedException(
                'The current profile does not support MULTI, EXEC and DISCARD.'
            );
        }
    }


    protected function configure(ClientInterface $client, array $options): void
    {
        if (isset($options['exceptions'])) {
            $this->exceptions = (bool)$options['exceptions'];
        } else {
            $this->exceptions = $client->getOptions()->exceptions;
        }

        if (isset($options['cas'])) {
            $this->modeCAS = (bool)$options['cas'];
        }

        if (isset($options['watch']) && $keys = $options['watch']) {
            $this->watchKeys = $keys;
        }

        if (isset($options['retry'])) {
            $this->attempts = (int)$options['retry'];
        }
    }


    protected function reset(): void
    {
        $this->state->reset();
        $this->commands = new SplQueue();
    }

    /**
     * @throws NotSupportedException
     * @throws ServerException
     * @throws ClientException
     */
    public function multi(): MultiExec|static
    {
        if ($this->state->check(MultiExecState::INITIALIZED | MultiExecState::CAS)) {
            $this->state->unflag(MultiExecState::CAS);
            $this->call('MULTI');
        } else {
            $this->initialize();
        }

        return $this;
    }

    /**
     * @throws ServerException
     */
    protected function call($commandID, array $arguments = array())
    {
        $response = $this->client->executeCommand(
            $this->client->createCommand($commandID, $arguments)
        );

        if ($response instanceof ErrorResponseInterface) {
            throw new ServerException($response->getMessage());
        }

        return $response;
    }

    /**
     * @throws NotSupportedException
     * @throws ServerException
     * @throws ClientException
     */
    protected function initialize(): void
    {
        if ($this->state->isInitialized()) {
            return;
        }

        if ($this->modeCAS) {
            $this->state->flag(MultiExecState::CAS);
        }

        if ($this->watchKeys) {
            $this->watch($this->watchKeys);
        }

        $cas = $this->state->isCAS();
        $discarded = $this->state->isDiscarded();

        if (!$cas || ($discarded)) {
            $this->call('MULTI');

            if ($discarded) {
                $this->state->unflag(MultiExecState::CAS);
            }
        }

        $this->state->unflag(MultiExecState::DISCARDED);
        $this->state->flag(MultiExecState::INITIALIZED);
    }

    /**
     * @throws NotSupportedException
     * @throws ClientException
     * @throws ServerException
     */
    public function watch($keys)
    {
        if (!$this->client->getProfile()->supportsCommand('WATCH')) {
            throw new NotSupportedException('WATCH is not supported by the current profile.');
        }

        if ($this->state->isWatchAllowed()) {
            throw new ClientException('Sending WATCH after MULTI is not allowed.');
        }

        $response = $this->call('WATCH', is_array($keys) ? $keys : array($keys));
        $this->state->flag(MultiExecState::WATCH);

        return $response;
    }

    /**
     * @throws AbortedMultiExecException
     * @throws NotSupportedException
     * @throws CommunicationException
     */
    public function unwatch(): MultiExec|static
    {
        if (!$this->client->getProfile()->supportsCommand('UNWATCH')) {
            throw new NotSupportedException(
                'UNWATCH is not supported by the current profile.'
            );
        }

        $this->state->unflag(MultiExecState::WATCH);
        $this->__call('UNWATCH', array());

        return $this;
    }

    /**
     * @throws AbortedMultiExecException
     * @throws CommunicationException
     */
    public function __call(string $method, array $arguments)
    {
        return $this->executeCommand(
            $this->client->createCommand($method, $arguments)
        );
    }

    /**
     * @throws AbortedMultiExecException
     * @throws CommunicationException
     */
    public function executeCommand(CommandInterface $command)
    {
        try {
            $this->initialize();
        } catch (ClientException $e) {
        } catch (NotSupportedException $e) {
        } catch (ServerException $e) {
        }

        if ($this->state->isCAS()) {
            return $this->client->executeCommand($command);
        }

        $response = $this->client->getConnection()->executeCommand($command);

        if ($response instanceof StatusResponse && $response == 'QUEUED') {
            $this->commands->enqueue($command);
        } elseif ($response instanceof ErrorResponseInterface) {
            throw new AbortedMultiExecException($this, $response->getMessage());
        } else {
            $this->onProtocolError('The server did not return a +QUEUED status response.');
        }

        return $this;
    }

    /**
     * @throws CommunicationException
     */
    private function onProtocolError($message): void
    {
        // Since a MULTI/EXEC block cannot be initialized when using aggregate
        // connections we can safely assume that Predis\Client::getConnection()
        // will return a Predis\Connection\NodeConnectionInterface instance.
        CommunicationException::handle(new ProtocolException(
            $this->client->getConnection(), $message
        ));
    }

    /**
     * @throws CommunicationException
     * @throws ClientException
     * @throws AbortedMultiExecException
     * @throws ServerException
     */
    public function exec(): MultiExec|array|null
    {
        return $this->execute();
    }

    /**
     * @throws CommunicationException
     * @throws ClientException
     * @throws AbortedMultiExecException
     * @throws ServerException
     */
    public function execute(mixed $callable = null): ?array
    {
        $this->checkBeforeExecution($callable);

        $execResponse = null;
        $attempts = $this->attempts;

        do {
            if ($callable) {
                $this->executeTransactionBlock($callable);
            }

            if ($this->commands->isEmpty()) {
                if ($this->state->isWatching()) {
                    $this->discard();
                }

                return null;
            }

            $execResponse = $this->call('EXEC');

            if ($execResponse === null) {
                if ($attempts === 0) {
                    throw new AbortedMultiExecException(
                        $this, 'The current transaction has been aborted by the server.'
                    );
                }

                $this->reset();

                continue;
            }

            break;
        } while ($attempts-- > 0);

        $response = array();
        $commands = $this->commands;
        $size = count($execResponse);

        if ($size !== count($commands)) {
            $this->onProtocolError('EXEC returned an unexpected number of response items.');
        }

        for ($i = 0; $i < $size; $i++) {
            $cmdResponse = $execResponse[$i];

            if ($cmdResponse instanceof ErrorResponseInterface && $this->exceptions) {
                throw new ServerException($cmdResponse->getMessage());
            }

            $response[$i] = $commands->dequeue()->parseResponse($cmdResponse);
        }

        return $response;
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    private function checkBeforeExecution($callable): void
    {
        if ($this->state->isExecuting()) {
            throw new ClientException(
                'Cannot invoke "execute" or "exec" inside an active transaction context.'
            );
        }

        if ($callable) {
            if (!is_callable($callable)) {
                throw new InvalidArgumentException('The argument must be a callable object.');
            }

            if (!$this->commands->isEmpty()) {
                $this->discard();

                throw new ClientException(
                    'Cannot execute a transaction block after using fluent interface.'
                );
            }
        } elseif ($this->attempts) {
            $this->discard();

            throw new ClientException(
                'Automatic retries are supported only when a callable block is provided.'
            );
        }
    }

    /**
     * @throws ServerException
     */
    public function discard(): MultiExec|static
    {
        if ($this->state->isInitialized()) {
            $this->call($this->state->isCAS() ? 'UNWATCH' : 'DISCARD');

            $this->reset();
            $this->state->flag(MultiExecState::DISCARDED);
        }

        return $this;
    }

    /**
     * @throws CommunicationException
     * @throws ServerException
     */
    protected function executeTransactionBlock($callable): void
    {
        $exception = null;
        $this->state->flag(MultiExecState::INSIDEBLOCK);

        try {
            $callable($this);
        } catch (CommunicationException|ServerException $exception) {
            // NOOP
        } catch (Exception $exception) {
            $this->discard();
        }

        $this->state->unflag(MultiExecState::INSIDEBLOCK);

        if ($exception) {
            throw $exception;
        }
    }
}
