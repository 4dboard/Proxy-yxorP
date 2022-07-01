<?php
/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\http\actionWrapper;
use yxorP\inc\constants;

/* Extending the `actionWrapper` class. */

class globalCollectionAction extends actionWrapper
{
    /* A method that is called when the context is built. */
    public function onBuildContext(): void
    {
        /* Setting the `REPLACE` context variable to the value of the `replace` type in the `global` collection. */
        constants::set('REPLACE', constants::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'replace']) ?
            constants::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'replace'])['value'] : null);
        /* Setting the `PATTERN` context variable to the value of the `pattern` type in the `global` collection. */
        constants::set('PATTERN', constants::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'pattern']) ?
            constants::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'pattern'])['value'] : null);
    }
}