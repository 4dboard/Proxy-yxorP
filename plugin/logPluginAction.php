<?php

/* It's importing the wrapper class from the yxorP\http namespace. */

use yxorP\http\wrapper;
use yxorP\inc\constants;

/* It's extending the wrapper class. */

class logPluginAction extends wrapper
{
    /* It's a method that is called when the headers are received. */
    public function onHeadersReceived(): void
    {
        /* It's checking if the storage directory is writable, and if it is, it's writing the log to the file. */
        if (is_writable(realpath('./storage'))) @file_put_contents(realpath('./storage') . CHAR_SLASH . date("Y-m-d") . '.log', implode("\t", array('ip' => constants::get(YXORP_SERVER)[YXORP_REMOTE_ADDR], 'time' => time(), VAR_URL => constants::get(YXORP_REQUEST)->getUri(), 'status' => constants::get(YXORP_RESPONSE)->getStatusCode(), VAR_TYPE => constants::get(YXORP_RESPONSE)->headers->get('content-type', 'unknown'), 'size' => constants::get(YXORP_RESPONSE)->headers->get('content-length', 'unknown'))) . "\r\n", FILE_APPEND);
    }
}