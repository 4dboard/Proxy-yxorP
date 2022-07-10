<?php namespace yxorP\inc\connection;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use JsonSerializable;
use ReturnTypeWillChange;
use function stream_socket_get_name;
use function stream_socket_sendto;
use function strlen;
use function strrchr;
use function strrpos;
use function substr;
use function trim;

class udpConnection extends connectionInterface implements JsonSerializable
{
    public $protocol = null;
    public string $transport = 'udp';
    protected $_socket = null;
    protected string|array|object|null $_remoteAddress = '';

    public function __construct($socket, $remote_address)
    {
        $this->_socket = $socket;
        $this->_remoteAddress = $remote_address;
    }

    public function close($data = null, $raw = false): bool
    {
        if ($data !== null) {
            $this->send($data, $raw);
        }
        return true;
    }

    public function send($send_buffer, $raw = false)
    {
        if (false === $raw && $this->protocol) {
            $parser = $this->protocol;
            $send_buffer = $parser::encode($send_buffer, $this);
            if ($send_buffer === '') {
                return;
            }
        }
        return strlen($send_buffer) === stream_socket_sendto($this->_socket, $send_buffer, 0, $this->isIpV6() ? '[' . $this->getRemoteIp() . ']:' . $this->getRemotePort() : $this->_remoteAddress);
    }

    #[Pure] public function isIpV6(): bool
    {
        if ($this->transport === 'unix') {
            return false;
        }
        return str_contains($this->getRemoteIp(), ':');
    }

    public function getRemoteIp(): string
    {
        $pos = strrpos($this->_remoteAddress, ':');
        if ($pos) {
            return trim(substr($this->_remoteAddress, 0, $pos), '[]');
        }
        return '';
    }

    public function getRemotePort(): int
    {
        if ($this->_remoteAddress) {
            return (int)substr(strrchr($this->_remoteAddress, ':'), 1);
        }
        return 0;
    }

    public function getSocket()
    {
        return $this->_socket;
    }

    #[ArrayShape(['transport' => "string", 'getRemoteIp' => "string", 'remotePort' => "int", 'getRemoteAddress' => "mixed|string", 'getLocalIp' => "string", 'getLocalPort' => "int", 'getLocalAddress' => "string", 'isIpV4' => "bool", 'isIpV6' => "bool"])] #[ReturnTypeWillChange] public function jsonSerialize(): array
    {
        return ['transport' => $this->transport, 'getRemoteIp' => $this->getRemoteIp(), 'remotePort' => $this->getRemotePort(), 'getRemoteAddress' => $this->getRemoteAddress(), 'getLocalIp' => $this->getLocalIp(), 'getLocalPort' => $this->getLocalPort(), 'getLocalAddress' => $this->getLocalAddress(), 'isIpV4' => $this->isIpV4(), 'isIpV6' => $this->isIpV6(),];
    }

    public function getRemoteAddress(): string|array|object|null
    {
        return $this->_remoteAddress;
    }

    public function getLocalIp(): string
    {
        $address = $this->getLocalAddress();
        $pos = strrpos($address, ':');
        if (!$pos) {
            return '';
        }
        return substr($address, 0, $pos);
    }

    public function getLocalAddress(): string
    {
        return (string)@stream_socket_get_name($this->_socket, false);
    }

    public function getLocalPort(): int
    {
        $address = $this->getLocalAddress();
        $pos = strrpos($address, ':');
        if (!$pos) {
            return 0;
        }
        return (int)substr(strrchr($address, ':'), 1);
    }

    #[Pure] public function isIpV4(): bool
    {
        if ($this->transport === 'unix') {
            return false;
        }
        return !str_contains($this->getRemoteIp(), ':');
    }
}