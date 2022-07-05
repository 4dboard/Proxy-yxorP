<?php namespace yxorP\connection;

use JetBrains\PhpStorm\Pure;
use JsonSerializable;
use ReturnTypeWillChange;
use Throwable;
use yxorP\http\worker;
use yxorP\protocols\Http\request;
use function ceil;
use function count;
use function fclose;
use function feof;
use function fread;
use function function_exists;
use function fwrite;
use function is_object;
use function is_resource;
use function key;
use function method_exists;
use function posix_getpid;
use function restore_error_handler;
use function set_error_handler;
use function stream_set_blocking;
use function stream_set_read_buffer;
use function stream_socket_enable_crypto;
use function stream_socket_get_name;
use function strlen;
use function strrchr;
use function strrpos;
use function substr;
use function var_export;
use const PHP_INT_MAX;
use const STREAM_CRYPTO_METHOD_SSLv23_CLIENT;
use const STREAM_CRYPTO_METHOD_SSLv23_SERVER;
use const STREAM_CRYPTO_METHOD_SSLv2_CLIENT;
use const STREAM_CRYPTO_METHOD_SSLv2_SERVER;

/**
 * @property string $tmpWebsocketData
 * @property string $websocketDataBuffer
 * @property int $websocketCurrentFrameLength
 * @property string $websocketSecKey
 * @property null $websocketPingTimer
 * @property null $websocketPingTimer
 * @property null $websocketPingTimer
 * @property int $handshakeStep
 * @property string $WSServerProtocol
 * @property string $websocketSecKey
 * @property request $__request
 * @property bool $websocketHandshake
 * @property string $websocketCurrentFrameBuffer
 * @property int $websocketCurrentFrameLength
 * @property string $websocketDataBuffer
 * @property $bufferFull
 * @property false $bufferFull
 * @property mixed|request $__request
 * @property mixed|request $__request
 */
class tcpConnection extends connectionInterface implements JsonSerializable
{
    const READ_BUFFER_SIZE = 87380;
    const STATUS_INITIAL = 0;
    const STATUS_CONNECTING = 1;
    const STATUS_ESTABLISHED = 2;
    const STATUS_CLOSING = 4;
    const STATUS_CLOSED = 8;
    public static int $defaultMaxSendBufferSize = 1048576;
    public static int $defaultMaxPackageSize = 10485760;
    public static array $connections = [];
    public static array $_statusToString = [self::STATUS_INITIAL => 'INITIAL', self::STATUS_CONNECTING => 'CONNECTING', self::STATUS_ESTABLISHED => 'ESTABLISHED', self::STATUS_CLOSING => 'CLOSING', self::STATUS_CLOSED => 'CLOSED',];
    protected static int $_idRecorder = 1;
    protected static bool $_enableCache = true;
    public $onMessage = null;
    public $onClose = null;
    public $onError = null;
    public $onBufferFull = null;
    public $onBufferDrain = null;
    public $protocol = null;
    public string $transport = 'tcp';
    public $worker = null;
    public int $bytesRead = 0;
    public int $bytesWritten = 0;
    public int $id = 0;
    public int $maxSendBufferSize = 1048576;
    public int $maxPackageSize = 1048576;
    protected int $_id = 0;
    protected $_socket = null;
    protected string $_sendBuffer = '';
    protected string $_recvBuffer = '';
    protected int $_currentPackageLength = 0;
    protected int $_status = self::STATUS_ESTABLISHED;
    protected mixed $_remoteAddress = '';
    protected bool $_isPaused = false;
    protected bool $_sslHandshakeCompleted = false;

    public function __construct($socket, $remote_address = '')
    {
        ++self::$statistics['connection_count'];
        $this->id = $this->_id = self::$_idRecorder++;
        if (self::$_idRecorder === PHP_INT_MAX) {
            self::$_idRecorder = 0;
        }
        $this->_socket = $socket;
        stream_set_blocking($this->_socket, 0);
        if (function_exists('stream_set_read_buffer')) {
            stream_set_read_buffer($this->_socket, 0);
        }
        Worker::$globalEvent->onReadable($this->_socket, [$this, 'baseRead']);
        $this->maxSendBufferSize = self::$defaultMaxSendBufferSize;
        $this->maxPackageSize = self::$defaultMaxPackageSize;
        $this->_remoteAddress = $remote_address;
        static::$connections[$this->id] = $this;
    }

    public static function enableCache($value)
    {
        static::$_enableCache = (bool)$value;
    }

    public function getSendBufferQueueSize(): int
    {
        return strlen($this->_sendBuffer);
    }

