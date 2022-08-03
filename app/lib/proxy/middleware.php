<?php namespace yxorP\app\lib\proxy;

use ArrayAccess;
use Closure;
use InvalidArgumentException;
use yxorP\app\lib\proxy\cookie\cookieJarInterface;
use yxorP\app\lib\proxy\exception\aRequestException;
use yxorP\app\lib\psr\http\message\responseInterface;
use function yxorP\app\lib\proxy\promise\rejection_for;

final class middleware
{
    public static function cookies(): Closure
    {
        return function (callable $handler) {
            return function ($request, array $options) use ($handler) {
                if (empty($options['cookies'])) {
                    return $handler($request, $options);
                } elseif (!($options['cookies'] instanceof cookieJarInterface)) {
                    throw new InvalidArgumentException('cookies must be an instance of yxorP\app\lib\proxy\cookie\CookieJarInterface');
                }
                $cookieJar = $options['cookies'];
                $request = $cookieJar->withCookieHeader($request);
                return $handler($request, $options)->then(function ($response) use ($cookieJar, $request) {
                    $cookieJar->extractCookies($request, $response);
                    return $response;
                });
            };
        };
    }

    public static function httpErrors(): Closure
    {
        return function (callable $handler) {
            return function ($request, array $options) use ($handler) {
                if (empty($options['http_errors'])) {
                    return $handler($request, $options);
                }
                return $handler($request, $options)->then(function (responseInterface $response) use ($request) {
                    $code = $response->getStatusCode();
                    if ($code < 400) {
                        return $response;
                    }
                    throw aRequestException::create($request, $response);
                });
            };
        };
    }

    public static function history(&$container): Closure
    {
        if (!is_array($container) && !$container instanceof ArrayAccess) {
            throw new InvalidArgumentException('history container must be an array or object implementing ArrayAccess');
        }
        return function (callable $handler) use (&$container) {
            return function ($request, array $options) use ($handler, &$container) {
                return $handler($request, $options)->then(function ($value) use ($request, &$container, $options) {
                    $container[] = ['request' => $request, 'response' => $value, 'error' => null, 'options' => $options];
                    return $value;
                }, function ($reason) use ($request, &$container, $options) {
                    $container[] = ['request' => $request, 'response' => null, 'error' => $reason, 'options' => $options];
                    return rejection_for($reason);
                });
            };
        };
    }

    public static function tap(callable $before = null, callable $after = null): Closure
    {
        return function (callable $handler) use ($before, $after) {
            return function ($request, array $options) use ($handler, $before, $after) {
                if ($before) {
                    $before($request, $options);
                }
                $response = $handler($request, $options);
                if ($after) {
                    $after($request, $options, $response);
                }
                return $response;
            };
        };
    }

    public static function redirect(): Closure
    {
        return function (callable $handler) {
            return new redirectMiddleware($handler);
        };
    }

    public static function retry(callable $decider, callable $delay = null): Closure
    {
        return function (callable $handler) use ($decider, $delay) {
            return new retryMiddleware($decider, $handler, $delay);
        };
    }

    public static function prepareBody(): Closure
    {
        return function (callable $handler) {
            return new prepareBodyMiddleware($handler);
        };
    }

    public static function mapRequest(callable $fn): Closure
    {
        return function (callable $handler) use ($fn) {
            return function ($request, array $options) use ($handler, $fn) {
                return $handler($fn($request), $options);
            };
        };
    }

    public static function mapResponse(callable $fn): Closure
    {
        return function (callable $handler) use ($fn) {
            return function ($request, array $options) use ($handler, $fn) {
                return $handler($request, $options)->then($fn);
            };
        };
    }
}
