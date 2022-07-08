<?php namespace yxorP\guzzle;

use yxorP\guzzle\Exception\BadResponseException;
use yxorP\guzzle\Exception\TooManyRedirectsException;
use yxorP\guzzle\Promise\PromiseInterface;
use yxorP\guzzle\Psr7;
use InvalidArgumentException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RedirectMiddleware
{
    const HISTORY_HEADER = 'X-Guzzle-Redirect-History';
    const STATUS_HISTORY_HEADER = 'X-Guzzle-Redirect-Status-History';
    public static array $defaultSettings = ['max' => 5, 'protocols' => ['http', 'https'], 'strict' => false, 'referer' => false, 'track_redirects' => false,];
    private $nextHandler;

    public function __construct(callable $nextHandler)
    {
        $this->nextHandler = $nextHandler;
    }

    public function __invoke(RequestInterface $request, array $options)
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
        return $fn($request, $options)->then(function (ResponseInterface $response) use ($request, $options) {
            return $this->checkRedirect($request, $options, $response);
        });
    }

    public function checkRedirect(RequestInterface $request, array $options, ResponseInterface $response): PromiseInterface|ResponseInterface
    {
        if (!str_starts_with($response->getStatusCode(), '3') || !$response->hasHeader('Location')) {
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

    public function modifyRequest(RequestInterface $request, array $options, ResponseInterface $response): RequestInterface|Psr7\ServerRequest|Psr7\Request
    {
        $modify = [];
        $protocols = $options['allow_redirects']['protocols'];
        $statusCode = $response->getStatusCode();
        if ($statusCode == 303 || ($statusCode <= 302 && !$options['allow_redirects']['strict'])) {
            $modify['method'] = 'GET';
            $modify['body'] = '';
        }
        $uri = $this->redirectUri($request, $response, $protocols);
        if (isset($options['idn_conversion']) && ($options['idn_conversion'] !== false)) {
            $idnOptions = ($options['idn_conversion'] === true) ? IDNA_DEFAULT : $options['idn_conversion'];
            $uri = Utils::idnUriConvert($uri, $idnOptions);
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

    private function guardMax(RequestInterface $request, array &$options)
    {
        $current = $options['__redirect_count'] ?? 0;
        $options['__redirect_count'] = $current + 1;
        $max = $options['allow_redirects']['max'];
        if ($options['__redirect_count'] > $max) {
            throw new TooManyRedirectsException("Will not follow more than {$max} redirects", $request);
        }
    }

    private function redirectUri(RequestInterface $request, ResponseInterface $response, array $protocols): \Psr\Http\Message\UriInterface|Psr7\Uri
    {
        $location = Psr7\UriResolver::resolve($request->getUri(), new Psr7\Uri($response->getHeaderLine('Location')));
        if (!in_array($location->getScheme(), $protocols)) {
            throw new BadResponseException(sprintf('Redirect URI, %s, does not use one of the allowed redirect protocols: %s', $location, implode(', ', $protocols)), $request, $response);
        }
        return $location;
    }

    private function withTracking(PromiseInterface $promise, $uri, $statusCode): PromiseInterface
    {
        return $promise->then(function (ResponseInterface $response) use ($uri, $statusCode) {
            $historyHeader = $response->getHeader(self::HISTORY_HEADER);
            $statusHeader = $response->getHeader(self::STATUS_HISTORY_HEADER);
            array_unshift($historyHeader, $uri);
            array_unshift($statusHeader, $statusCode);
            return $response->withHeader(self::HISTORY_HEADER, $historyHeader)->withHeader(self::STATUS_HISTORY_HEADER, $statusHeader);
        });
    }
}