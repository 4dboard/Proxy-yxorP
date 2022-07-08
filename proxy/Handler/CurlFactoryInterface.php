<?php namespace yxorP\proxy\Handler;

use yxorP\psr\Http\Message\RequestInterface;

interface CurlFactoryInterface
{
    public function create(RequestInterface $request, array $options);

    public function release(EasyHandle $easy);
}