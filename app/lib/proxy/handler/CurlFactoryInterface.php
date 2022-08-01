<?php namespace yxorP\app\lib\proxy\Handler;

use yxorP\app\lib\Psr\Http\Message\RequestInterface;

interface CurlFactoryInterface
{
    public function create(RequestInterface $request, array $options);

    public function release(EasyHandle $easy);
}
