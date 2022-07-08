<?php namespace yxorP\guzzle;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class TransferStats
{
    private RequestInterface $request;
    private ?ResponseInterface $response;
    private mixed $transferTime;
    private array $handlerStats;
    private mixed $handlerErrorData;

    public function __construct(RequestInterface $request, ResponseInterface $response = null, $transferTime = null, $handlerErrorData = null, $handlerStats = [])
    {
        $this->request = $request;
        $this->response = $response;
        $this->transferTime = $transferTime;
        $this->handlerErrorData = $handlerErrorData;
        $this->handlerStats = $handlerStats;
    }

    public function getRequest(): RequestInterface
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

    public function getHandlerErrorData()
    {
        return $this->handlerErrorData;
    }

    public function getEffectiveUri(): \Psr\Http\Message\UriInterface
    {
        return $this->request->getUri();
    }

    public function getTransferTime()
    {
        return $this->transferTime;
    }

    public function getHandlerStats(): array
    {
        return $this->handlerStats;
    }

    public function getHandlerStat($stat)
    {
        return $this->handlerStats[$stat] ?? null;
    }
}