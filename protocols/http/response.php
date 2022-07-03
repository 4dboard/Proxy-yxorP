<?php namespace yxorP\protocols\Http;

use function array_merge_recursive;
use function explode;
use function file;
use function filemtime;
use function gmdate;
use function is_array;
use function is_file;
use function pathinfo;
use function preg_match;
use function rawurlencode;
use function strlen;
use function substr;
use const FILE_IGNORE_NEW_LINES;
use const FILE_SKIP_EMPTY_LINES;

/* A class that is used to create a response object. */

class response
{
    private static $_mimeTypeMap = null;
    private static array $_phrases = [100 => 'Continue', 101 => 'Switching protocols', 102 => 'Processing', 200 => 'OK', 201 => 'Created', 202 => 'Accepted', 203 => 'Non-Authoritative Information', 204 => 'No Content', 205 => 'Reset Content', 206 => 'Partial Content', 207 => 'Multi-status', 208 => 'Already Reported', 300 => 'Multiple Choices', 301 => 'Moved Permanently', 302 => 'Found', 303 => 'See Other', 304 => 'Not Modified', 305 => 'Use Proxy', 306 => 'Switch Proxy', 307 => 'Temporary Redirect', 400 => 'Bad request', 401 => 'Unauthorized', 402 => 'Payment Required', 403 => 'Forbidden', 404 => 'Not Found', 405 => 'Method Not Allowed', 406 => 'Not Acceptable', 407 => 'Proxy Authentication Required', 408 => 'request Time-out', 409 => 'Conflict', 410 => 'Gone', 411 => 'Length Required', 412 => 'Precondition Failed', 413 => 'request Entity Too Large', 414 => 'request-URI Too Large', 415 => 'Unsupported Media Type', 416 => 'Requested range not satisfiable', 417 => 'Expectation Failed', 418 => 'I\'m a teapot', 422 => 'Unprocessable Entity', 423 => 'Locked', 424 => 'Failed Dependency', 425 => 'Unordered Collection', 426 => 'Upgrade Required', 428 => 'Precondition Required', 429 => 'Too Many Requests', 431 => 'request Header Fields Too Large', 451 => 'Unavailable For Legal Reasons', 500 => 'Internal Server Error', 501 => 'Not Implemented', 502 => 'Bad Gateway', 503 => 'Service Unavailable', 504 => 'Gateway Time-out', 505 => 'HTTP Version not supported', 506 => 'Variant Also Negotiates', 507 => 'Insufficient Storage', 508 => 'Loop Detected', 511 => 'Network Authentication Required',];
    public $file = null;
    private ?array $_header = null;
    private mixed $_status = null;
    private $_reason = null;
    private string $_version = '1.1';
    private ?string $_body = null;

    /* The constructor of the class. */
    public function __construct($status = 200, $headers = [], $body = '')
    {
        $this->_status = $status;
        $this->_header = $headers;
        $this->_body = (string)$body;
    }

    /* Initializing the mime type map. */
    /* Initializing the mime type map. */
    public static function init()
    {
        static::initMimeTypeMap();
    }

