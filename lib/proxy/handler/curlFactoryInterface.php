<?php namespace yxorP\lib\proxy\handler;

use yxorP\lib\psr\http\message\requestInterface;

interface curlFactoryInterface
{
    public function create(requestInterface $request, array $options);

    public function release(easyHandle $easy);
}
