<?php

namespace yxorP\inc\proxy\Psr7;

use InvalidArgumentException;
use yxorP\inc\psr\Http\Message\StreamInterface;

/**
 * Stream that when read returns bytes for a streaming multipart or
 * multipart/form-data stream.
 */
class MultipartStream implements StreamInterface
{
    use AAAStreamDecoratorTrait;

    private string $boundary;

    /**
     * @param array $elements Array of associative arrays, each containing a
     *                         required "name" key mapping to the form field,
     *                         name, a required "contents" key mapping to a
     *                         StreamInterface/resource/string, an optional
     *                         "headers" associative array of custom headers,
     *                         and an optional "filename" key mapping to a
     *                         string to send as the filename in the part.
     * @param string|null $boundary You can optionally provide a specific boundary
     *
     * @throws InvalidArgumentException
     */
    public function __construct(array $elements = [], string $boundary = null)
    {
        $this->boundary = $boundary ?: sha1(uniqid('', true));
        $this->stream = $this->createStream($elements);
    }

    /**
     * Create the aggregate stream that will be used to upload the POST data
     */
    protected function createStream(array $elements): AppendStream
    {
        $stream = new AppendStream();

        foreach ($elements as $element) {
            $this->addElement($stream, $element);
        }

        // Add the trailing boundary with CRLF
        $stream->addStream(stream_for("--{$this->boundary}--\r\n"));

        return $stream;
    }

    private function addElement(AppendStream $stream, array $element)
    {
        foreach (['contents', 'name'] as $key) {
            if (!array_key_exists($key, $element)) {
                throw new InvalidArgumentException("A '{$key}' key is required");
            }
        }

        $element['contents'] = stream_for($element['contents']);

        if (empty($element['filename'])) {
            $uri = $element['contents']->getMetadata('uri');
            if (!str_starts_with($uri, 'php://')) {
                $element['filename'] = $uri;
            }
        }

        list($body, $headers) = $this->createElement(
            $element['name'],
            $element['contents'],
            $element['filename'] ?? null,
            $element['headers'] ?? []
        );

        $stream->addStream(stream_for($this->getHeaders($headers)));
        $stream->addStream($body);
        $stream->addStream(stream_for("\r\n"));
    }

    /**
     * @return array
     */
    private function createElement($name, StreamInterface $stream, $filename, array $headers): array
    {
        // Set a default content-disposition header if one was no provided
        $disposition = $this->getHeader($headers, 'content-disposition');
        if (!$disposition) {
            $headers['Content-Disposition'] = ($filename === '0' || $filename)
                ? sprintf('form-data; name="%s"; filename="%s"',
                    $name,
                    basename($filename))
                : "form-data; name=\"{$name}\"";
        }

        // Set a default content-length header if one was no provided
        $length = $this->getHeader($headers, 'content-length');
        if (!$length) {
            if ($length = $stream->getSize()) {
                $headers['Content-Length'] = (string)$length;
            }
        }

        // Set a default Content-Type if one was not supplied
        $type = $this->getHeader($headers, 'content-type');
        if (!$type && ($filename === '0' || $filename)) {
            if ($type = mimetype_from_filename($filename)) {
                $headers['Content-Type'] = $type;
            }
        }

        return [$stream, $headers];
    }

    private function getHeader(array $headers, $key)
    {
        $lowercaseHeader = strtolower($key);
        foreach ($headers as $k => $v) {
            if (strtolower($k) === $lowercaseHeader) {
                return $v;
            }
        }

        return null;
    }

    /**
     * Get the headers needed before transferring the content of a POST file
     */
    private function getHeaders(array $headers): string
    {
        $str = '';
        foreach ($headers as $key => $value) {
            $str .= "{$key}: {$value}\r\n";
        }

        return "--{$this->boundary}\r\n" . trim($str) . "\r\n\r\n";
    }

    /**
     * Get the boundary
     *
     * @return string
     */
    public function getBoundary(): string
    {
        return $this->boundary;
    }

    public function isWritable(): bool
    {
        return false;
    }
}
