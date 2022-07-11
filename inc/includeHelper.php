<?php

namespace yxorP\inc;

/*
 * It defines constants and sets the value of the constants to the value of the arguments passed to the class.
 * Defining constants. Creating a class called constants.
 */

use yxorP\inc\parser\parseUrl;
use yxorP\parse\parse;
use function cockpit;

class constants
{
    function xxx()
    {
// REQUIRED
        /* Requiring the Cockpit library. */
        require PATH_COCKPIT_BOOTSTRAP;
        /* Requiring the Wrapper. */
        require PATH_INC_WRAPPER;
// ENV
        /* Reading the file and then calling the env function on each line. */
        foreach (file(DIR_ROOT . EXT_ENV) as $line) self::env($line);
        /* It's checking if the `http` and `minify` directories exist in the plugin directory, and if they don't, it
        creates them. */

        foreach (array(DIR_PSR, DIR_PROXY, DIR_SNAG, DIR_HTTP, DIR_MINIFY, DIR_PARSER) as $_asset) generalHelper::fileCheck(DIR_ROOT . DIR_INC . $_asset, true);        // Reporting

        /* Setting the token to the snag key. */
        self::set(VAR_SNAG, snag\Client::make(ENV_BUG_SNAG_KEY));
        /* Setting the token PROXY to a new instance of the \yxorP\inc\proxy class. */

        self::set(VAR_PROXY, new proxy\Client([VAR_ALLOW_REDIRECTS => true, VAR_HTTP_ERRORS => true, VAR_DECODE_CONTENT => true, VAR_VERIFY => false, VAR_COOKIES => true, VAR_IDN_CONVERSION => true]));

        /* It's setting the `YXORP_COCKPIT_APP` constant to the `cockpit()` function. */
        constants::set(YXORP_COCKPIT_APP, cockpit());

// EVENTS
        constants::set(YXORP_EVENT_LIST, [EVENT_BUILD_CACHE, EVENT_BUILD_CONTEXT, EVENT_BUILD_INCLUDES, EVENT_BUILD_HEADERS, EVENT_BUILD_REQUEST, EVENT_BEFORE_SEND, EVENT_SEND, EVENT_SENT, EVENT_WRITE, EVENT_COMPLETE, EVENT_FINAL]);

        constants::set(YXORP_MIME_TYPES, generalHelper::CSV(PATH_FILE_MIME_TYPES));
    }
}