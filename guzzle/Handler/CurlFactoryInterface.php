<?php namespace GuzzleHttp\Handler;

use Psr\Http\Message\RequestInterface;

interface CurlFactoryInterface
{
    public function create(RequestInterface $request, array $options);

    public function release(EasyHandle $easy);
}