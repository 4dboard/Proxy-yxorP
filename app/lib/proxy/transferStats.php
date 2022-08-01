<?php namespace yxorP\app\lib\proxy;

use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;

final class transferStats
{
    private $request;
    private $response;
    private $transferTime;
    private $handlerStats;
    private $handlerErrorData;

    public function __construct(requestInterface $request, responseInterface $response = null, $transferTime = null, $handlerErrorData = null, $handlerStats = [])
    {
        $this->request = $request;
        $this->response = $response;
        $this->transferTime = $transferTime;
        $this->handlerErrorData = $handlerErrorData;
        $this->handlerStats = $handlerStats;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function hasResponse()
    {
        return $this->response !== null;
    }

    public function getHandlerErrorData()
    {
        return $this->handlerErrorData;
    }

    public function getEffectiveUri()
    {
        return $this->request->getUri();
    }

    public function getTransferTime()
    {
        return $this->transferTime;
    }

    public function getHandlerStats()
    {
        return $this->handlerStats;
    }

    public function getHandlerStat($stat)
    {
        return isset($this->handlerStats[$stat]) ? $this->handlerStats[$stat] : null;
    }
}
