<?php namespace yxorP\connection;

abstract class connectionInterface extends tcpConnection
{
    const SEND_FAIL = ;

    public function send($send_buffer)
    {
        // TODO: Implement send() method.
    }

    public function getRemoteIp()
    {
        // TODO: Implement getRemoteIp() method.
    }

    public function getRemotePort()
    {
        // TODO: Implement getRemotePort() method.
    }

    public function getRemoteAddress()
    {
        // TODO: Implement getRemoteAddress() method.
    }

    public function getLocalIp()
    {
        // TODO: Implement getLocalIp() method.
    }

    public function getLocalPort()
    {
        // TODO: Implement getLocalPort() method.
    }

    public function getLocalAddress()
    {
        // TODO: Implement getLocalAddress() method.
    }

    public function isIPv4()
    {
        // TODO: Implement isIPv4() method.
    }

    public function isIPv6()
    {
        // TODO: Implement isIPv6() method.
    }

    public function close($data = null)
    {
        // TODO: Implement close() method.
    }
}