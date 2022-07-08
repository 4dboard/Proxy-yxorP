<?php namespace yxorP\connection;

use JetBrains\PhpStorm\Pure;

/**
 * @property $statistics
 * @property string $websocketType
 * @property $statistics
 * @property $statistics
 * @property $statistics
 * @property $statistics
 * @property $statistics
 * @property $statistics
 */
abstract class connectionInterface extends tcpConnection
{
    const SEND_FAIL = -1;

    public function send($send_buffer): string
    {
        // TODO: Implement send() method.
    }

    public function getRemoteIp(): string
    {
        // TODO: Implement getRemoteIp() method.
    }

    public function getRemotePort(): int
    {
        // TODO: Implement getRemotePort() method.
    }

    public function getRemoteAddress()
    {
        // TODO: Implement getRemoteAddress() method.
    }

    public function getLocalIp(): string
    {
        // TODO: Implement getLocalIp() method.
    }

    public function getLocalPort(): int
    {
        // TODO: Implement getLocalPort() method.
    }

    public function getLocalAddress(): string
    {
        // TODO: Implement getLocalAddress() method.
    }

    #[Pure] public function isIPv4(): bool
    {
        // TODO: Implement isIPv4() method.
    }

    #[Pure] public function isIPv6(): bool
    {
        // TODO: Implement isIPv6() method.
    }

    public function close($data = null)
    {
        // TODO: Implement close() method.
    }
}