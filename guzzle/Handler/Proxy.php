<?php namespace yxorP\guzzle\Handler;

use yxorP\guzzle\RequestOptions;
use Psr\Http\Message\RequestInterface;

class Proxy
{
    public static function wrapSync(callable $default, callable $sync): \Closure
    {
        return function (RequestInterface $request, array $options) use ($default, $sync) {
            return empty($options[RequestOptions::SYNCHRONOUS]) ? $default($request, $options) : $sync($request, $options);
        };
    }

    public static function wrapStreaming(callable $default, callable $streaming): \Closure
    {
        return function (RequestInterface $request, array $options) use ($default, $streaming) {
            return empty($options['stream']) ? $default($request, $options) : $streaming($request, $options);
        };
    }
}