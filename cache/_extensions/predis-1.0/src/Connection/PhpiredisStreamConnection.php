<?php /* yxorP */

namespace Predis\Connection;

use Predis\Command\CommandInterface;
use Predis\CommunicationException;
use Predis\NotSupportedException;
use Predis\Response\Error as ErrorResponse;
use Predis\Response\Status as StatusResponse;

class PhpiredisStreamConnection extends StreamConnection
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
    private function assertExtensions(): void
    {
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

    protected function getStatusHandler(): callable
    {
        return static function ($payload) {
            return StatusResponse::get($payload);
        };
    }

    protected function getErrorHandler(): callable
    {
        return static function ($errorMessage) {
            return new ErrorResponse($errorMessage);
        };
    }

    public function __destruct()
    {
        phpiredis_reader_destroy($this->reader);

        parent::__destruct();
    }

    public function read()
    {
        $socket = $this->getResource();
        $reader = $this->reader;

        while (PHPIREDIS_READER_STATE_INCOMPLETE === $state = phpiredis_reader_get_state($reader)) {
            $buffer = stream_socket_recvfrom($socket, 4096);

            if ($buffer === false) {
                try {
                    $this->onConnectionError('Error while reading bytes from the server.');
                } catch (CommunicationException $e) {
                }
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

    /**
     * @throws NotSupportedException
     */
    public function __wakeup()
    {
        $this->assertExtensions();
        $this->reader = $this->createReader();
    }

    protected function tcpStreamInitializer(ParametersInterface $parameters): bool
    {
        $uri = "tcp://{$parameters->host}:{$parameters->port}";
        $flags = STREAM_CLIENT_CONNECT;
        $socket = null;

        if (isset($parameters->async_connect) && $parameters->async_connect) {
            $flags |= STREAM_CLIENT_ASYNC_CONNECT;
        }

        if (isset($parameters->persistent) && $parameters->persistent) {
            $flags |= STREAM_CLIENT_PERSISTENT;
            $uri .= str_starts_with($path = $parameters->path, '/') ? $path : "/$path";
        }

        $resource = @stream_socket_client($uri, $errno, $errstr, (float)$parameters->timeout, $flags);

        if (!$resource) {
            try {
                $this->onConnectionError(trim($errstr), $errno);
            } catch (CommunicationException $e) {
            }
        }

        if (isset($parameters->read_write_timeout) && function_exists('socket_import_stream')) {
            $rwtimeout = (float)$parameters->read_write_timeout;
            $rwtimeout = $rwtimeout > 0 ? $rwtimeout : -1;

            $timeout = array(
                'sec' => $timeoutSeconds = floor($rwtimeout),
                'usec' => ($rwtimeout - $timeoutSeconds) * 1000000,
            );

            $socket = $socket ?: socket_import_stream($resource);
            @socket_set_option($socket, SOL_SOCKET, SO_SNDTIMEO, $timeout);
            @socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, $timeout);
        }

        if (isset($parameters->tcp_nodelay) && function_exists('socket_import_stream')) {
            $socket = $socket ?: socket_import_stream($resource);
            socket_set_option($socket, SOL_TCP, TCP_NODELAY, (int)$parameters->tcp_nodelay);
        }

        return $resource;
    }

    protected function getReader()
    {
        return $this->reader;
    }
}