    public function getRecvBufferQueueSize(): int
    {
        return strlen($this->_recvBuffer);
    }

    public function baseWrite()
    {
        set_error_handler(function () {
        });
        if ($this->transport === 'ssl') {
            $len = @fwrite($this->_socket, $this->_sendBuffer, 8192);
        } else {
            $len = @fwrite($this->_socket, $this->_sendBuffer);
        }
        restore_error_handler();
        if ($len === strlen($this->_sendBuffer)) {
            $this->bytesWritten += $len;
            Worker::$globalEvent->offWritable($this->_socket);
            $this->_sendBuffer = '';
            if ($this->onBufferDrain) {
                try {
                    ($this->onBufferDrain)($this);
                } catch (Throwable $e) {
                    Worker::stopAll(250, $e);
                }
            }
            if ($this->_status === self::STATUS_CLOSING) {
                $this->destroy();
            }
            return true;
        }
        if ($len > 0) {
            $this->bytesWritten += $len;
            $this->_sendBuffer = substr($this->_sendBuffer, $len);
        } else {
            ++self::$statistics['send_fail'];
            $this->destroy();
        }
    }

    public function destroy()
    {
        if ($this->_status === self::STATUS_CLOSED) {
            return;
        }
        Worker::$globalEvent->offReadable($this->_socket);
        Worker::$globalEvent->offWritable($this->_socket);
        try {
            @fclose($this->_socket);
        } catch (Throwable $e) {
        }
        $this->_status = self::STATUS_CLOSED;
        if ($this->onClose) {
            try {
                ($this->onClose)($this);
            } catch (Throwable $e) {
                Worker::stopAll(250, $e);
            }
        }
        if ($this->protocol && method_exists($this->protocol, 'onClose')) {
            try {
                ([$this->protocol, 'onClose'])($this);
            } catch (Throwable $e) {
                Worker::stopAll(250, $e);
            }
        }
        $this->_sendBuffer = $this->_recvBuffer = '';
        $this->_currentPackageLength = 0;
        $this->_isPaused = $this->_sslHandshakeCompleted = false;
        if ($this->_status === self::STATUS_CLOSED) {
            $this->onMessage = $this->onClose = $this->onError = $this->onBufferFull = $this->onBufferDrain = null;
            if ($this->worker) {
                unset($this->worker->connections[$this->_id]);
            }
            unset(static::$connections[$this->_id]);
        }
    }

    public function pipe(self $dest)
    {
        $source = $this;
        $this->onMessage = function ($source, $data) use ($dest) {
            $dest->send($data);
        };
        $this->onClose = function ($source) use ($dest) {
            $dest->close();
        };
        $dest->onBufferFull = function ($dest) use ($source) {
            $source->pauseRecv();
        };
        $dest->onBufferDrain = function ($dest) use ($source) {
            $source->resumeRecv();
        };
    }

    public function send($send_buffer, $raw = false)
    {
        if ($this->_status === self::STATUS_CLOSING || $this->_status === self::STATUS_CLOSED) {
            return false;
        }
        if (false === $raw && $this->protocol !== null) {
            $send_buffer = $this->protocol::encode($send_buffer, $this);
            if ($send_buffer === '') {
                return;
            }
        }
        if ($this->_status !== self::STATUS_ESTABLISHED || ($this->transport === 'ssl' && $this->_sslHandshakeCompleted !== true)) {
            if ($this->_sendBuffer && $this->bufferIsFull()) {
                ++self::$statistics['send_fail'];
                return false;
            }
            $this->_sendBuffer .= $send_buffer;
            $this->checkBufferWillFull();
            return;
        }
        if ($this->_sendBuffer === '') {
            if ($this->transport === 'ssl') {
                Worker::$globalEvent->onWritable($this->_socket, [$this, 'baseWrite']);
                $this->_sendBuffer = $send_buffer;
                $this->checkBufferWillFull();
                return;
            }
            $len = 0;
            try {
                $len = @fwrite($this->_socket, $send_buffer);
            } catch (Throwable $e) {
                Worker::log($e);
            }
            if ($len === strlen($send_buffer)) {
                $this->bytesWritten += $len;
                return true;
            }
            if ($len > 0) {
                $this->_sendBuffer = substr($send_buffer, $len);
                $this->bytesWritten += $len;
            } else {
                if (!is_resource($this->_socket) || feof($this->_socket)) {
                    ++self::$statistics['send_fail'];
                    if ($this->onError) {
                        try {
                            ($this->onError)($this, static::SEND_FAIL, 'client closed');
                        } catch (Throwable $e) {
                            Worker::stopAll(250, $e);
                        }
                    }
                    $this->destroy();
                    return false;
                }
                $this->_sendBuffer = $send_buffer;
            }
            Worker::$globalEvent->onWritable($this->_socket, [$this, 'baseWrite']);
            $this->checkBufferWillFull();
            return;
        }
        if ($this->bufferIsFull()) {
            ++self::$statistics['send_fail'];
            return false;
        }
        $this->_sendBuffer .= $send_buffer;
        $this->checkBufferWillFull();
    }

