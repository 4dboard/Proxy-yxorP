<?php /* yxorP */


namespace Predis\Connection;

use Predis\Command\CommandInterface;
use Predis\CommunicationException;
use Predis\NotSupportedException;
use Predis\Response\Error as ErrorResponse;
use Predis\Response\Status as StatusResponse;


class PhpiredisSocketConnection extends AbstractConnection
{
    private $reader;


    /**
     * @throws NotSupportedException
     */
    public function __construct(ParametersInterface $parameters)
    {
        $this->assertExtensions();

        parent::__construct($parameters);

        $this->reader = $this->createReader();
    }

    /**
     * @throws NotSupportedException
     */
    protected function assertExtensions(): void
    {
        if (!extension_loaded('sockets')) {
            throw new NotSupportedException(
                'The "sockets" extension is required by this connection backend.'
            );
        }

        if (!extension_loaded('phpiredis')) {
            throw new NotSupportedException(
                'The "phpiredis" extension is required by this connection backend.'
            );
        }
    }

    private function createReader()
    {
        $reader = phpiredis_reader_create();

        phpiredis_reader_set_status_handler($reader, $this->getStatusHandler());
        phpiredis_reader_set_error_handler($reader, $this->getErrorHandler());

        return $reader;
    }

    private function getStatusHandler(): callable
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
        phpiredis_reader_destroy($this->reader);

        parent::__destruct();
    }

    public function connect()
    {
        if (parent::connect()) {
            $this->connectWithTimeout($this->parameters);

            if ($this->initCommands) {
                foreach ($this->initCommands as $command) {
                    $this->executeCommand($command);
                }
            }
        }
    }

    private function connectWithTimeout(ParametersInterface $parameters): void
    {
        if (false === $host = self::getAddress($parameters)) {
            try {
                $this->onConnectionError("Cannot resolve the address of '$parameters->host'.");
            } catch (CommunicationException $e) {
            }
        }

        $socket = $this->getResource();

        socket_set_nonblock($socket);

        if (@socket_connect($socket, $host, (int)$parameters->port) === false) {
            $error = socket_last_error();

            if ($error != SOCKET_EINPROGRESS && $error != SOCKET_EALREADY) {
                $this->emitSocketError();
            }
        }

        socket_set_block($socket);

        $null = null;
        $selectable = array($socket);

        $timeout = (float)$parameters->timeout;
        $timeoutSecs = floor($timeout);
        $timeoutUSecs = ($timeout - $timeoutSecs) * 1000000;

        $selected = socket_select($selectable, $selectable, $null, $timeoutSecs, $timeoutUSecs);

        if ($selected === 2) {
            try {
                $this->onConnectionError('Connection refused.', SOCKET_ECONNREFUSED);
            } catch (CommunicationException $e) {
            }
        }
        if ($selected === 0) {
            try {
                $this->onConnectionError('Connection timed out.', SOCKET_ETIMEDOUT);
            } catch (CommunicationException $e) {
            }
        }
        if ($selected === false) {
            $this->emitSocketError();
        }
    }

    protected static function getAddress(ParametersInterface $parameters)
    {
        if ($parameters->scheme === 'unix') {
            return $parameters->path;
        }

        $host = $parameters->host;

        if (ip2long($host) == false) {
            if (false == $addresses = gethostbynamel($host)) {
                return false;
            }

            return $addresses[array_rand($addresses)];
        }

        return $host;
    }

    private function emitSocketError(): void
    {
        $errno = socket_last_error();
        $errstr = socket_strerror($errno);

        $this->disconnect();

        try {
            $this->onConnectionError(trim($errstr), $errno);
        } catch (CommunicationException $e) {
        }
    }

    public function disconnect()
    {
        if ($this->isConnected()) {
            socket_close($this->getResource());
            parent::disconnect();
        }
    }

    public function read()
    {
        $socket = $this->getResource();
        $reader = $this->reader;

        while (PHPIREDIS_READER_STATE_INCOMPLETE === $state = phpiredis_reader_get_state($reader)) {
            if (@socket_recv($socket, $buffer, 4096, 0) == false || $buffer === '') {
                $this->emitSocketError();
            }

            phpiredis_reader_feed($reader, $buffer);
        }

        if ($state === PHPIREDIS_READER_STATE_COMPLETE) {
            return phpiredis_reader_get_reply($reader);
        }

        try {
            $this->onProtocolError(phpiredis_reader_get_error($reader));
        } catch (CommunicationException $e) {
        }
    }

    public function writeRequest(CommandInterface $command)
    {
        $arguments = $command->getArguments();
        array_unshift($arguments, $command->getId());

        $this->write(phpiredis_format_command($arguments));
    }

    protected function write($buffer): void
    {
        $socket = $this->getResource();

        while (($length = strlen($buffer)) > 0) {
            $written = socket_write($socket, $buffer, $length);

            if ($length === $written) {
                return;
            }

            if ($written == false) {
                try {
                    $this->onConnectionError('Error while writing bytes to the server.');
                } catch (CommunicationException $e) {
                }
            }

            $buffer = substr($buffer, $written);
        }
    }

    /**
     * @throws NotSupportedException
     */
    public function __wakeup()
    {
        $this->assertExtensions();
        $this->reader = $this->createReader();
    }

    /**
     * @throws NotSupportedException
     */
    protected function assertParameters(ParametersInterface $parameters): ParametersInterface
    {
        if (isset($parameters->persistent)) {
            throw new NotSupportedException(
                "Persistent connections are not supported by this connection backend."
            );
        }

        return parent::assertParameters($parameters);
    }

    protected function getReader()
    {
        return $this->reader;
    }

    protected function createResource()
    {
        $isUnix = $this->parameters->scheme === 'unix';
        $domain = $isUnix ? AF_UNIX : AF_INET;
        $protocol = $isUnix ? 0 : SOL_TCP;

        $socket = @socket_create($domain, SOCK_STREAM, $protocol);

        if (!is_resource($socket)) {
            $this->emitSocketError();
        }

        $this->setSocketOptions($socket, $this->parameters);

        return $socket;
    }

    private function setSocketOptions($socket, ParametersInterface $parameters): void
    {
        if ($parameters->scheme !== 'tcp') {
            return;
        }

        if (!socket_set_option($socket, SOL_TCP, TCP_NODELAY, 1)) {
            $this->emitSocketError();
        }

        if (!socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1)) {
            $this->emitSocketError();
        }

        if (isset($parameters->read_write_timeout)) {
            $rwtimeout = (float)$parameters->read_write_timeout;
            $timeoutSec = floor($rwtimeout);
            $timeoutUsec = ($rwtimeout - $timeoutSec) * 1000000;

            $timeout = array(
                'sec' => $timeoutSec,
                'usec' => $timeoutUsec,
            );

            if (!socket_set_option($socket, SOL_SOCKET, SO_SNDTIMEO, $timeout)) {
                $this->emitSocketError();
            }

            if (!socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, $timeout)) {
                $this->emitSocketError();
            }
        }
    }
}
