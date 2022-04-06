<?php

namespace Proxy;

use Laminas\Diactoros\Response;
use Laminas\Diactoros\Uri;
use Proxy\Adapter\AdapterInterface;
use Proxy\Exception\UnexpectedValueException;
use Psr\Http\Message\RequestInterface;
use Relay\RelayBuilder;

/**
 * @property RequestInterface $request
 * @property AdapterInterface $adapter
 */
class Proxy
{
    protected RequestInterface $request;

    protected AdapterInterface $adapter;

    protected array $filters = [];

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function forward(RequestInterface $request): Proxy
    {
        $this->request = $request;

        return $this;
    }

    public function to($target)
    {
        if ($this->request === null) {
            throw new UnexpectedValueException('Missing request instance.');
        }

        $target = new Uri($target);

        $uri = $this->request->getUri()
            ->withScheme($target->getScheme())
            ->withHost($target->getHost())
            ->withPort($target->getPort());

        if ($path = $target->getPath()) {
            $uri = $uri->withPath(rtrim($path, '/') . '/' . ltrim($uri->getPath(), '/'));
        }

        $request = $this->request->withUri($uri);

        $stack = $this->filters;

        $stack[] = function (RequestInterface $request, ResponseInterface $response, callable $next) {
            $response = $this->adapter->send($request);

            return $next($request, $response);
        };

        $relay = (new RelayBuilder)->newInstance($stack);

        return $relay($request, new Response);
    }

    public function filter(callable $callable): Proxy
    {
        $this->filters[] = $callable;

        return $this;
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }
}
