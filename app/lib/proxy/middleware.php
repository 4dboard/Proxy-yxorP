<?php namespace yxorP\app\lib\proxy;

use ArrayAccess;
use InvalidArgumentException;
use yxorP\app\lib\proxy\cookie\cookieJarInterface;
use yxorP\app\lib\proxy\exception\aRequestExceptionAa;
use yxorP\app\lib\psr\http\message\responseInterface;
use function yxorP\app\lib\proxy\promise\rejection_for;

final class middleware
{
    public static function cookies()
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

    public static function httpErrors()
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
                    throw aRequestExceptionAa::create($request, $response);
                });
            };
        };
    }

    public static function history(&$container)
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

    public static function tap(callable $before = null, callable $after = null)
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

    public static function redirect()
    {
        return function (callable $handler) {
            return new redirectMiddleware($handler);
        };
    }

    public static function retry(callable $decider, callable $delay = null)
    {
        return function (callable $handler) use ($decider, $delay) {
            return new retryMiddleware($decider, $handler, $delay);
        };
    }


    public static function prepareBody()
    {
        return function (callable $handler) {
            return new prepareBodyMiddleware($handler);
        };
    }

    public static function mapRequest(callable $fn)
    {
        return function (callable $handler) use ($fn) {
            return function ($request, array $options) use ($handler, $fn) {
                return $handler($fn($request), $options);
            };
        };
    }

    public static function mapResponse(callable $fn)
    {
        return function (callable $handler) use ($fn) {
            return function ($request, array $options) use ($handler, $fn) {
                return $handler($request, $options)->then($fn);
            };
        };
    }
}
