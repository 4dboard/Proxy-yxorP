<?php namespace yxorP\app\lib\proxy\psr7;

use InvalidArgumentException;
use yxorP\app\lib\psr\http\message\streamInterface;

trait messageTrait
{
    private $headers = [];
    private $headerNames = [];
    private $protocol = '1.1';
    private $stream;

    public function getProtocolVersion()
    {
        return $this->protocol;
    }

    public function withProtocolVersion($version)
    {
        if ($this->protocol === $version) {
            return $this;
        }
        $new = clone $this;
        $new->protocol = $version;
        return $new;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function hasHeader($header)
    {
        return isset($this->headerNames[strtolower($header)]);
    }

    public function getHeaderLine($header)
    {
        return implode(', ', $this->getHeader($header));
    }

    public function getHeader($header)
    {
        $header = strtolower($header);
        if (!isset($this->headerNames[$header])) {
            return [];
        }
        $header = $this->headerNames[$header];
        return $this->headers[$header];
    }

    public function withHeader($header, $value)
    {
        $this->assertHeader($header);
        $value = $this->normalizeHeaderValue($value);
        $normalized = strtolower($header);
        $new = clone $this;
        if (isset($new->headerNames[$normalized])) {
            unset($new->headers[$new->headerNames[$normalized]]);
        }
        $new->headerNames[$normalized] = $header;
        $new->headers[$header] = $value;
        return $new;
    }

    public function withAddedHeader($header, $value)
    {
        $this->assertHeader($header);
        $value = $this->normalizeHeaderValue($value);
        $normalized = strtolower($header);
        $new = clone $this;
        if (isset($new->headerNames[$normalized])) {
            $header = $this->headerNames[$normalized];
            $new->headers[$header] = array_merge($this->headers[$header], $value);
        } else {
            $new->headerNames[$normalized] = $header;
            $new->headers[$header] = $value;
        }
        return $new;
    }

    public function withoutHeader($header)
    {
        $normalized = strtolower($header);
        if (!isset($this->headerNames[$normalized])) {
            return $this;
        }
        $header = $this->headerNames[$normalized];
        $new = clone $this;
        unset($new->headers[$header], $new->headerNames[$normalized]);
        return $new;
    }

    public function getBody()
    {
        if (!$this->stream) {
            $this->stream = stream_for('');
        }
        return $this->stream;
    }

    public function withBody(streamInterface $body)
    {
        if ($body === $this->stream) {
            return $this;
        }
        $new = clone $this;
        $new->stream = $body;
        return $new;
    }

    private function assertHeader($header)
    {
        if (!is_string($header)) {
            throw new InvalidArgumentException(sprintf('Header name must be a string but %s provided.', is_object($header) ? get_class($header) : gettype($header)));
        }
        if ($header === '') {
            throw new InvalidArgumentException('Header name can not be empty.');
        }
    }

    private function normalizeHeaderValue($value)
    {
        if (!is_array($value)) {
            return $this->trimHeaderValues([$value]);
        }
        if (count($value) === 0) {
            throw new InvalidArgumentException('Header value can not be an empty array.');
        }
        return $this->trimHeaderValues($value);
    }

    private function trimHeaderValues(array $values)
    {
        return array_map(function ($value) {
            if (!is_scalar($value) && null !== $value) {
                throw new InvalidArgumentException(sprintf('Header value must be scalar or null but %s provided.', is_object($value) ? get_class($value) : gettype($value)));
            }
            return trim((string)$value, " \t");
        }, $values);
    }

    private function setHeaders(array $headers)
    {
        $this->headerNames = $this->headers = [];
        foreach ($headers as $header => $value) {
            if (is_int($header)) {
                $header = (string)$header;
            }
            $this->assertHeader($header);
            $value = $this->normalizeHeaderValue($value);
            $normalized = strtolower($header);
            if (isset($this->headerNames[$normalized])) {
                $header = $this->headerNames[$normalized];
                $this->headers[$header] = array_merge($this->headers[$header], $value);
            } else {
                $this->headerNames[$normalized] = $header;
                $this->headers[$header] = $value;
            }
        }
    }
}
