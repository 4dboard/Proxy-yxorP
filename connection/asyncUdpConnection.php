<?php namespace yxorP\connection;

/* Importing the classes and functions that are used in the class. */

use Exception;
use Throwable;
use yxorP\events\eventInterface;
use yxorP\http\worker;
use function class_exists;
use function explode;
use function fclose;
use function stream_context_create;
use function stream_set_blocking;
use function stream_socket_client;
use function stream_socket_recvfrom;
use function stream_socket_sendto;
use function strlen;
use function substr;
use function ucfirst;
use const STREAM_CLIENT_CONNECT;

class asyncUdpConnection extends udpConnection
{
    public $onConnect = null;
    public $onClose = null;
    protected bool $connected = false;
    protected string|array|object|null $_contextOption = null;

    /**
     * @throws Exception
     */
    public function __construct($remote_address, $context_option = null)
    {
        list($scheme, $address) = explode(':', $remote_address, 2);
        if ($scheme !== 'udp') {
            $scheme = ucfirst($scheme);
            $this->protocol = '\\protocols\\' . $scheme;
            if (!class_exists($this->protocol)) {
                $this->protocol = "\yxorP\\protocols\\$scheme";
                if (!class_exists($this->protocol)) {
                    throw new Exception("class \\protocols\\$scheme not exist");
                }
            }
        }
        $this->_remoteAddress = substr($address, 2);
        $this->_contextOption = $context_option;
    }

    public function baseRead($socket): bool
    {
        $recv_buffer = stream_socket_recvfrom($socket, Worker::MAX_UDP_PACKAGE_SIZE, 0, $remote_address);
        if (false === $recv_buffer || empty($remote_address)) {
            return false;
        }
        if ($this->onMessage) {
            if ($this->protocol) {
                $recv_buffer = $this->protocol::decode($recv_buffer, $this);
            }
            ++connectionInterface::$statistics['total_request'];
            try {
                ($this->onMessage)($this, $recv_buffer);
            } catch (Throwable $e) {
                Worker::stopAll(250, $e);
            }
        }
        return true;
    }

    public function close($data = null, $raw = false): bool
    {
        if ($data !== null) {
            $this->send($data, $raw);
        }
        Worker::$globalEvent->offReadable($this->_socket);
        fclose($this->_socket);
        $this->connected = false;
        if ($this->onClose) {
            try {
                ($this->onClose)($this);
            } catch (Throwable $e) {
                Worker::stopAll(250, $e);
            }
        }
        $this->onConnect = $this->onMessage = $this->onClose = null;
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
        if ($this->connected === false) {
            $this->connect();
        }
        return strlen($send_buffer) === stream_socket_sendto($this->_socket, $send_buffer, 0);
    }

    public function connect()
    {
        if ($this->connected === true) {
            return;
        }
        if ($this->_contextOption) {
            $context = stream_context_create($this->_contextOption);
            $this->_socket = stream_socket_client("udp://{$this->_remoteAddress}", $errno, $errmsg, 30, STREAM_CLIENT_CONNECT, $context);
        } else {
            $this->_socket = stream_socket_client("udp://{$this->_remoteAddress}", $errno, $errmsg);
        }
        if (!$this->_socket) {
            Worker::safeEcho(new Exception($errmsg));
            return;
        }
        stream_set_blocking($this->_socket, false);
        if ($this->onMessage) {
            Worker::$globalEvent->add($this->_socket, eventInterface::EV_READ, [$this, 'baseRead']);
        }
        $this->connected = true;
        if ($this->onConnect) {
            try {
                ($this->onConnect)($this);
            } catch (Throwable $e) {
                Worker::stopAll(250, $e);
            }
        }
    }
}