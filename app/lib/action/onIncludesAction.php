<?php use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\wrapper;

class onIncludesAction extends wrapper
{
    public function onIncludes(): void
    {
        helpers::assetLoader(YXORP_DIR_FULL);
        helpers::assetLoader(DIR_ROOT . DIR_OVERRIDE . DIR_GLOBAL);
    }
}
