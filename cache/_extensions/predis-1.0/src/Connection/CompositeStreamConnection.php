<?php /* yxorP */


namespace Predis\Connection;

use InvalidArgumentException;
use Predis\Command\CommandInterface;
use Predis\CommunicationException;
use Predis\Protocol\ProtocolProcessorInterface;
use Predis\Protocol\Text\ProtocolProcessor as TextProtocolProcessor;


class CompositeStreamConnection extends StreamConnection implements CompositeConnectionInterface
{
    protected ProtocolProcessorInterface|TextProtocolProcessor $protocol;


    public function __construct(
        ParametersInterface        $parameters,
        ProtocolProcessorInterface $protocol = null
    )
    {
        $this->parameters = $this->assertParameters($parameters);
        $this->protocol = $protocol ?: new TextProtocolProcessor();
    }


    public function getProtocol(): TextProtocolProcessor|ProtocolProcessorInterface
    {
        return $this->protocol;
    }


    public function writeBuffer($buffer)
    {
        $this->write($buffer);
    }


    public function readBuffer($length): string
    {
        if ($length <= 0) {
            throw new InvalidArgumentException('Length parameter must be greater than 0.');
        }

        $value = '';
        $socket = $this->getResource();

        do {
            $chunk = fread($socket, $length);

            if ($chunk === false || $chunk === '') {
                try {
                    $this->onConnectionError('Error while reading bytes from the server.');
                } catch (CommunicationException $e) {
                }
            }

            $value .= $chunk;
        } while (($length -= strlen($chunk)) > 0);

        return $value;
    }


    public function readLine(): bool|string
    {
        $value = '';
        $socket = $this->getResource();

        do {
            $chunk = fgets($socket);

            if ($chunk === false || $chunk === '') {
                try {
                    $this->onConnectionError('Error while reading line from the server.');
                } catch (CommunicationException $e) {
                }
            }

            $value .= $chunk;
        } while (!str_ends_with($value, "\r\n"));

        return substr($value, 0, -2);
    }


    public function writeRequest(CommandInterface $command)
    {
        $this->protocol->write($this, $command);
    }


    public function read()
    {
        try {
            return $this->protocol->read($this);
        } catch (CommunicationException $e) {
        }
    }


    public function __sleep()
    {
        return array_merge(parent::__sleep(), array('protocol'));
    }
}
