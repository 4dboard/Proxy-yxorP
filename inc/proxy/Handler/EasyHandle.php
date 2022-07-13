<?php

namespace yxorP\inc\proxy\Handler;

use yxorP\inc\proxy\Psr7\Response;
use yxorP\inc\psr\Http\Message\RequestInterface;
use yxorP\inc\psr\Http\Message\ResponseInterface;
use yxorP\inc\psr\Http\Message\StreamInterface;
use function yxorP\inc\proxy\headers_from_lines;
use function yxorP\inc\proxy\normalize_header_keys;

/**
 * Represents a cURL easy handle and the data it populates.
 *
 * @internal
 */
final class EasyHandle
{
    /** @var resource cURL resource */
    public $handle;

    /** @var StreamInterface Where data is being written */
    public StreamInterface $sink;

    /** @var array Received HTTP headers so far */
    public array $headers = [];

    /** @var ResponseInterface Received response (if any) */
    public ResponseInterface $response;

    /** @var RequestInterface Request being sent */
    public RequestInterface $request;

    /** @var array Request options */
    public array $options = [];

    /** @var int cURL error number (if any) */
    public int $errno = 0;

    /** @var Exception Exception during on_headers (if any) */
    public Exception $onHeadersException;

    /**
     * Attach a response to the easy handle based on the received headers.
     *
     * @throws RuntimeException if no headers have been received.
     */
    public function createResponse()
    {
        if (empty($this->headers)) {
            throw new RuntimeException('No headers have been received');
        }

        // HTTP-version SP status-code SP reason-phrase
        $startLine = explode(' ', array_shift($this->headers), 3);
        $headers = headers_from_lines($this->headers);
        $normalizedKeys = normalize_header_keys($headers);

        if (!empty($this->options['decode_content'])
            && isset($normalizedKeys['content-encoding'])
        ) {
            $headers['x-encoded-content-encoding']
                = $headers[$normalizedKeys['content-encoding']];
            unset($headers[$normalizedKeys['content-encoding']]);
            if (isset($normalizedKeys['content-length'])) {
                $headers['x-encoded-content-length']
                    = $headers[$normalizedKeys['content-length']];

                $bodyLength = (int)$this->sink->getSize();
                if ($bodyLength) {
                    $headers[$normalizedKeys['content-length']] = $bodyLength;
                } else {
                    unset($headers[$normalizedKeys['content-length']]);
                }
            }
        }

        // Attach a response to the easy handle with the parsed headers.
        $this->response = new Response(
            $startLine[1],
            $headers,
            $this->sink,
            substr($startLine[0], 5),
            isset($startLine[2]) ? $startLine[2] : null
        );
    }

    public function __get($name)
    {
        $msg = $name === 'handle'
            ? 'The EasyHandle has been released'
            : 'Invalid property: ' . $name;
        throw new BadMethodCallException($msg);
    }
}
