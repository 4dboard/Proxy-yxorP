<?php namespace yxorP\app\lib\proxy;

use InvalidArgumentException;
use yxorP\app\lib\proxy\exception\badResponseException;
use yxorP\app\lib\proxy\exception\tooManyRedirectsException;
use yxorP\app\lib\proxy\promise\promiseInterface;
use yxorP\app\lib\proxy\psr7;
use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;

class redirectMiddleware
{
    const HISTORY_HEADER = 'X-Proxy-Redirect-History';
    const STATUS_HISTORY_HEADER = 'X-Proxy-Redirect-Status-History';
    public static $defaultSettings = ['max' => 5, 'protocols' => ['http', 'https'], 'strict' => false, 'referer' => false, 'track_redirects' => false,];
    private $nextHandler;

    public function __construct(callable $nextHandler)
    {
        $this->nextHandler = $nextHandler;
    }

    public function __invoke(requestInterface $request, array $options)
    {
        $fn = $this->nextHandler;
        if (empty($options['allow_redirects'])) {
            return $fn($request, $options);
        }
        if ($options['allow_redirects'] === true) {
            $options['allow_redirects'] = self::$defaultSettings;
        } elseif (!is_array($options['allow_redirects'])) {
            throw new InvalidArgumentException('allow_redirects must be true, false, or array');
        } else {
            $options['allow_redirects'] += self::$defaultSettings;
        }
        if (empty($options['allow_redirects']['max'])) {
            return $fn($request, $options);
        }
        return $fn($request, $options)->then(function (responseInterface $response) use ($request, $options) {
            return $this->checkRedirect($request, $options, $response);
        });
    }

    public function checkRedirect(requestInterface $request, array $options, responseInterface $response)
    {
        if (substr($response->getStatusCode(), 0, 1) != '3' || !$response->hasHeader('Location')) {
            return $response;
        }
        $this->guardMax($request, $options);
        $nextRequest = $this->modifyRequest($request, $options, $response);
        if (isset($options['allow_redirects']['on_redirect'])) {
            call_user_func($options['allow_redirects']['on_redirect'], $request, $response, $nextRequest->getUri());
        }
        $promise = $this($nextRequest, $options);
        if (!empty($options['allow_redirects']['track_redirects'])) {
            return $this->withTracking($promise, (string)$nextRequest->getUri(), $response->getStatusCode());
        }
        return $promise;
    }

    public function modifyRequest(requestInterface $request, array $options, responseInterface $response)
    {
        $modify = [];
        $protocols = $options['allow_redirects']['protocols'];
        $statusCode = $response->getStatusCode();
        if ($statusCode === 303 || ($statusCode <= 302 && !$options['allow_redirects']['strict'])) {
            $modify['method'] = 'GET';
            $modify['body'] = '';
        }
        $uri = $this->redirectUri($request, $response, $protocols);
        if (isset($options['idn_conversion']) && ($options['idn_conversion'] !== false)) {
            $idnOptions = ($options['idn_conversion'] === true) ? IDNA_DEFAULT : $options['idn_conversion'];
            $uri = utils::idnUriConvert($uri, $idnOptions);
        }
        $modify['uri'] = $uri;
        Psr7\rewind_body($request);
        if ($options['allow_redirects']['referer'] && $modify['uri']->getScheme() === $request->getUri()->getScheme()) {
            $uri = $request->getUri()->withUserInfo('');
            $modify['set_headers']['Referer'] = (string)$uri;
        } else {
            $modify['remove_headers'][] = 'Referer';
        }
        if ($request->getUri()->getHost() !== $modify['uri']->getHost()) {
            $modify['remove_headers'][] = 'Authorization';
        }
        return Psr7\modify_request($request, $modify);
    }

    private function guardMax(requestInterface $request, array &$options)
    {
        $current = isset($options['__redirect_count']) ? $options['__redirect_count'] : 0;
        $options['__redirect_count'] = $current + 1;
        $max = $options['allow_redirects']['max'];
        if ($options['__redirect_count'] > $max) {
            throw new tooManyRedirectsException("Will not follow more than {$max} redirects", $request);
        }
    }

    private function redirectUri(requestInterface $request, responseInterface $response, array $protocols)
    {
        $location = Psr7\uriResolver::resolve($request->getUri(), new Psr7\uri($response->getHeaderLine('Location')));
        if (!in_array($location->getScheme(), $protocols)) {
            throw new badResponseException(sprintf('Redirect URI, %s, does not use one of the allowed redirect protocols: %s', $location, implode(', ', $protocols)), $request, $response);
        }
        return $location;
    }

    private function withTracking(promiseInterface $promise, $uri, $statusCode)
    {
        return $promise->then(function (responseInterface $response) use ($uri, $statusCode) {
            $historyHeader = $response->getHeader(self::HISTORY_HEADER);
            $statusHeader = $response->getHeader(self::STATUS_HISTORY_HEADER);
            array_unshift($historyHeader, $uri);
            array_unshift($statusHeader, $statusCode);
            return $response->withHeader(self::HISTORY_HEADER, $historyHeader)->withHeader(self::STATUS_HISTORY_HEADER, $statusHeader);
        });
    }
}