    /* Initializing the mime type map. */
    public static function initMimeTypeMap()
    {
        $mime_file = __DIR__ . '/mime.types';
        $items = file($mime_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($items as $content) {
            if (preg_match("/\s*(\S+)\s+(\S.+)/", $content, $match)) {
                $mime_type = $match[1];
                $extension_var = $match[2];
                $extension_array = explode(' ', substr($extension_var, 0, -1));
                foreach ($extension_array as $file_extension) {
                    static::$_mimeTypeMap[$file_extension] = $mime_type;
                }
            }
        }
    }

    /* A method that is used to set a header. */
    public function withHeader($name, $value): static
    {
        return $this->header($name, $value);
    }

    /* Setting a header. */
    public function header($name, $value): static
    {
        $this->_header[$name] = $value;
        return $this;
    }

    /* Merging the headers. */
    public function withHeaders($headers): static
    {
        $this->_header = array_merge_recursive($this->_header, $headers);
        return $this;
    }

    /* It removes a header. */
    public function withoutHeader($name): static
    {
        unset($this->_header[$name]);
        return $this;
    }

    /* Getting the header. */
    public function getHeader($name)
    {
        if (!isset($this->_header[$name])) {
            return null;
        }
        return $this->_header[$name];
    }

    /* Getting the headers. */
    public function getHeaders(): ?array
    {
        return $this->_header;
    }

    /* Returning the status code. */
    public function getStatusCode()
    {
        return $this->_status;
    }

    /* Returning the reason phrase. */
    public function getReasonPhrase()
    {
        return $this->_reason;
    }

    /* Setting the protocol version. */
    public function withProtocolVersion($version): static
    {
        $this->_version = $version;
        return $this;
    }

    /* Returning the body of the response. */
    public function rawBody(): ?string
    {
        return $this->_body;
    }

    /* Used to send a file to the client. */
    public function withFile($file, $offset = 0, $length = 0): response|static
    {
        if (!is_file($file)) {
            return $this->withStatus(404)->withBody('<h3>404 Not Found</h3>');
        }
        $this->file = ['file' => $file, 'offset' => $offset, 'length' => $length];
        return $this;
    }

    /* Setting the body of the response. */
    public function withBody($body): static
    {
        $this->_body = (string)$body;
        return $this;
    }

    /* Setting the status code and the reason phrase. */
    public function withStatus($code, $reason_phrase = null): static
    {
        $this->_status = $code;
        $this->_reason = $reason_phrase;
        return $this;
    }

    /* Setting a cookie. */
    public function cookie($name, $value = '', $max_age = null, $path = '', $domain = '', $secure = false, $http_only = false, $same_site = false): static
    {
        $this->_header['Set-Cookie'][] = $name . '=' . rawurlencode($value) . (empty($domain) ? '' : '; Domain=' . $domain) . ($max_age === null ? '' : '; Max-Age=' . $max_age) . (empty($path) ? '' : '; Path=' . $path) . (!$secure ? '' : '; Secure') . (!$http_only ? '' : '; HttpOnly') . (empty($same_site) ? '' : '; SameSite=' . $same_site);
        return $this;
    }

    /* Used to convert the response object to a string. */
    public function __toString()
    {
        if (isset($this->file)) return $this->createHeadForFile($this->file);
        $reason = $this->_reason ?: static::$_phrases[$this->_status] ?? '';
        $body_len = strlen($this->_body);
        if (empty($this->_header)) return "HTTP/{$this->_version} {$this->_status} $reason\r\nServer: yxorP\r\nContent-Type: text/html;charset=utf-8\r\nContent-Length: $body_len\r\nconnection: keep-alive\r\n\r\n{$this->_body}";
        $head = "HTTP/{$this->_version} {$this->_status} $reason\r\n";
        $headers = $this->_header;
        if (!isset($headers['Server'])) $head .= "Server: yxorP\r\n";
        foreach ($headers as $name => $value) {
            if (is_array($value)) {
                foreach ($value as $item) $head .= "$name: $item\r\n";
                continue;
            }
            $head .= "$name: $value\r\n";
        }
        if (!isset($headers['connection'])) $head .= "connection: keep-alive\r\n";
        if (!isset($headers['Content-Type'])) $head .= "Content-Type: text/html;charset=utf-8\r\n"; else if ($headers['Content-Type'] === 'text/event-stream') return $head . $this->_body;
        if (!isset($headers['Transfer-Encoding'])) $head .= "Content-Length: $body_len\r\n\r\n"; else  return "$head\r\n" . dechex($body_len) . "\r\n{$this->_body}\r\n";
        return $head . $this->_body;
    }

    protected function createHeadForFile($file_info): string
    {
        $file = $file_info['file'];
        $reason = $this->_reason ?: static::$_phrases[$this->_status];
        $head = "HTTP/{$this->_version} {$this->_status} $reason\r\n";
        $headers = $this->_header;
        if (!isset($headers['Server'])) {
            $head .= "Server: yxorP\r\n";
        }
        foreach ($headers as $name => $value) {
            if (is_array($value)) {
                foreach ($value as $item) {
                    $head .= "$name: $item\r\n";
                }
                continue;
            }
            $head .= "$name: $value\r\n";
        }
        if (!isset($headers['connection'])) {
            $head .= "connection: keep-alive\r\n";
        }
        $file_info = pathinfo($file);
        $extension = $file_info['extension'] ?? '';
        $base_name = $file_info['basename'] ?? 'unknown';
        if (!isset($headers['Content-Type'])) {
            if (isset(self::$_mimeTypeMap[$extension])) {
                $head .= "Content-Type: " . self::$_mimeTypeMap[$extension] . "\r\n";
            } else {
                $head .= "Content-Type: application/octet-stream\r\n";
            }
        }
        if (!isset($headers['Content-Disposition']) && !isset(self::$_mimeTypeMap[$extension])) {
            $head .= "Content-Disposition: attachment; filename=\"$base_name\"\r\n";
        }
        if (!isset($headers['Last-Modified'])) {
            if ($mtime = filemtime($file)) {
                $head .= 'Last-Modified: ' . gmdate('D, d M Y H:i:s', $mtime) . ' GMT' . "\r\n";
            }
        }
        return "{$head}\r\n";
    }
}

response::init();