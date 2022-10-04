<?php
/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */


use yxorP\lib\http\helpers;
use yxorP\lib\http\store;
use yxorP\lib\http\wrapper;

/**
 * A class that extends the wrapper class.
 * @property $name
 */
class onExceptionAction extends wrapper
{
    /**
     * A method that is called when an exception is thrown.
     *
     */
    public function onException($e): void
    {
        /* Checking if the `DEBUG` constant is set to `true` or if the server name does not contain a dot. If either of
        these conditions are met, the exception is printed. */

        store::handler(YXORP_APP)->dataStorage->save('system/log', ['message' => $e->getMessage(), 'type' => 'error', 'channel' => $this->name, 'context' => null, 'timestamp' => time(), 'datetime' => date('Y-m-d G:i:s T', time())]);

        if (helpers::MIME() === 'text' . CHAR_SLASH . 'html' && defined(YXORP_PROXY_URL)) header("Location: " . YXORP_PROXY_URL); else if (ENV_DEBUG) var_dump($e); else store::handler(YXORP_APP)->dataStorage->save('system/log', ['message' => $e->getMessage(), 'type' => 'error', 'channel' => $this->name, 'context' => null, 'timestamp' => time(), 'datetime' => date('Y-m-d G:i:s T', time())]);
    }
}
