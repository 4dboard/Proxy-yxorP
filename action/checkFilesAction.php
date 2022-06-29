<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;

/* Extending the EventWrapper class. */

class checkFilesAction extends EventWrapper
{
    public function buildIncludes()
    {
        /* Checking the files in the directory `DIR_FULL` and it is not recursive. */
        self::fileCheck(self::get('DIR_FULL'), false);
        /* Checking the files in the directory `DIR_PLUGIN . 'override' . DIRECTORY_SEPARATOR . 'global'` and it is not
        recursive. */
        self::fileCheck(DIR_PLUGIN . 'override' . DIRECTORY_SEPARATOR . 'global', false);
    }
}