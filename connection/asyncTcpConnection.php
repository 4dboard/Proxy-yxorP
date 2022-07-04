<?php namespace yxorP\connection;

/* Importing the namespaces and functions. */

use Exception;
use Throwable;
use yxorP\http\timer;
use yxorP\http\worker;
use function class_exists;
use function explode;
use function function_exists;
use function is_resource;
use function method_exists;
use function microtime;
use function parse_url;
use function socket_import_stream;
use function socket_set_option;
use function stream_context_create;
use function stream_set_blocking;
use function stream_set_read_buffer;
use function stream_socket_client;
use function stream_socket_get_name;
use function ucfirst;
use const DIRECTORY_SEPARATOR;
use const PHP_INT_MAX;
use const SO_KEEPALIVE;
use const SOL_SOCKET;
use const SOL_TCP;
use const STREAM_CLIENT_ASYNC_CONNECT;
use const TCP_NODELAY;

/* Extending the tcpConnection class. */

class asyncTcpConnection extends tcpConnection
{
    /* A list of protocols that are supported by the asyncTcpConnection class. */
    protected static array $_builtinTransports = ['tcp' => 'tcp', 'udp' => 'udp', 'unix' => 'unix', 'ssl' => 'ssl', 'sslv2' => 'sslv2', 'sslv3' => 'sslv3', 'tls' => 'tls'];
    /* A callback function that is called when the connection is established. */
    public $onConnect = null;
    /* Setting the default transport to TCP. */
    public $transport = 'tcp';
    /* Setting the status of the connection to initial. */
    protected int $_status = self::STATUS_INITIAL;
    /* Setting the default value of the `$_remoteHost` variable to an empty string. */
    protected mixed $_remoteHost = '';
    /* Setting the default port to 80. */
    protected mixed $_remotePort = 80;
    /* Setting the default value of the `$_connectStartTime` variable to 0. */
    protected int $_connectStartTime = 0;
    /* Setting the default value of the `$_remoteURI` variable to an empty string. */
    protected string $_remoteURI = '';
    /* Setting the default value of the `$_contextOption` variable to null. */
    protected ?array $_contextOption = null;
    /* Setting the default value of the `$_reconnectTimer` variable to null. */
    protected $_reconnectTimer = null;

