<?php namespace yxorP\lib\proxy;

use ArrayAccess;
use InvalidArgumentException;
use yxorP\inc\Psr\Http\Message\ResponseInterface;
use yxorP\inc\Psr\Log\LoggerInterface;
use yxorP\lib\proxy\Cookie\CookieJarInterface;
use yxorP\lib\proxy\Exception\ARequestExceptionAA;
use function yxorP\lib\proxy\Promise\rejection_for;

final class Middleware
{
    public static function cookies()
    {
        return function (callable $handler) {
            return function ($request, array $options) use ($handler) {
                if (empty($options['cookies'])) {
                    return $handler($request, $options);
                } elseif (!($options['cookies'] instanceof CookieJarInterface)) {
                    throw new InvalidArgumentException('cookies must be an instance of yxorP\lib\proxy\Cookie\CookieJarInterface');
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
                return $handler($request, $options)->then(function (ResponseInterface $response) use ($request) {
                    $code = $response->getStatusCode();
                    if ($code < 400) {
                        return $response;
                    }
                    throw ARequestExceptionAA::create($request, $response);
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
            return new RedirectMiddleware($handler);
        };
    }

    public static function retry(callable $decider, callable $delay = null)
    {
        return function (callable $handler) use ($decider, $delay) {
            return new RetryMiddleware($decider, $handler, $delay);
        };
    }

    public static function log(LoggerInterface $logger, MessageFormatter $formatter, $logLevel = 'info')
    {
        return function (callable $handler) use ($logger, $formatter, $logLevel) {
            return function ($request, array $options) use ($handler, $logger, $formatter, $logLevel) {
                return $handler($request, $options)->then(function ($response) use ($logger, $request, $formatter, $logLevel) {
                    $message = $formatter->format($request, $response);
                    $logger->log($logLevel, $message);
                    return $response;
                }, function ($reason) use ($logger, $request, $formatter) {
                    $response = $reason instanceof ARequestExceptionAA ? $reason->getResponse() : null;
                    $message = $formatter->format($request, $response, $reason);
                    $logger->notice($message);
                    return rejection_for($reason);
                });
            };
        };
    }

    public static function prepareBody()
    {
        return function (callable $handler) {
            return new PrepareBodyMiddleware($handler);
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