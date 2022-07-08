<?php namespace yxorP\guzzle\Handler;

use BadMethodCallException;
use GuzzleHttp\Psr7\Response;
use RuntimeException;
use function GuzzleHttp\headers_from_lines;
use function GuzzleHttp\normalize_header_keys;

final class EasyHandle
{
    public $handle;
    public $sink;
    public array $headers = [];
    public $response;
    public $request;
    public array $options = [];
    public int $errno = 0;
    public $onHeadersException;

    public function createResponse()
    {
        if (empty($this->headers)) {
            throw new RuntimeException('No headers have been received');
        }
        $startLine = explode(' ', array_shift($this->headers), 3);
        $headers = headers_from_lines($this->headers);
        $normalizedKeys = normalize_header_keys($headers);
        if (!empty($this->options['decode_content']) && isset($normalizedKeys['content-encoding'])) {
            $headers['x-encoded-content-encoding'] = $headers[$normalizedKeys['content-encoding']];
            unset($headers[$normalizedKeys['content-encoding']]);
            if (isset($normalizedKeys['content-length'])) {
                $headers['x-encoded-content-length'] = $headers[$normalizedKeys['content-length']];
                $bodyLength = (int)$this->sink->getSize();
                if ($bodyLength) {
                    $headers[$normalizedKeys['content-length']] = $bodyLength;
                } else {
                    unset($headers[$normalizedKeys['content-length']]);
                }
            }
        }
        $this->response = new Response($startLine[1], $headers, $this->sink, substr($startLine[0], 5), isset($startLine[2]) ? $startLine[2] : null);
    }

    public function __get($name)
    {
        $msg = $name === 'handle' ? 'The EasyHandle has been released' : 'Invalid property: ' . $name;
        throw new BadMethodCallException($msg);
    }
}