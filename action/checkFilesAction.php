<?php use yxorP\Http\EventWrapper;

class checkFilesAction extends EventWrapper
{
    public function buildIncludes()
    {
        self::fileCheck(self::get('DIR_FULL'), false);
        self::fileCheck(self::get('PLUGIN_DIR') . 'override' . DIRECTORY_SEPARATOR . 'global', false);
    }
}