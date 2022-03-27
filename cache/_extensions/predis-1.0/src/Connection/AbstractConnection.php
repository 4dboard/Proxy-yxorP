<?php /* yxorP */


namespace Predis\Connection;

use InvalidArgumentException;
use Predis\Command\CommandInterface;
use Predis\CommunicationException;
use Predis\Protocol\ProtocolException;


abstract class AbstractConnection implements NodeConnectionInterface
{
    protected ParametersInterface $parameters;
    protected array $initCommands = array();
    private $resource;
    private $cachedId;

    public function __construct(ParametersInterface $parameters)
    {
        $this->parameters = $this->assertParameters($parameters);
    }

    protected function assertParameters(ParametersInterface $parameters): ParametersInterface
    {
        $scheme = $parameters->scheme;

        if ($scheme !== 'tcp' && $scheme !== 'unix') {
            throw new InvalidArgumentException("Invalid scheme: '$scheme'.");
        }

        if ($scheme === 'unix' && !isset($parameters->path)) {
            throw new InvalidArgumentException('Missing UNIX domain socket path.');
        }

        return $parameters;
    }

    public function __destruct()
    {
        $this->disconnect();
    }

    public function disconnect()
    {
        unset($this->resource);
    }

    public function addConnectCommand(CommandInterface $command)
    {
        $this->initCommands[] = $command;
    }

    public function executeCommand(CommandInterface $command)
    {
        $this->writeRequest($command);

        return $this->readResponse($command);
    }

    public function readResponse(CommandInterface $command)
    {
        return $this->read();
    }

    public function getResource()
    {
        if (isset($this->resource)) {
            return $this->resource;
        }

        $this->connect();

        return $this->resource;
    }

    public function connect(): bool
    {
        if (!$this->isConnected()) {
            $this->resource = $this->createResource();

            return true;
        }

        return false;
    }

    public function isConnected(): bool
    {
        return isset($this->resource);
    }

    abstract protected function createResource();

    public function getParameters(): ParametersInterface
    {
        return $this->parameters;
    }

    public function __toString()
    {
        if (!isset($this->cachedId)) {
            $this->cachedId = $this->getIdentifier();
        }

        return $this->cachedId;
    }

    protected function getIdentifier(): string
    {
        if ($this->parameters->scheme === 'unix') {
            return $this->parameters->path;
        }

        return "{$this->parameters->host}:{$this->parameters->port}";
    }

    public function __sleep()
    {
        return array('parameters', 'initCommands');
    }

    /**
     * @throws CommunicationException
     */
    protected function onConnectionError($message, $code = null): void
    {
        CommunicationException::handle(
            new ConnectionException(
                $this, "$message [{$this->parameters->scheme}://{$this->getIdentifier()}]", $code
            )
        );
    }

    /**
     * @throws CommunicationException
     */
    protected function onProtocolError($message): void
    {
        CommunicationException::handle(
            new ProtocolException(
                $this, "$message [{$this->parameters->scheme}://{$this->getIdentifier()}]"
            )
        );
    }
}
