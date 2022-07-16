<?php namespace yxorP\app\lib\http;

use JetBrains\PhpStorm\Pure;

class response
{
    public $status;
    public ParamStore $headers;
    private string $content;
    private array $statusCodes = array(100 => 'Continue', 101 => 'Switching protocols', 200 => 'OK', 201 => 'Created', 202 => 'Accepted', 203 => 'Non-Authoritative Information', 204 => 'No Content', 205 => 'Reset Content', 206 => 'Partial Content', 300 => 'Multiple Choices', 301 => 'Moved Permanently', 302 => 'Found', 303 => 'See Other', 304 => 'Not Modified', 305 => 'Use Proxy', 307 => 'Temporary Redirect', 400 => 'Bad request', 401 => 'Unauthorized', 402 => 'Payment Required', 403 => 'Forbidden', 404 => 'Not Found', 405 => 'Method Not Allowed', 406 => 'Not Acceptable', 407 => 'Proxy Authentication Required', 408 => 'request Time-out', 409 => 'Conflict', 410 => 'Gone', 411 => 'Length Required', 412 => 'Precondition Failed', 413 => 'request Entity Too Large', 414 => 'request-URI Too Large', 415 => 'Unsupported Media Type', 416 => 'Requested range not satisfiable', 417 => 'Expectation Failed', 429 => 'Too Many Requests', 500 => 'Internal Server Error', 501 => 'Not Implemented', 502 => 'Bad Gateway', 503 => 'Service Unavailable', 504 => 'Gateway Time-out', 505 => 'Unsupported Version');

    public function __construct($content = CHAR_EMPTY_STRING, $status = 200, $headers = array())
    {
        $this->headers = new ParamStore($headers);
        $this->setContent($content);
        $this->setStatusCode($status);
    }

    public function setStatusCode($code): void
    {
        $this->status = $code;
    }

    public function getContent(): string
    {
        $this->sendHeaders();
        return $this->content;
    }

    public function setContent($content): ?string
    {
        return $this->content = $content;
    }

    public function sendHeaders(): void
    {
        if (headers_sent()) return;
        @header(sprintf('HTTP/1.1 %s %s', $this->status, $this->getStatusText()), true, $this->status);
        foreach ($this->headers->all() as $name => $value) {
            $values = is_array($value) ? $value : array($value);
            foreach ($values as $item) @header("$name: $item", false);
        }
    }

    #[Pure] public function getStatusText(): string
    {
        return $this->statusCodes[$this->getStatusCode()];
    }

    public function getStatusCode()
    {
        return $this->status;
    }

    public function printContent(): void
    {
        $this->sendHeaders();
        print($this->content);
    }
}