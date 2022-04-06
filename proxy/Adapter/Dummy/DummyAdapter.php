<?php

namespace Proxy\Adapter\Dummy;

use Laminas\Diactoros\Response;
use Proxy\Adapter\AdapterInterface;
use Psr\Http\Message\RequestInterface;

class DummyAdapter implements AdapterInterface
{
    public function send(RequestInterface $request): Response
    {
        return new Response($request->getBody(), 200);
    }
}
