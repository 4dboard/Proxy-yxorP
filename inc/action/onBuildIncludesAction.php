<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\generalHelper;
use yxorP\inc\wrapper;

/* Extending the wrapper class. */

class onBuildIncludesAction extends wrapper
{
    public function onBuildIncludes(): void
    {
        if (ENV_DEBUG) {
            ini_set('display_startup_errors', 1);
            ini_set('display_errors', 1);
            error_reporting(1);
        }
        /* Checking the files in the directory `DIR_FULL` and it is not recursive. */
        generalHelper::fileCheck(YXORP_DIR_FULL, false);
        /* Checking the files in the directory `DIR_ROOT . 'override' . CHAR_SLASH . 'global'` and it is not
        recursive. */
        generalHelper::fileCheck(DIR_ROOT . DIR_INC . 'override' . DIRECTORY_SEPARATOR . 'global', false);
    }
}