    protected function bufferIsFull(): bool
    {
        if ($this->maxSendBufferSize <= strlen($this->_sendBuffer)) {
            if ($this->onError) {
                try {
                    ($this->onError)($this, static::SEND_FAIL, 'send buffer full and drop package');
                } catch (Throwable $e) {
                    Worker::stopAll(250, $e);
                }
            }
            return true;
        }
        return false;
    }

    protected function checkBufferWillFull()
    {
        if ($this->maxSendBufferSize <= strlen($this->_sendBuffer)) {
            if ($this->onBufferFull) {
                try {
                    ($this->onBufferFull)($this);
                } catch (Throwable $e) {
                    Worker::stopAll(250, $e);
                }
            }
        }
    }

    public function close($data = null, $raw = false)
    {
        if ($this->_status === self::STATUS_CONNECTING) {
            $this->destroy();
            return;
        }
        if ($this->_status === self::STATUS_CLOSING || $this->_status === self::STATUS_CLOSED) {
            return;
        }
        if ($data !== null) {
            $this->send($data, $raw);
        }
        $this->_status = self::STATUS_CLOSING;
        if ($this->_sendBuffer === '') {
            $this->destroy();
        } else {
            $this->pauseRecv();
        }
    }

    public function pauseRecv()
    {
        Worker::$globalEvent->offReadable($this->_socket);
        $this->_isPaused = true;
    }

    public function resumeRecv()
    {
        if ($this->_isPaused === true) {
            Worker::$globalEvent->onReadable($this->_socket, [$this, 'baseRead']);
            $this->_isPaused = false;
            $this->baseRead($this->_socket, false);
        }
    }

    public function baseRead($socket, $check_eof = true)
    {
        static $requests = [];
        if ($this->transport === 'ssl' && $this->_sslHandshakeCompleted !== true) {
            if ($this->doSslHandshake($socket)) {
                $this->_sslHandshakeCompleted = true;
                if ($this->_sendBuffer) {
                    Worker::$globalEvent->onWritable($socket, [$this, 'baseWrite']);
                }
            } else {
                return;
            }
        }
        $buffer = '';
        try {
            $buffer = @fread($socket, self::READ_BUFFER_SIZE);
        } catch (Throwable $e) {
        }
        if ($buffer === '' || $buffer === false) {
            if ($check_eof && (feof($socket) || !is_resource($socket) || $buffer === false)) {
                $this->destroy();
                return;
            }
        } else {
            $this->bytesRead += strlen($buffer);
            if ($this->_recvBuffer === '') {
                if (static::$_enableCache && !isset($buffer[512]) && isset($requests[$buffer])) {
                    ++self::$statistics['total_request'];
                    $request = $requests[$buffer];
                    if ($request instanceof request) {
                        $request = clone $request;
                        $requests[$buffer] = $request;
                        $request->connection = $this;
                        $this->__request = $request;
                        $request->properties = [];
                    }
                    try {
                        ($this->onMessage)($this, $request);
                    } catch (Throwable $e) {
                        Worker::stopAll(250, $e);
                    }
                    return;
                }
                $this->_recvBuffer = $buffer;
            } else {
                $this->_recvBuffer .= $buffer;
            }
        }
        if ($this->protocol !== null) {
            while ($this->_recvBuffer !== '' && !$this->_isPaused) {
                if ($this->_currentPackageLength) {
                    if ($this->_currentPackageLength > strlen($this->_recvBuffer)) {
                        break;
                    }
                } else {
                    try {
                        $this->_currentPackageLength = $this->protocol::input($this->_recvBuffer, $this);
                    } catch (Throwable $e) {
                    }
                    if ($this->_currentPackageLength === 0) {
                        break;
                    } elseif ($this->_currentPackageLength > 0 && $this->_currentPackageLength <= $this->maxPackageSize) {
                        if ($this->_currentPackageLength > strlen($this->_recvBuffer)) {
                            break;
                        }
                    } else {
                        Worker::safeEcho('Error package. package_length=' . var_export($this->_currentPackageLength, true));
                        $this->destroy();
                        return;
                    }
                }
                ++self::$statistics['total_request'];
                if ($one = strlen($this->_recvBuffer) === $this->_currentPackageLength) {
                    $one_request_buffer = $this->_recvBuffer;
                    $this->_recvBuffer = '';
                } else {
                    $one_request_buffer = substr($this->_recvBuffer, 0, $this->_currentPackageLength);
                    $this->_recvBuffer = substr($this->_recvBuffer, $this->_currentPackageLength);
                }
                $this->_currentPackageLength = 0;
                try {
                    $request = $this->protocol::decode($one_request_buffer, $this);
                    if (static::$_enableCache && (!is_object($request) || $request instanceof request) && $one && !isset($one_request_buffer[512])) {
                        $requests[$one_request_buffer] = $request;
                        if (count($requests) > 512) {
                            unset($requests[key($requests)]);
                        }
                    }
                    ($this->onMessage)($this, $request);
                } catch (Throwable $e) {
                    Worker::stopAll(250, $e);
                }
            }
            return;
        }
        if ($this->_recvBuffer === '' || $this->_isPaused) {
            return;
        }
        ++self::$statistics['total_request'];
        try {
            ($this->onMessage)($this, $this->_recvBuffer);
        } catch (Throwable $e) {
            Worker::stopAll(250, $e);
        }
        $this->_recvBuffer = '';
    }

