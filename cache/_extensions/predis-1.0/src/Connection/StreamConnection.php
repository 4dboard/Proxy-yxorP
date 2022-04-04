<?php /* yxorP */

namespace Predis\Connection;

use Predis\Command\CommandInterface;
use Predis\CommunicationException;
use Predis\Response\Error as ErrorResponse;
use Predis\Response\Status as StatusResponse;

class StreamConnection extends AbstractConnection
{

    public function __destruct()
    {
        if (isset($this->parameters->persistent) && $this->parameters->persistent) {
            return;
        }

        $this->disconnect();
    }

    public function disconnect()
    {
        if ($this->isConnected()) {
            fclose($this->getResource());
            parent::disconnect();
        }
    }

    public function connect()
    {
        if (parent::connect() && $this->initCommands) {
            foreach ($this->initCommands as $command) {
                $this->executeCommand($command);
            }
        }
    }

    public function read()
    {
        $socket = $this->getResource();
        $chunk = fgets($socket);

        if ($chunk === false || $chunk === '') {
            try {
                $this->onConnectionError('Error while reading line from the server.');
            } catch (CommunicationException $e) {
            }
        }

        $prefix = $chunk[0];
        $payload = substr($chunk, 1, -2);

        switch ($prefix) {
            case '+':
                return StatusResponse::get($payload);

            case '$':
                $size = (int)$payload;

                if ($size === -1) {
                    return null;
                }

                $bulkData = '';
                $bytesLeft = ($size += 2);

                do {
                    $chunk = fread($socket, min($bytesLeft, 4096));

                    if ($chunk === false || $chunk === '') {
                        try {
                            $this->onConnectionError('Error while reading bytes from the server.');
                        } catch (CommunicationException $e) {
                        }
                    }

                    $bulkData .= $chunk;
                    $bytesLeft = $size - strlen($bulkData);
                } while ($bytesLeft > 0);

                return substr($bulkData, 0, -2);

            case '*':
                $count = (int)$payload;

                if ($count === -1) {
                    return null;
                }

                $multibulk = array();

                for ($i = 0; $i < $count; $i++) {
                    $multibulk[$i] = $this->read();
                }

                return $multibulk;

            case ':':
                return (int)$payload;

            case '-':
                return new ErrorResponse($payload);

            default:
                try {
                    $this->onProtocolError("Unknown response prefix: '$prefix'.");
                } catch (CommunicationException $e) {
                }
        }
    }

    public function writeRequest(CommandInterface $command)
    {
        $commandID = $command->getId();
        $arguments = $command->getArguments();

        $cmdlen = strlen($commandID);
        $reqlen = count($arguments) + 1;

        $buffer = "*{$reqlen}\r\n\${$cmdlen}\r\n{$commandID}\r\n";

        for ($i = 0, $reqlen--; $i < $reqlen; $i++) {
            $argument = $arguments[$i];
            $arglen = strlen($argument);
            $buffer .= "\${$arglen}\r\n{$argument}\r\n";
        }

        $this->write($buffer);
    }

    protected function write($buffer): void
    {
        $socket = $this->getResource();

        while (($length = strlen($buffer)) > 0) {
            $written = @fwrite($socket, $buffer);

            if ($length === $written) {
                return;
            }

            if ($written === false || $written === 0) {
                try {
                    $this->onConnectionError('Error while writing bytes to the server.');
                } catch (CommunicationException $e) {
                }
            }

            $buffer = substr($buffer, $written);
        }
    }

    protected function createResource()
    {
        $initializer = "{$this->parameters->scheme}StreamInitializer";
        return $this->$initializer($this->parameters);
    }

    protected function tcpStreamInitializer(ParametersInterface $parameters): bool
    {
        $uri = "tcp://{$parameters->host}:{$parameters->port}";
        $flags = STREAM_CLIENT_CONNECT;

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

        if (isset($parameters->read_write_timeout)) {
            $rwtimeout = (float)$parameters->read_write_timeout;
            $rwtimeout = $rwtimeout > 0 ? $rwtimeout : -1;
            $timeoutSeconds = floor($rwtimeout);
            $timeoutUSeconds = ($rwtimeout - $timeoutSeconds) * 1000000;
            stream_set_timeout($resource, $timeoutSeconds, $timeoutUSeconds);
        }

        if (isset($parameters->tcp_nodelay) && function_exists('socket_import_stream')) {
            $socket = socket_import_stream($resource);
            socket_set_option($socket, SOL_TCP, TCP_NODELAY, (int)$parameters->tcp_nodelay);
        }

        return $resource;
    }

    protected function unixStreamInitializer(ParametersInterface $parameters): bool
    {
        $uri = "unix://{$parameters->path}";
        $flags = STREAM_CLIENT_CONNECT;

        if ($parameters->persistent) {
            $flags |= STREAM_CLIENT_PERSISTENT;
        }

        $resource = @stream_socket_client($uri, $errno, $errstr, (float)$parameters->timeout, $flags);

        if (!$resource) {
            try {
                $this->onConnectionError(trim($errstr), $errno);
            } catch (CommunicationException $e) {
            }
        }

        if (isset($parameters->read_write_timeout)) {
            $rwtimeout = (float)$parameters->read_write_timeout;
            $rwtimeout = $rwtimeout > 0 ? $rwtimeout : -1;
            $timeoutSeconds = floor($rwtimeout);
            $timeoutUSeconds = ($rwtimeout - $timeoutSeconds) * 1000000;
            stream_set_timeout($resource, $timeoutSeconds, $timeoutUSeconds);
        }

        return $resource;
    }
}
