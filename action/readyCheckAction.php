<?php use yxorP\Cache\Cache;
use yxorP\Http\EventWrapper;

class readyCheckAction extends EventWrapper
{
    public function onCheck(): string
    {
        if (Cache::cache()->isValid()) return Cache::cache()->get(); //Todo: Call final event
    }
}