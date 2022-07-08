<?php namespace yxorP\proxy\Psr7;

use InvalidArgumentException;
use yxorP\psr\Http\Message\StreamInterface;

trait MessageTrait
{
    private array $headers = [];
    private array $headerNames = [];
    private string $protocol = '1.1';
    private $stream;

    public function getProtocolVersion(): string
    {
        return $this->protocol;
    }

    public function withProtocolVersion(string $version): mixed
    {
        if ($this->protocol === $version) {
            return $this;
        }
        $new = clone $this;
        $new->protocol = $version;
        return $new;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function hasHeader(string $name): bool
    {
        return isset($this->headerNames[strtolower($name)]);
    }

    public function getHeaderLine(string $name): string
    {
        return implode(', ', $this->getHeader($name));
    }

    public function getHeader(string $name): mixed
    {
        $name = strtolower($name);
        if (!isset($this->headerNames[$name])) {
            return [];
        }
        $name = $this->headerNames[$name];
        return $this->headers[$name];
    }

    public function withHeader(string $name, array|string $value): \Request|\Response
    {
        $this->assertHeader($name);
        $value = $this->normalizeHeaderValue($value);
        $normalized = strtolower($name);
        $new = clone $this;
        if (isset($new->headerNames[$normalized])) {
            unset($new->headers[$new->headerNames[$normalized]]);
        }
        $new->headerNames[$normalized] = $name;
        $new->headers[$name] = $value;
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

    private function normalizeHeaderValue($value): array
    {
        if (!is_array($value)) {
            return $this->trimHeaderValues([$value]);
        }
        if (count($value) === 0) {
            throw new InvalidArgumentException('Header value can not be an empty array.');
        }
        return $this->trimHeaderValues($value);
    }

    private function trimHeaderValues(array $values): array
    {
        return array_map(function ($value) {
            if (!is_scalar($value) && null !== $value) {
                throw new InvalidArgumentException(sprintf('Header value must be scalar or null but %s provided.', is_object($value) ? get_class($value) : gettype($value)));
            }
            return trim((string)$value, " \t");
        }, $values);
    }

    public function withAddedHeader(string $name, array|string $value): \Request|\Response
    {
        $this->assertHeader($name);
        $value = $this->normalizeHeaderValue($value);
        $normalized = strtolower($name);
        $new = clone $this;
        if (isset($new->headerNames[$normalized])) {
            $name = $this->headerNames[$normalized];
            $new->headers[$name] = array_merge($this->headers[$name], $value);
        } else {
            $new->headerNames[$normalized] = $name;
            $new->headers[$name] = $value;
        }
        return $new;
    }

    public function withoutHeader(string $name): mixed
    {
        $normalized = strtolower($name);
        if (!isset($this->headerNames[$normalized])) {
            return $this;
        }
        $name = $this->headerNames[$normalized];
        $new = clone $this;
        unset($new->headers[$name], $new->headerNames[$normalized]);
        return $new;
    }

    public function getBody(): mixed
    {
        if (!$this->stream) {
            $this->stream = stream_for();
        }
        return $this->stream;
    }

    public function withBody(StreamInterface $body): mixed
    {
        if ($body === $this->stream) {
            return $this;
        }
        $new = clone $this;
        $new->stream = $body;
        return $new;
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