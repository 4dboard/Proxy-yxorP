<?php use yxorP\Http\EventWrapper;

class debubEnablingAction extends EventWrapper
{
    public function buildIncludes(): void
    {
        error_reporting(self::get('DEBUG') || !(int)str_contains(self::get('SERVER')['SERVER_NAME'], '.'));
    }
}