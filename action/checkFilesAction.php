<?php
/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\http\GeneralHelper;
use yxorP\inc\Constants;

/* Extending the ActionWrapper class. */

class checkFilesAction extends ActionWrapper
{
    public function buildIncludes()
    {
        /* It's checking if the `http` and `minify` directories exist in the plugin directory, and if they don't, it
        creates them. */
        foreach (array(DIR_HTTP, DIR_MINIFY) as $_asset) GeneralHelper::fileCheck(DIR_PLUGIN . $_asset, true);
        /* Checking the files in the directory `DIR_FULL` and it is not recursive. */
        GeneralHelper::fileCheck(Constants::get('DIR_FULL'), false);
        /* Checking the files in the directory `DIR_PLUGIN . 'override' . DIRECTORY_SEPARATOR . 'global'` and it is not
        recursive. */
        GeneralHelper::fileCheck(DIR_PLUGIN . 'override' . DIRECTORY_SEPARATOR . 'global', false);
    }
}