<?php namespace yxorP\proxzle\Handler;

use yxorP\psr\Http\Message\RequestInterface;

interface CurlFactoryInterface
{
    public function create(RequestInterface $request, array $options);

    public function release(EasyHandle $easy);
}