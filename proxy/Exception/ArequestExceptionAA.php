<?php namespace yxorP\proxy\Exception;

use Exception;
use yxorP\proxy\Promise\PromiseInterface;
use yxorP\psr\Http\Message\RequestInterface;
use yxorP\psr\Http\Message\ResponseInterface;
use yxorP\psr\Http\Message\UriInterface;
use function ProxyHttp\Psr7\get_message_body_summary;

class ArequestExceptionAA extends AATransferException
{
    private RequestInterface $request;
    private ?ResponseInterface $response;
    private array $handlerContext;

    public function __construct($message, RequestInterface $request, ResponseInterface $response = null, Exception $previous = null, array $handlerContext = [])
    {
        $code = $response && !($response instanceof PromiseInterface) ? $response->getStatusCode() : 0;
        parent::__construct($message, $code, $previous);
        $this->request = $request;
        $this->response = $response;
        $this->handlerContext = $handlerContext;
    }

    public static function wrapException(RequestInterface $request, Exception $e): ArequestExceptionAA|Exception
    {
        return $e instanceof ArequestExceptionAA ? $e : new ArequestExceptionAA($e->getMessage(), $request, null, $e);
    }

    public static function create(RequestInterface $request, ResponseInterface $response = null, Exception $previous = null, array $ctx = [])
    {
        if (!$response) {
            return new self('Error completing request', $request, null, $previous, $ctx);
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
        $message = sprintf('%s: `%s %s` resulted in a `%s %s` response', $label, $request->getMethod(), $uri, $response->getStatusCode(), $response->getReasonPhrase());
        $summary = static::getResponseBodySummary($response);
        if ($summary !== null) {
            $message .= ":\n{$summary}\n";
        }
        return new $className($message, $request, $response, $previous, $ctx);
    }

    private static function obfuscateUri(UriInterface $uri): UriInterface
    {
        $userInfo = $uri->getUserInfo();
        if (false !== ($pos = strpos($userInfo, ':'))) {
            return $uri->withUserInfo(substr($userInfo, 0, $pos), '***');
        }
        return $uri;
    }

    public static function getResponseBodySummary(ResponseInterface $response): ?string
    {
        return get_message_body_summary($response);
    }

    public function getRequest(): ?RequestInterface
    {
        return $this->request;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }

    public function hasResponse(): bool
    {
        return $this->response !== null;
    }

    public function getHandlerContext(): array
    {
        return $this->handlerContext;
    }
}