    /* Setting the default values for the variables. */
    /**
     * @throws Exception
     */
    public function __construct($remote_address, array $context_option = [])
    {
        /* Parsing the URL. */
        $address_info = parse_url($remote_address);
        /* If the address info is not set, then it will explode the address into two parts. */
        if (!$address_info) {
            /* Exploding the remote address into two parts. */
            list($scheme, $this->_remoteAddress) = explode(':', $remote_address, 2);
            /* Checking if the scheme is unix, and if it is, then it will set the remote address to the address without the
            scheme. */
            if ('unix' === strtolower($scheme)) $this->_remoteAddress = substr($remote_address, strpos($remote_address, '/') + 2);
            /* Checking if the remote address is set, if it is not set, then it will throw an exception. */
            if (!$this->_remoteAddress) Worker::safeEcho(new Exception('bad remote_address'));
        } else {
            /* Setting the port to 0 if it is not set. */
            if (!isset($address_info['port'])) $address_info['port'] = 0;
            /* Setting the path to `/` if it is not set. */
            if (!isset($address_info['path'])) $address_info['path'] = '/';
            /* Checking if the query is set, if it is not set, then it will set it to an empty string, if it is set, then
            it will set it to a question mark followed by the query. */
            if (!isset($address_info['query'])) $address_info['query'] = ''; else    $address_info['query'] = '?' . $address_info['query'];
            /* Setting the remote host to the host that is in the address info. */
            $this->_remoteHost = $address_info['host'];
            /* Setting the port to the port that is in the address info. */
            $this->_remotePort = $address_info['port'];
            /* Setting the remote URI to the path and query that is in the address info. */
            $this->_remoteURI = "{$address_info['path']}{$address_info['query']}";
            /* Setting the scheme to the scheme that is in the address info, if it is not set, then it will set it to TCP. */
            $scheme = $address_info['scheme'] ?? 'tcp';
            /* Setting the remote address to the address without the scheme if the scheme is unix. */
            $this->_remoteAddress = 'unix' === strtolower($scheme) ? substr($remote_address, strpos($remote_address, '/') + 2) : $this->_remoteHost . ':' . $this->_remotePort;
        }
        /* Setting the `$this->id` and `$this->_id` variables to the value of the `self::$_idRecorder` variable, and then
        it is incrementing the `self::$_idRecorder` variable by one. */
        $this->id = $this->_id = self::$_idRecorder++;
        /* Checking if the `self::$_idRecorder` variable is equal to the maximum value of an integer, and if it is, then it
        will set the `self::$_idRecorder` variable to 0. */
        if (PHP_INT_MAX === self::$_idRecorder) self::$_idRecorder = 0;
        /* Checking if the scheme is not set in the `self::$_builtinTransports` array, and if it is not set, then it will
        set the `$scheme` variable to the uppercase version of the scheme. */
        if (!isset(self::$_builtinTransports[$scheme])) {
            /* Setting the `$scheme` variable to the uppercase version of the scheme. */
            $scheme = ucfirst($scheme);
            /* Setting the `$this->protocol` variable to the value of the `$scheme` variable, and then it is adding the
            `\protocols\` string to the beginning of the `$this->protocol` variable. */
            $this->protocol = '\\protocols\\' . $scheme;
            /* Checking if the class exists, and if it does not exist, then it will set the `$this->protocol` variable to
            `\yxorP\protocols\$scheme`. */
            if (!class_exists($this->protocol)) {
                /* Setting the `$this->protocol` variable to `\yxorP\protocols\$scheme`. */
                $this->protocol = "\\yxorP\\protocols\\$scheme";
                /* Checking if the class exists, and if it does not exist, then it will throw an exception. */
                if (!class_exists($this->protocol)) throw new Exception("class \\protocols\\$scheme not exist");
            }
            /* Setting the `$this->transport` variable to the value of the `$scheme` variable in the
            `self::$_builtinTransports` array. */
        } else  $this->transport = self::$_builtinTransports[$scheme];
        /* Incrementing the `connection_count` variable in the `self::$statistics` array by one. */
        ++self::$statistics['connection_count'];
        /* Setting the `$this->maxSendBufferSize` variable to the value of the `self::$defaultMaxSendBufferSize` variable. */
        $this->maxSendBufferSize = self::$defaultMaxSendBufferSize;
        /* Setting the `$this->maxPackageSize` variable to the value of the `self::$defaultMaxPackageSize` variable. */
        $this->maxPackageSize = self::$defaultMaxPackageSize;
        /* Setting the context option to the context option passed in. */
        $this->_contextOption = $context_option;
        /* Creating a new connection to the database. */
        static::$connections[$this->_id] = $this;
    }

    /* A method that is part of the PHP language. It is used to reconnect to a database after a connection has been lost. */
    public function reconnect($after = 0)
    {
        /* Setting the status of the object to initial. */
        $this->_status = self::STATUS_INITIAL;
        /* Creating a new connection to the database. */
        static::$connections[$this->_id] = $this;
        /* Deleting the timer. */
        if ($this->_reconnectTimer) Timer::del($this->_reconnectTimer);
        /* Checking if the $after variable is greater than 0. */
        if ($after > 0) {
            /* Creating a timer that will call the connect method after the specified time. */
            $this->_reconnectTimer = Timer::add($after, [$this, 'connect'], null, false);
            /* Returning nothing. */
            return;
        }
        /* Connecting to the database. */
        $this->connect();
    }

