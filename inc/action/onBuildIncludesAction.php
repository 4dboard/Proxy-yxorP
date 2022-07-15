<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\http\wrapper;
use yxorP\inc\yP;

/* Extending the wrapper class. */

class onBuildIncludesAction extends wrapper
{
    public function onBuildIncludes(): void
    {
        /* Checking the files in the directory `DIR_FULL` and it is not recursive. */
        yP::assetLoader(YXORP_DIR_FULL);
        /* Checking the files in the directory `DIR_ROOT . 'override' . CHAR_SLASH . 'global'` and it is not
        recursive. */
        yP::assetLoader(DIR_ROOT . DIR_OVERRIDE . DIRECTORY_SEPARATOR . VAR_GLOBAL);
    }
}