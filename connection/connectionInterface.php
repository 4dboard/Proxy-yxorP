<?php namespace yxorP\connection;
abstract class connectionInterface extends tcpConnection
{
    abstract public function send($send_buffer);

    abstract public function getRemoteIp();

    abstract public function getRemotePort();

    abstract public function getRemoteAddress();

    abstract public function getLocalIp();

    abstract public function getLocalPort();

    abstract public function getLocalAddress();

    abstract public function isIPv4();

    abstract public function isIPv6();

    abstract public function close($data = null);
}