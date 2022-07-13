<?php

namespace yxorP\inc\proxy\Exception;

use yxorP\inc\proxy\Promise\PromiseInterface;
use yxorP\inc\psr\Http\Message\RequestInterface;
use yxorP\inc\psr\Http\Message\ResponseInterface;
use yxorP\inc\psr\Http\Message\UriInterface;
use function yxorP\inc\proxy\Psr7\get_message_body_summary;

/**
 * HTTP Request exception
 */
class ARequestException extends AATransferException
{
    /** @var RequestInterface */
    private RequestInterface $request;

    /** @var ResponseInterface|null */
    private ?ResponseInterface $response;

    /** @var array */
    private array $handlerContext;

    public function __construct(
        $message,
        RequestInterface $request,
        ResponseInterface $response = null,
        Exception $previous = null,
        array $handlerContext = []
    )
    {
        // Set the code of the exception if the response is set and not future.
        $code = $response && !($response instanceof PromiseInterface)
            ? $response->getStatusCode()
            : 0;
        parent::__construct($message, $code, $previous);
        $this->request = $request;
        $this->response = $response;
        $this->handlerContext = $handlerContext;
    }

    /**
     * Wrap non-RequestExceptions with a RequestException
     *
     * @param RequestInterface $request
     * @param Exception $e
     *
     * @return ARequestException
     */
    public static function wrapException(RequestInterface $request, Exception $e): ARequestException
    {
        return $e instanceof ARequestException
            ? $e
            : new ARequestException($e->getMessage(), $request, null, $e);
    }

    /**
     * Factory method to create a new exception with a normalized error message
     *
     * @param RequestInterface $request Request
     * @param ResponseInterface|null $response Response received
     * @param Exception|null $previous Previous exception
     * @param array $ctx Optional handler context.
     *
     * @return self
     */
    public static function create(
        RequestInterface  $request,
        ResponseInterface $response = null,
        Exception         $previous = null,
        array             $ctx = []
    ): ARequestException|ServerException|ClientException
    {
        if (!$response) {
            return new self(
                'Error completing request',
                $request,
                null,
                $previous,
                $ctx
            );
        }

        $level = (int)floor($response->getStatusCode() / 100);
        if ($level === 4) {
            $label = 'Client error';
            $className = ClientException::class;
        } elseif ($level === 5) {
            $label = 'Server error';
            $className = ServerException::class;
        } else {
            $label = 'Unsuccessful request';
            $className = __CLASS__;
        }

        $uri = $request->getUri();
        $uri = static::obfuscateUri($uri);

        // Client Error: `GET /` resulted in a `404 Not Found` response:
        // <html> ... (truncated)
        $message = sprintf(
            '%s: `%s %s` resulted in a `%s %s` response',
            $label,
            $request->getMethod(),
            $uri,
            $response->getStatusCode(),
            $response->getReasonPhrase()
        );

        $summary = static::getResponseBodySummary($response);

        if ($summary !== null) {
            $message .= ":\n{$summary}\n";
        }

        return new $className($message, $request, $response, $previous, $ctx);
    }

    /**
     * Obfuscates URI if there is a username and a password present
     *
     * @param UriInterface $uri
     *
     * @return UriInterface
     */
    private static function obfuscateUri(UriInterface $uri): UriInterface
    {
        $userInfo = $uri->getUserInfo();

        if (false !== ($pos = strpos($userInfo, ':'))) {
            return $uri->withUserInfo(substr($userInfo, 0, $pos), '***');
        }

        return $uri;
    }

    /**
     * Get a short summary of the response
     *
     * Will return `null` if the response is not printable.
     *
     * @param ResponseInterface $response
     *
     * @return string|null
     */
    public static function getResponseBodySummary(ResponseInterface $response): ?string
    {
        return get_message_body_summary($response);
    }

    /**
     * Get the request that caused the exception
     *
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * Get the associated response
     *
     * @return ResponseInterface|null
     */
    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }

    /**
     * Check if a response was received
     *
     * @return bool
     */
    public function hasResponse(): bool
    {
        return $this->response !== null;
    }

    /**
     * Get contextual information about the error from the underlying handler.
     *
     * The contents of this array will vary depending on which handler you are
     * using. It may also be just an empty array. Relying on this data will
     * couple you to a specific handler, but can give more debug information
     * when needed.
     *
     * @return array
     */
    public function getHandlerContext(): array
    {
        return $this->handlerContext;
    }
}
