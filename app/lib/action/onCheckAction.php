<?php use yxorP\app\lib\http\httpCache;
use yxorP\app\lib\http\wrapper;

class onCheckAction extends wrapper
{
    public function onCheck(): self
    {
        if (httpCache::isValid()) httpCache::get();
        return $this;
    }
}