    /* A function that connects to the database. */
    public function connect()
    {
        /* Checking the status of the connection. */
        if ($this->_status !== self::STATUS_INITIAL && $this->_status !== self::STATUS_CLOSING && $this->_status !== self::STATUS_CLOSED) return;
        /* Setting the status of the connection to connecting. */
        $this->_status = self::STATUS_CONNECTING;
        /* Setting the start time for the connection to the database. */
        $this->_connectStartTime = microtime(true);
        /* Checking if the transport is not unix. */
        if ($this->transport !== 'unix') {
            if (!$this->_remotePort) {
                /* Setting the remote port to 443 if the transport is ssl, otherwise it is setting it to 80. */
                $this->_remotePort = $this->transport === 'ssl' ? 443 : 80;
                /* Setting the remote address to the remote host and port. */
                $this->_remoteAddress = $this->_remoteHost . ':' . $this->_remotePort;
            }
            /* Checking if the context option is set. */
            if ($this->_contextOption) {
                /* *|CURSOR_MARCADOR|* */
                $context = stream_context_create($this->_contextOption);
                /* Creating a socket connection to the remote host and port. */
                $this->_socket = stream_socket_client("tcp://{$this->_remoteHost}:{$this->_remotePort}", $errno, $errstr, 0, STREAM_CLIENT_ASYNC_CONNECT, $context);
            } else {
                /* Creating a socket connection to the remote host and port. */
                $this->_socket = stream_socket_client("tcp://{$this->_remoteHost}:{$this->_remotePort}", $errno, $errstr, 0, STREAM_CLIENT_ASYNC_CONNECT);
            }
            /* Creating a socket connection to the remote address. */
        } else $this->_socket = stream_socket_client("{$this->transport}://{$this->_remoteAddress}", $errno, $errstr, 0, STREAM_CLIENT_ASYNC_CONNECT);
        /* Checking if the socket is not set or if it is not a resource. */
        if (!$this->_socket || !is_resource($this->_socket)) {
            /* Emitting an error. */
            $this->emitError(static::CONNECT_FAIL, $errstr);
            /* Checking if the status is closing, if it is, it will destroy the connection. */
            if ($this->_status === self::STATUS_CLOSING) $this->destroy();
            /* Checking if the status is closed, if it is, it sets the onConnect to null. */
            if ($this->_status === self::STATUS_CLOSED) $this->onConnect = null;
            /* Returning nothing. */
            return;
        }
        /* Registering a callback function to be called when the socket is writable. */
        Worker::$globalEvent->onWritable($this->_socket, [$this, 'checkConnection']);
        /* Checking if the DIRECTORY_SEPARATOR is equal to '\\' and if it is, it is adding an event listener to the global
        event object. */
        if (DIRECTORY_SEPARATOR === '\\') Worker::$globalEvent->onExcept($this->_socket, [$this, 'checkConnection']);
    }

    /* A function that takes two parameters, $code and $msg. */
    protected function emitError($code, $msg)
    {
        /* Setting the status of the connection to closing. */
        $this->_status = self::STATUS_CLOSING;
        /* Checking if the onError property is set to true. If it is, it will try to execute the code in the try block. */
        if ($this->onError) try {
            /* Calling the onError function with the parameters $this, $code, $msg. */
            ($this->onError)($this, $code, $msg);
            /* The above code is trying to catch an error. */
        } catch (Throwable $e) {
            /* Stopping all workers after 250ms. */
            Worker::stopAll(250, $e);
        }
    }

    /* A method that cancels the reconnection. */
    public function cancelReconnect()
    {
        /* Deleting the timer. */
        if ($this->_reconnectTimer) Timer::del($this->_reconnectTimer);
    }

    /* A function that returns the remote host. */
    public function getRemoteHost()
    {
        /* Returning the value of the private variable _remoteHost. */
        return $this->_remoteHost;
    }

    /* A function that returns the remote URI. */
    public function getRemoteURI(): string
    {
        /* Returning the value of the private variable _remoteURI. */
        return $this->_remoteURI;
    }

