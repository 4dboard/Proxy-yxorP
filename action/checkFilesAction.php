<?php
/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\http\GeneralHelper;
use yxorP\inc\ActionWrapper;
use yxorP\inc\Constants;

/* Extending the ActionWrapper class. */

class checkFilesAction extends ActionWrapper
{
    public function buildIncludes()
    {
        /* Checking the files in the directory `DIR_FULL` and it is not recursive. */
        GeneralHelper::fileCheck(Constants::get('DIR_FULL'), false);
        /* Checking the files in the directory `DIR_ROOT . 'override' . DIRECTORY_SEPARATOR . 'global'` and it is not
        recursive. */
        GeneralHelper::fileCheck(DIR_ROOT . 'override' . DIRECTORY_SEPARATOR . 'global', false);
    }
}