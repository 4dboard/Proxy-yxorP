<?php /* yxorP */

/* yxorP */

namespace Predis\Connection;

use InvalidArgumentException;
use Predis\Command\CommandInterface;
use Predis\NotSupportedException;
use Predis\Protocol\ProtocolException;
use Predis\Response\Error as ErrorResponse;
use Predis\Response\Status as StatusResponse;


class WebdisConnection implements NodeConnectionInterface
{
    private ParametersInterface $parameters;
    private $resource;
    private mixed $reader;

    /**
     * @throws NotSupportedException
     */
    public function __construct(ParametersInterface $parameters)
    {
        $this->assertExtensions();

        if ($parameters->scheme !== 'http') {
            throw new InvalidArgumentException("Invalid scheme: '$parameters->scheme'.");
        }

        $this->parameters = $parameters;

        $this->resource = $this->createCurl();
        $this->reader = $this->createReader();
    }

    /**
     * @throws NotSupportedException
     */
    private function assertExtensions(): void
    {
        if (!extension_loaded('curl')) {
            throw new NotSupportedException(
                'The "curl" extension is required by this connection backend.'
            );
        }

        if (!extension_loaded('phpiredis')) {
            throw new NotSupportedException(
                'The "phpiredis" extension is required by this connection backend.'
            );
        }
    }

    private function createCurl()
    {
        $parameters = $this->getParameters();

        $options = array(
            CURLOPT_FAILONERROR => true,
            CURLOPT_CONNECTTIMEOUT_MS => $parameters->timeout * 1000,
            CURLOPT_URL => "$parameters->scheme://$parameters->host:$parameters->port",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POST => true,
            CURLOPT_WRITEFUNCTION => array($this, 'feedReader'),
        );

        if (isset($parameters->user, $parameters->pass)) {
            $options[CURLOPT_USERPWD] = "$parameters->user:$parameters->pass";
        }

        curl_setopt_array($resource = curl_init(), $options);

        return $resource;
    }

    public function getParameters(): ParametersInterface
    {
        return $this->parameters;
    }

    private function createReader(): mixed
    {
        $reader = phpiredis_reader_create();

        phpiredis_reader_set_status_handler($reader, $this->getStatusHandler());
        phpiredis_reader_set_error_handler($reader, $this->getErrorHandler());

        return $reader;
    }

    protected function getStatusHandler(): callable
    {
        return static function ($payload) {
            return StatusResponse::get($payload);
        };
    }

    protected function getErrorHandler(): callable
    {
        return static function ($payload) {
            return new ErrorResponse($payload);
        };
    }

    public function __destruct()
    {
        curl_close($this->resource);
        phpiredis_reader_destroy($this->reader);
    }

    public function connect()
    {
        // NOOP
    }

    public function disconnect()
    {
        // NOOP
    }

    public function isConnected(): bool
    {
        return true;
    }

    /**
     * @throws NotSupportedException
     */
    public function writeRequest(CommandInterface $command)
    {
        $this->throwNotSupportedException(__FUNCTION__);
    }

    /**
     * @throws NotSupportedException
     */
    private function throwNotSupportedException($method): void
    {
        $class = __CLASS__;
        throw new NotSupportedException("The method $class::$method() is not supported.");
    }

    /**
     * @throws NotSupportedException
     */
    public function readResponse(CommandInterface $command)
    {
        $this->throwNotSupportedException(__FUNCTION__);
    }

    /**
     * @throws ConnectionException
     * @throws NotSupportedException
     * @throws ProtocolException
     */
    public function executeCommand(CommandInterface $command)
    {
        $resource = $this->resource;
        $commandId = $this->getCommandId($command);

        if ($arguments = $command->getArguments()) {
            $arguments = implode('/', array_map('urlencode', $arguments));
            $serializedCommand = "$commandId/$arguments.raw";
        } else {
            $serializedCommand = "$commandId.raw";
        }

        curl_setopt($resource, CURLOPT_POSTFIELDS, $serializedCommand);

        if (curl_exec($resource) === false) {
            $error = curl_error($resource);
            $errno = curl_errno($resource);

            throw new ConnectionException($this, trim($error), $errno);
        }

        if (phpiredis_reader_get_state($this->reader) !== PHPIREDIS_READER_STATE_COMPLETE) {
            throw new ProtocolException($this, phpiredis_reader_get_error($this->reader));
        }

        return phpiredis_reader_get_reply($this->reader);
    }

    /**
     * @throws NotSupportedException
     */
    protected function getCommandId(CommandInterface $command)
    {
        switch ($commandID = $command->getId()) {
            case 'AUTH':
            case 'SELECT':
            case 'MULTI':
            case 'EXEC':
            case 'WATCH':
            case 'UNWATCH':
            case 'DISCARD':
            case 'MONITOR':
                throw new NotSupportedException("Command '$commandID' is not allowed by Webdis.");

            default:
                return $commandID;
        }
    }

    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @throws NotSupportedException
     */
    public function addConnectCommand(CommandInterface $command)
    {
        $this->throwNotSupportedException(__FUNCTION__);
    }

    /**
     * @throws NotSupportedException
     */
    public function read()
    {
        $this->throwNotSupportedException(__FUNCTION__);
    }

    public function __toString()
    {
        return "{$this->parameters->host}:{$this->parameters->port}";
    }

    public function __sleep()
    {
        return array('parameters');
    }

    /**
     * @throws NotSupportedException
     */
    public function __wakeup()
    {
        $this->assertExtensions();

        $this->resource = $this->createCurl();
        $this->reader = $this->createReader();
    }

    protected function feedReader($buffer): int
    {
        phpiredis_reader_feed($this->reader, $buffer);

        return strlen($buffer);
    }
}
