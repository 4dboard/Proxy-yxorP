<?php namespace yxorP\app\lib\proxy\exception;

use Exception;
use yxorP\app\lib\proxy\promise\promiseInterface;
use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;
use yxorP\app\lib\psr\http\message\uriInterface;
use function yxorP\app\lib\proxy\psr7\get_message_body_summary;

class aRequestException extends transferException
{
    private requestInterface $request;
    private ?responseInterface $response;
    private array $handlerContext;

    public function __construct($message, requestInterface $request, responseInterface $response = null, Exception $previous = null, array $handlerContext = [])
    {
        $code = $response && !($response instanceof promiseInterface) ? $response->getStatusCode() : 0;
        parent::__construct($message, $code, $previous);
        $this->request = $request;
        $this->response = $response;
        $this->handlerContext = $handlerContext;
    }

    public static function wrapException(requestInterface $request, Exception $e): aRequestException|Exception
    {
        return $e instanceof aRequestException ? $e : new aRequestException($e->getMessage(), $request, null, $e);
    }

    public static function create(requestInterface $request, responseInterface $response = null, Exception $previous = null, array $ctx = [])
    {
        if (!$response) {
            return new self('Error completing request', $request, null, $previous, $ctx);
        }
        $level = (int)floor($response->getStatusCode() / 100);
        if ($level === 4) {
            $label = 'Client error';
            $className = clientException::class;
        } elseif ($level === 5) {
            $label = 'Server error';
            $className = serverException::class;
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

    private static function obfuscateUri(uriInterface $uri): uriInterface
    {
        $userInfo = $uri->getUserInfo();
        if (false !== ($pos = strpos($userInfo, ':'))) {
            return $uri->withUserInfo(substr($userInfo, 0, $pos), '***');
        }
        return $uri;
    }

    public static function getResponseBodySummary(responseInterface $response): ?string
    {
        return get_message_body_summary($response);
    }

    public function getRequest(): requestInterface
    {
        return $this->request;
    }

    public function getResponse(): ?responseInterface
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
