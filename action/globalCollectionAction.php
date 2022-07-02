<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\http\wrapper;
use yxorP\inc\constants;

/* Extending the `wrapper` class. */

class globalCollectionAction extends wrapper
{
    /* A method that is called when the context is built. */
    public function onBuildContext(): void
    {
        /* Setting the `REPLACE` context variable to the value of the `replace` type in the `global` collection. */
        constants::set('REPLACE', constants::get(constants::get(YXORP_COCKPIT_APP))->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . 'global', [VAR_TYPE => 'replace']) ?
            constants::get(constants::get(YXORP_COCKPIT_APP))->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . 'global', [VAR_TYPE => 'replace'])['value'] : null);
        /* Setting the `PATTERN` context variable to the value of the `pattern` type in the `global` collection. */
        constants::set('PATTERN', constants::get(constants::get(YXORP_COCKPIT_APP))->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . 'global', [VAR_TYPE => 'pattern']) ?
            constants::get(constants::get(YXORP_COCKPIT_APP))->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . 'global', [VAR_TYPE => 'pattern'])['value'] : null);
    }
}