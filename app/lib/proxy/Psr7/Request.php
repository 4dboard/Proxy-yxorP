<?php namespace yxorP\app\lib\proxy\Psr7;

use InvalidArgumentException;
use yxorP\app\lib\Psr\Http\Message\RequestInterface;
use yxorP\app\lib\Psr\Http\Message\UriInterface;

class Request implements RequestInterface
{
    use MessageTrait;

    private $method;
    private $requestTarget;
    private $uri;

    public function __construct($method, $uri, array $headers = [], $body = null, $version = '1.1')
    {
        $this->assertMethod($method);
        if (!($uri instanceof UriInterface)) {
            $uri = new Uri($uri);
        }
        $this->method = strtoupper($method);
        $this->uri = $uri;
        $this->setHeaders($headers);
        $this->protocol = $version;
        if (!isset($this->headerNames['host'])) {
            $this->updateHostFromUri();
        }
        if ($body !== '' && $body !== null) {
            $this->stream = stream_for($body);
        }
    }

    private function assertMethod($method)
    {
        if (!is_string($method) || $method === '') {
            throw new InvalidArgumentException('Method must be a non-empty string.');
        }
    }

    private function updateHostFromUri()
    {
        $host = $this->uri->getHost();
        if ($host == '') {
            return;
        }
        if (($port = $this->uri->getPort()) !== null) {
            $host .= ':' . $port;
        }
        if (isset($this->headerNames['host'])) {
            $header = $this->headerNames['host'];
        } else {
            $header = 'Host';
            $this->headerNames['host'] = 'Host';
        }
        $this->headers = [$header => [$host]] + $this->headers;
    }

    public function getRequestTarget()
    {
        if ($this->requestTarget !== null) {
            return $this->requestTarget;
        }
        $target = $this->uri->getPath();
        if ($target == '') {
            $target = '/';
        }
        if ($this->uri->getQuery() != '') {
            $target .= '?' . $this->uri->getQuery();
        }
        return $target;
    }

    public function withRequestTarget($requestTarget)
    {
        if (preg_match('#\s#', $requestTarget)) {
            throw new InvalidArgumentException('Invalid request target provided; cannot contain whitespace');
        }
        $new = clone $this;
        $new->requestTarget = $requestTarget;
        return $new;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function withMethod($method)
    {
        $this->assertMethod($method);
        $new = clone $this;
        $new->method = strtoupper($method);
        return $new;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function withUri(UriInterface $uri, $preserveHost = false)
    {
        if ($uri === $this->uri) {
            return $this;
        }
        $new = clone $this;
        $new->uri = $uri;
        if (!$preserveHost || !isset($this->headerNames['host'])) {
            $new->updateHostFromUri();
        }
        return $new;
    }
}
