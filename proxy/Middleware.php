<?php namespace yxorP\proxy;

use ArrayAccess;
use Closure;
use InvalidArgumentException;
use yxorP\proxy\Cookie\CookieJarInterface;
use yxorP\proxy\Exception\ArequestExceptionAA;
use yxorP\psr\Http\Message\ResponseInterface;
use yxorP\psr\Log\LoggerInterface;
use function ProxyHttp\Promise\rejection_for;

final class Middleware
{
    public static function cookies(): Closure
    {
        return function (callable $handler) {
            return function ($request, array $options) use ($handler) {
                if (empty($options['cookies'])) {
                    return $handler($request, $options);
                } elseif (!($options['cookies'] instanceof CookieJarInterface)) {
                    throw new InvalidArgumentException('cookies must be an instance of ProxyHttp\Cookie\CookieJarInterface');
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
                return $handler($request, $options)->then(function (ResponseInterface $response) use ($request) {
                    $code = $response->getStatusCode();
                    if ($code < 400) {
                        return $response;
                    }
                    throw ArequestExceptionAA::create($request, $response);
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
            return new RedirectMiddleware($handler);
        };
    }

    public static function retry(callable $decider, callable $delay = null): Closure
    {
        return function (callable $handler) use ($decider, $delay) {
            return new RetryMiddleware($decider, $handler, $delay);
        };
    }

    public static function log(LoggerInterface $logger, MessageFormatter $formatter, $logLevel = 'info'): Closure
    {
        return function (callable $handler) use ($logger, $formatter, $logLevel) {
            return function ($request, array $options) use ($handler, $logger, $formatter, $logLevel) {
                return $handler($request, $options)->then(function ($response) use ($logger, $request, $formatter, $logLevel) {
                    $message = $formatter->format($request, $response);
                    $logger->log($logLevel, $message);
                    return $response;
                }, function ($reason) use ($logger, $request, $formatter) {
                    $response = $reason instanceof ArequestExceptionAA ? $reason->getResponse() : null;
                    $message = $formatter->format($request, $response, $reason);
                    $logger->notice($message);
                    return rejection_for($reason);
                });
            };
        };
    }

    public static function prepareBody(): Closure
    {
        return function (callable $handler) {
            return new PrepareBodyMiddleware($handler);
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