<?php namespace yxorP\app\lib\proxy;

use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;

final class transferStats
{
    private requestInterface $request;
    private ?responseInterface $response;
    private mixed $transferTime;
    private array $handlerStats;
    private mixed $handlerErrorData;

    public function __construct(requestInterface $request, responseInterface $response = null, $transferTime = null, $handlerErrorData = null, $handlerStats = [])
    {
        $this->request = $request;
        $this->response = $response;
        $this->transferTime = $transferTime;
        $this->handlerErrorData = $handlerErrorData;
        $this->handlerStats = $handlerStats;
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

    public function getHandlerErrorData()
    {
        return $this->handlerErrorData;
    }

    public function getEffectiveUri(): \yxorP\app\lib\psr\http\message\uriInterface
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
