<?php use yxorP\Http\EventWrapper;

class resourceHandlerAction extends EventWrapper
{
    public function onBuildException(): void
    {
        if (self::get('MIME') === 'text' . DIRECTORY_SEPARATOR . 'html' && self::get('MIME') != "document") header("Location: " . self::get('PROXY_URL'));
    }
}