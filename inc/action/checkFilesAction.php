<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\generalHelper;
use yxorP\inc\wrapper;

/* Extending the wrapper class. */

class checkFilesAction extends wrapper
{
    public function buildIncludes()
    {
        /* Checking the files in the directory `DIR_FULL` and it is not recursive. */
        generalHelper::fileCheck(YXORP_DIR_FULL, false);
        /* Checking the files in the directory `DIR_ROOT . 'override' . CHAR_SLASH . 'global'` and it is not
        recursive. */
        generalHelper::fileCheck(DIR_ROOT . DIR_INC . 'override' . CHAR_SLASH . 'global', false);
    }
}