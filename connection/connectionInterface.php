<?php namespace yxorP\connection;
abstract class connectionInterface extends tcpConnection, tcpConnection, tcpConnection
{
    const CONNECT_FAIL = 1;
    const SEND_FAIL = 2;
    public
    static $statistics = ['connection_count' => 0, 'total_request' => 0, 'throw_exception' => 0, 'send_fail' => 0,];
    public
    $onMessage = null;
    public
    $onClose = null;
    public
    $onError = null;
    public
    $protocolContext = [];

    abstract public function send($send_buffer)

    abstract public function getRemoteIp()

    abstract public function getRemotePort()

    abstract public function getRemoteAddress()

    abstract public function getLocalIp()

    abstract public function getLocalPort()

    abstract public function getLocalAddress()

    abstract public function isIPv4()

    abstract public function isIPv6()

    abstract public function close($data = null)
}