<?php use yxorP\Http\EventWrapper;

class debugHandlerAction extends EventWrapper
{
    public function onBuildException(): void
    {
        if (self::get('DEBUG') || !(int)str_contains(self::get('SERVER')['SERVER_NAME'], '.')) echo $e->__toString();
    }
}