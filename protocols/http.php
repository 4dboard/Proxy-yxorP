<?php namespace yxorP\protocols;

use yxorP\connection\tcpConnection;
use yxorP\protocols\Http\request;
use yxorP\protocols\Http\response;
use function count;
use function filesize;
use function fopen;
use function fread;
use function fseek;
use function ftell;
use function ini_get;
use function is_array;
use function is_object;
use function key;
use function preg_match;
use function strlen;
use function strpos;
use function strstr;
use function substr;
use function sys_get_temp_dir;

/* A protocol class. */

class http
{
    /* Setting the class name for the request class. */
    private static string $_requestClass = request::class;
    /* A variable that is used to enable or disable caching. */
    /* Setting the upload directory to the default. */
    private static string $_uploadTmpDir = '';
    private static bool $_enableCache = true;

    /* Setting the class name for the request class. */
    public static function requestClass($class_name = null): string
    {
        if ($class_name) {
            static::$_requestClass = $class_name;
        }
        return static::$_requestClass;
    }

    /* Setting the value of `$_enableCache` to the value of `$value`. */
    public static function enableCache($value)
    {
        static::$_enableCache = (bool)$value;
    }

    /* Checking if the request is a GET, OPTIONS, HEAD, or DELETE request. If it is, it returns the length of the header.
    If it is not, it checks if it is a POST, PUT, or PATCH request. If it is, it checks if the request has a
    content-length header. If it does, it returns the length of the header plus the content-length. If it does not, it
    closes the connection. */
    public static function input($recv_buffer, tcpConnection $connection)
    {
        static $input = [];
        if (!isset($recv_buffer[512]) && isset($input[$recv_buffer])) {
            return $input[$recv_buffer];
        }
        $crlf_pos = strpos($recv_buffer, "\r\n\r\n");
        if (false === $crlf_pos) {
            if ($recv_len = strlen($recv_buffer) >= 16384) {
                $connection->close("HTTP/1.1 413 request Entity Too Large\r\n\r\n");
                return 0;
            }
            return 0;
        }
        $head_len = $crlf_pos + 4;
        $method = strstr($recv_buffer, ' ', true);
        if ($method === 'GET' || $method === 'OPTIONS' || $method === 'HEAD' || $method === 'DELETE') {
            if (!isset($recv_buffer[512])) {
                $input[$recv_buffer] = $head_len;
                if (count($input) > 512) {
                    unset($input[key($input)]);
                }
            }
            return $head_len;
        } else if ($method !== 'POST' && $method !== 'PUT' && $method !== 'PATCH') {
            $connection->close("HTTP/1.1 400 Bad request\r\n\r\n", true);
            return 0;
        }
        $header = substr($recv_buffer, 0, $crlf_pos);
        $length = false;
        if ($pos = strpos($header, "\r\nContent-Length: ")) {
            $length = $head_len + (int)substr($header, $pos + 18, 10);
        } else if (preg_match("/\r\ncontent-length: ?(\d+)/i", $header, $match)) {
            $length = $head_len + $match[1];
        }
        if ($length !== false) {
            if (!isset($recv_buffer[512])) {
                $input[$recv_buffer] = $length;
                if (count($input) > 512) {
                    unset($input[key($input)]);
                }
            }
            if ($length > $connection->maxPackageSize) {
                $connection->close("HTTP/1.1 413 request Entity Too Large\r\n\r\n");
                return 0;
            }
            return $length;
        }
        $connection->close("HTTP/1.1 400 Bad request\r\n\r\n", true);
        return 0;
    }

    /* Checking if the request is a GET, OPTIONS, HEAD, or DELETE request. If it is, it returns the length of the header.
    If it is not, it checks if it is a POST, PUT, or PATCH request. If it is, it checks if the request has a
    content-length header. If it does, it returns the length of the header plus the content-length. If it does not, it
    closes the connection. */
    public static function decode($recv_buffer, tcpConnection $connection)
    {
        static $requests = [];
        $cacheable = static::$_enableCache && !isset($recv_buffer[512]);
        if (true === $cacheable && isset($requests[$recv_buffer])) {
            $request = clone $requests[$recv_buffer];
            $request->connection = $connection;
            $connection->__request = $request;
            $request->properties = [];
            return $request;
        }
        $request = new static::$_requestClass($recv_buffer);
        $request->connection = $connection;
        $connection->__request = $request;
        if (true === $cacheable) {
            $requests[$recv_buffer] = $request;
            if (count($requests) > 512) {
                unset($requests[key($requests)]);
            }
        }
        return $request;
    }

