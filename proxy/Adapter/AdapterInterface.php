<?php

namespace Proxy\Adapter;

use Psr\Http\Message\RequestInterface;

interface AdapterInterface
{
    public function send(RequestInterface $request);
}
