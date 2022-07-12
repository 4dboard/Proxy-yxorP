<?php

/* It's importing the wrapper class from the yxorP\inc\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* It's extending the wrapper class. */

class logPluginAction extends wrapper
{
    /* It's a method that is called when the headers are received. */
    public function onSent(): void
    {
        /* It's checking if the storage directory is writable, and if it is, it's writing the log to the file. */
        if (is_writable(realpath('./storage'))) @file_put_contents(realpath('./storage') . CHAR_SLASH . date("Y-m-d") . '.log', implode("\t", array('ip' => (constants::get(VAR_SERVER))[YXORP_REMOTE_ADDR], 'time' => time(), VAR_URL => constants::get(VAR_REQUEST)->getUri(), 'status' => constants::get(VAR_RESPONSE)->getStatusCode(), VAR_TYPE => constants::get(VAR_RESPONSE)->headers->get(VAR_CONTENT_TYPE, 'unknown'), 'size' => constants::get(VAR_RESPONSE)->headers->get(VAR_CONTENT_LENGTH, 'unknown'))) . "\r\n", FILE_APPEND);
    }
}