    /* Checking if the request is a GET, OPTIONS, HEAD, or DELETE request. If it is, it returns the length of the header.
     If it is not, it checks if it is a POST, PUT, or PATCH request. If it is, it checks if the request has a
     content-length header. If it does, it returns the length of the header plus the content-length. If it does not, it
     closes the connection. */
    public static function encode($response, tcpConnection $connection): string
    {
        if (isset($connection->__request)) {
            $connection->__request->session = null;
            $connection->__request->connection = null;
            $connection->__request = null;
        }
        if (!is_object($response)) {
            $ext_header = '';
            if (isset($connection->__header)) {
                foreach ($connection->__header as $name => $value) if (is_array($value)) foreach ($value as $item) $ext_header = "$name: $item\r\n"; else    $ext_header = "$name: $value\r\n";
                unset($connection->__header);
            }
            $body_len = strlen((string)$response);
            return "HTTP/1.1 200 OK\r\nServer: yxorP\r\n{$ext_header}connection: keep-alive\r\nContent-Type: text/html;charset=utf-8\r\nContent-Length: $body_len\r\n\r\n$response";
        }
        if (isset($connection->__header)) {
            $response->withHeaders($connection->__header);
            unset($connection->__header);
        }
        if (isset($response->file)) {
            $file = $response->file['file'];
            $offset = $response->file['offset'];
            $length = $response->file['length'];
            $file_size = (int)filesize($file);
            $body_len = $length > 0 ? $length : $file_size - $offset;
            $response->withHeaders(['Content-Length' => $body_len, 'Accept-Ranges' => 'bytes',]);
            if ($offset || $length) {
                $offset_end = $offset + $body_len - 1;
                $response->header('Content-Range', "bytes $offset-$offset_end/$file_size");
            }
            if ($body_len < 2 * 1024 * 1024) {
                $connection->send($response . file_get_contents($file, false, null, $offset, $body_len), true);
                return '';
            }
            $handler = fopen($file, 'r');
            if (false === $handler) {
                $connection->close(new response(403, null, '403 Forbidden'));
                return '';
            }
            $connection->send((string)$response, true);
            static::sendStream($connection, $handler, $offset, $length);
            return '';
        }
        return (string)$response;
    }

    /* Sending a stream. */
    protected static function sendStream(tcpConnection $connection, $handler, $offset = 0, $length = 0)
    {
        $connection->bufferFull = false;
        if ($offset !== 0) fseek($handler, $offset);
        $offset_end = $offset + $length;
        $do_write = function () use ($connection, $handler, $length, $offset_end) {
            while ($connection->bufferFull === false) {
                $size = 1024 * 1024;
                if ($length !== 0) {
                    $tell = ftell($handler);
                    $remain_size = $offset_end - $tell;
                    if ($remain_size <= 0) {
                        fclose($handler);
                        $connection->onBufferDrain = null;
                        return;
                    }
                    $size = $remain_size > $size ? $size : $remain_size;
                }
                $buffer = fread($handler, $size);
                if ($buffer === '' || $buffer === false) {
                    fclose($handler);
                    $connection->onBufferDrain = null;
                    return;
                }
                $connection->send($buffer, true);
            }
        };
        $connection->onBufferFull = function ($connection) {
            $connection->bufferFull = true;
        };
        $connection->onBufferDrain = function ($connection) use ($do_write) {
            $connection->bufferFull = false;
            $do_write();
        };
        $do_write();
    }

    /* Setting the upload directory to the default. */
    public static function uploadTmpDir($dir = null): string
    {
        if (null !== $dir) static::$_uploadTmpDir = $dir;
        if (static::$_uploadTmpDir === '') if ($upload_tmp_dir = ini_get('upload_tmp_dir')) static::$_uploadTmpDir = $upload_tmp_dir; else if ($upload_tmp_dir = sys_get_temp_dir()) static::$_uploadTmpDir = $upload_tmp_dir;
        return static::$_uploadTmpDir;
    }
}