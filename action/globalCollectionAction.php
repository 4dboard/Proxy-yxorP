<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;

/* Extending the `EventWrapper` class. */

class globalCollectionAction extends EventWrapper
{
    /* A method that is called when the context is built. */
    public function onBuildContext(): void
    {
        /* Setting the `REPLACE` context variable to the value of the `replace` type in the `global` collection. */
        self::set('REPLACE', self::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'replace']) ?
            self::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'replace'])['value'] : null);
        /* Setting the `PATTERN` context variable to the value of the `pattern` type in the `global` collection. */
        self::set('PATTERN', self::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'pattern']) ?
            self::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'global', ['type' => 'pattern'])['value'] : null);
    }
}