    public function doSslHandshake($socket): bool|int
    {
        if (feof($socket)) {
            $this->destroy();
            return false;
        }
        $async = $this instanceof asyncTcpConnection;
        if ($async) {
            $type = STREAM_CRYPTO_METHOD_SSLv2_CLIENT | STREAM_CRYPTO_METHOD_SSLv23_CLIENT;
        } else {
            $type = STREAM_CRYPTO_METHOD_SSLv2_SERVER | STREAM_CRYPTO_METHOD_SSLv23_SERVER;
        }
        set_error_handler(function ($errno, $errstr, $file) {
            if (!Worker::$daemonize) {
                Worker::safeEcho("SSL handshake error: $errstr \n");
            }
        });
        $ret = stream_socket_enable_crypto($socket, true, $type);
        restore_error_handler();
        if (false === $ret) {
            $this->destroy();
            return false;
        } elseif (0 === $ret) {
            return 0;
        }
        if (isset($this->onSslHandshake)) {
            try {
                ($this->onSslHandshake)($this);
            } catch (Throwable $e) {
                Worker::stopAll(250, $e);
            }
        }
        return true;
    }

    public function consumeRecvBuffer($length)
    {
        $this->_recvBuffer = substr($this->_recvBuffer, $length);
    }

    public function getSocket()
    {
        return $this->_socket;
    }

    public function bufferIsEmpty(): bool
    {
        return empty($this->_sendBuffer);
    }

    #[ReturnTypeWillChange] public function jsonSerialize(): array
    {
        return ['id' => $this->id, 'status' => $this->getStatus(), 'transport' => $this->transport, 'getRemoteIp' => $this->getRemoteIp(), 'remotePort' => $this->getRemotePort(), 'getRemoteAddress' => $this->getRemoteAddress(), 'getLocalIp' => $this->getLocalIp(), 'getLocalPort' => $this->getLocalPort(), 'getLocalAddress' => $this->getLocalAddress(), 'isIpV4' => $this->isIpV4(), 'isIpV6' => $this->isIpV6(),];
    }

    public function getStatus($raw_output = true): string|array|object|null
    {
        if ($raw_output) {
            return $this->_status;
        }
        return self::$_statusToString[$this->_status];
    }

    public function getRemoteIp(): string
    {
        $pos = strrpos($this->_remoteAddress, ':');
        if ($pos) {
            return substr($this->_remoteAddress, 0, $pos);
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

    public function getRemoteAddress()
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
        if (!is_resource($this->_socket)) {
            return '';
        }
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

    #[Pure] public function isIpV6(): bool
    {
        if ($this->transport === 'unix') {
            return false;
        }
        return str_contains($this->getRemoteIp(), ':');
    }

    public function __destruct()
    {
        static $mod;
        self::$statistics['connection_count']--;
        if (Worker::getGracefulStop()) {
            if (!isset($mod)) {
                $mod = ceil((self::$statistics['connection_count'] + 1) / 3);
            }
            if (0 === self::$statistics['connection_count'] % $mod) {
                Worker::log('worker[' . posix_getpid() . '] remains ' . self::$statistics['connection_count'] . ' connection(s)');
            }
            if (0 === self::$statistics['connection_count']) {
                Worker::stopAll();
            }
        }
    }
}