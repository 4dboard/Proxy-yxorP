<?php use yxorP\Http\EventWrapper;

class requestResponseAction extends EventWrapper
{
    public function buildIncludes(): void
    {
        self::set('RESPONSE', new Response());
        self::set('REQUEST', Request::createFromGlobals());
    }
}