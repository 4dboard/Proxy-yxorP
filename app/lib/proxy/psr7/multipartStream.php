<?php namespace yxorP\app\lib\proxy\psr7;

use InvalidArgumentException;
use yxorP\app\lib\psr\http\message\streamInterface;

class multipartStream implements streamInterface
{
    use aStreamDecoratorTrait;

    private $boundary;

    public function __construct(array $elements = [], $boundary = null)
    {
        $this->boundary = $boundary ?: sha1(uniqid('', true));
        $this->stream = $this->createStream($elements);
    }

    protected function createStream(array $elements)
    {
        $stream = new appendStream();
        foreach ($elements as $element) {
            $this->addElement($stream, $element);
        }
        $stream->addStream(stream_for("--{$this->boundary}--\r\n"));
        return $stream;
    }

    private function addElement(appendStream $stream, array $element)
    {
        foreach (['contents', 'name'] as $key) {
            if (!array_key_exists($key, $element)) {
                throw new InvalidArgumentException("A '{$key}' key is required");
            }
        }
        $element['contents'] = stream_for($element['contents']);
        if (empty($element['filename'])) {
            $uri = $element['contents']->getMetadata('uri');
            if (substr($uri, 0, 6) !== 'php://') {
                $element['filename'] = $uri;
            }
        }
        list($body, $headers) = $this->createElement($element['name'], $element['contents'], isset($element['filename']) ? $element['filename'] : null, isset($element['headers']) ? $element['headers'] : []);
        $stream->addStream(stream_for($this->getHeaders($headers)));
        $stream->addStream($body);
        $stream->addStream(stream_for("\r\n"));
    }

    private function createElement($name, streamInterface $stream, $filename, array $headers)
    {
        $disposition = $this->getHeader($headers, 'content-disposition');
        if (!$disposition) {
            $headers['Content-Disposition'] = ($filename === '0' || $filename) ? sprintf('form-data; name="%s"; filename="%s"', $name, basename($filename)) : "form-data; name=\"{$name}\"";
        }
        $length = $this->getHeader($headers, 'content-length');
        if (!$length) {
            if ($length = $stream->getSize()) {
                $headers['Content-Length'] = (string)$length;
            }
        }
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

    private function getHeaders(array $headers)
    {
        $str = '';
        foreach ($headers as $key => $value) {
            $str .= "{$key}: {$value}\r\n";
        }
        return "--{$this->boundary}\r\n" . trim($str) . "\r\n\r\n";
    }

    public function getBoundary()
    {
        return $this->boundary;
    }

    public function isWritable()
    {
        return false;
    }
}
