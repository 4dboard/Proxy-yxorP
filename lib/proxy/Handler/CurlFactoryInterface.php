<?php namespace yxorP\lib\proxy\Handler;

use yxorP\lib\Psr\Http\Message\RequestInterface;

interface CurlFactoryInterface
{
    public function create(RequestInterface $request, array $options);

    public function release(EasyHandle $easy);
}