    /* Checking the connection to the database. */
    public function checkConnection()
    {
        /* Checking if the DIRECTORY_SEPARATOR is equal to '\\' and if it is, it is turning off the global event except for
        the socket. */
        if (DIRECTORY_SEPARATOR === '\\') Worker::$globalEvent->offExcept($this->_socket);
        /* Turning off the writable event for the socket. */
        Worker::$globalEvent->offWritable($this->_socket);
        /* Checking the status of the connection. */
        if ($this->_status !== self::STATUS_CONNECTING) return;
        /* Getting the address of the socket. */
        if ($address = stream_socket_get_name($this->_socket, true)) {
            /* Setting the socket to non-blocking mode. */
            stream_set_blocking($this->_socket, false);
            /* Setting the read buffer to 0. */
            if (function_exists('stream_set_read_buffer')) stream_set_read_buffer($this->_socket, 0);
            /* Checking if the socket_import_stream function exists and if the transport is tcp. */
            if (function_exists('socket_import_stream') && $this->transport === 'tcp') {
                /* Importing the stream into a socket. */
                $raw_socket = socket_import_stream($this->_socket);
                /* Setting the socket option to keep the connection alive. */
                socket_set_option($raw_socket, SOL_SOCKET, SO_KEEPALIVE, 1);
                /* Setting the socket option to TCP_NODELAY, which disables the Nagle algorithm. */
                socket_set_option($raw_socket, SOL_TCP, TCP_NODELAY, 1);
            }
            /* Checking if the transport is ssl. */
            if ($this->transport === 'ssl') {
                /* Checking if the SSL handshake is completed. */
                $this->_sslHandshakeCompleted = $this->doSslHandshake($this->_socket);
                /* Checking if the SSL handshake has been completed. */
                if ($this->_sslHandshakeCompleted === false) return;
                /* Checking to see if the file is being run from the command line. */
            } else {
                /* *|CURSOR_MARCADOR|* */
                if ($this->_sendBuffer) Worker::$globalEvent->onWritable($this->_socket, [$this, 'baseWrite']);
            }
            /* Registering a callback function to be called when the socket is readable. */
            Worker::$globalEvent->onReadable($this->_socket, [$this, 'baseRead']);
            /* Setting the status of the connection to established. */
            $this->_status = self::STATUS_ESTABLISHED;
            /* Setting the remote address of the client. */
            $this->_remoteAddress = $address;
            /* Checking if the onConnect property is set to true. If it is, it will try to execute the code in the try
            block. */
            if ($this->onConnect) try {
                /* Calling the onConnect function. */
                ($this->onConnect)($this);
                /* The above code is trying to catch an error. */
            } catch (Throwable $e) {
                /* Stopping all workers after 250ms. */
                Worker::stopAll(250, $e);
            }
            /* Checking if the protocol is set and if the method onConnect exists. If it does, it will try to execute the
            code. */
            if ($this->protocol && method_exists($this->protocol, 'onConnect')) try {
                /* Calling the onConnect method of the protocol class. */
                [$this->protocol, 'onConnect']($this);
                /* The above code is trying to catch an error. */
            } catch (Throwable $e) {
                /* Stopping all workers after 250ms. */
                Worker::stopAll(250, $e);
            }
        } else {
            /* *|CURSOR_MARCADOR|* */
            $this->emitError(static::CONNECT_FAIL, 'connect ' . $this->_remoteAddress . ' fail after ' . round(microtime(true) - $this->_connectStartTime, 4) . ' seconds');
            /* Checking if the status is closing, if it is, it will destroy the connection. */
            if ($this->_status === self::STATUS_CLOSING) $this->destroy();
            /* Checking if the status is closed, if it is, it sets the onConnect to null. */
            if ($this->_status === self::STATUS_CLOSED) $this->onConnect = null;
        }
    }
}