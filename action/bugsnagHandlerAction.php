<?php use yxorP\Http\EventWrapper;

class bugsnagHandlerAction extends EventWrapper
{
    public function onBuildException($e): void
    {
        if (self::get('BUGSNAG')) self::get('BUGSNAG')->notifyException($e);
    }
}