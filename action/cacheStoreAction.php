<?php use yxorP\Http\EventWrapper;

class cacheStoreAction extends EventWrapper
{
    public function onCompleted(): void
    {
        if (!Cache::cache()->isValid()) Cache::cache()->set(self::get('RESPONSE')->getContent());
    }
}