<?php namespace yxorP\app\lib\proxy\handler;

use yxorP\app\lib\psr\http\message\requestInterface;

interface curlFactoryInterface
{
    public function create(RequestInterface $request, array $options);

    public function release(easyHandle $easy);
}
