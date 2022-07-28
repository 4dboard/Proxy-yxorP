<?php
/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */


use yxorP\lib\http\helpers;
use yxorP\lib\http\wrapper;

/**
 * Extending the wrapper class.
 */
class onIncludesAction extends wrapper
{
    /**
     *
     */
    public function onIncludes(): void
    {
        /**
         * Checking the files in the directory `DIR_FULL` and it is not recursive.
         */
        helpers::assetLoader(YXORP_DIR_FULL);
        /**
         * Checking the files in the directory `DIR_ROOT . 'override' . CHAR_SLASH . 'global'` and it is not
         * recursive.
         */

        helpers::assetLoader(DIR_ROOT . DIR_OVERRIDE . DIR_GLOBAL);
    }
}