<?php namespace yxorP\app\lib\proxy\handler;

use yxorP\app\lib\proxy\requestOptions;
use yxorP\app\lib\psr\http\message\requestInterface;

class proxy
{
    public static function wrapSync(callable $default, callable $sync): \Closure
    {
        return function (requestInterface $request, array $options) use ($default, $sync) {
            return empty($options[requestOptions::SYNCHRONOUS]) ? $default($request, $options) : $sync($request, $options);
        };
    }

    public static function wrapStreaming(callable $default, callable $streaming): \Closure
    {
        return function (requestInterface $request, array $options) use ($default, $streaming) {
            return empty($options['stream']) ? $default($request, $options) : $streaming($request, $options);
        };
    }
}
