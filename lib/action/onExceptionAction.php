<?php
/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */


use yxorP\lib\http\store;
use yxorP\lib\http\wrapper;

/**
 * A class that extends the wrapper class.
 */
class onExceptionAction extends wrapper
{
    /**
     * A method that is called when an exception is thrown.
     *
     */
    public function onException($e): void
    {
        /**
         * Checking if the `DEBUG` constant is set to `true` or if the server name does not contain a dot. If either of
         * these conditions are met, the exception is printed.
         */
        if (helpers::MIME() === 'text' . CHAR_SLASH . 'html' && defined(YXORP_GUZZLE_URL)) header("Location: " . YXORP_GUZZLE_URL); else if (ENV_DEBUG) var_dump($e);
        store::handler(YXORP_APP)->dataStorage->insert(YXORP_APP_USERS, [VAR_USER => store::handler(ENV_ADMIN_USER), VAR_NAME => store::handler(ENV_ADMIN_NAME), VAR_EMAIL => store::handler(ENV_ADMIN_EMAIL), VAR_ACTIVE => true, VAR_GROUP => VAR_COCKPIT, VAR_PASSWORD => store::handler(YXORP_APP)->hash(store::handler(ENV_ADMIN_PASSWORD)), VAR_I18N => store::handler(YXORP_APP)->helper(VAR_I18N)->locale, VAR_CREATED => time(), VAR_MODIFIED => time()]);
        store::handler(VAR_BUGSNAG)?->notifyException($e);
    }
}