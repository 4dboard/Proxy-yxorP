<?php

/* It's importing the wrapper class from the yxorP\app\lib\http namespace. */

namespace yxorP\app\plugin;

use yxorP\app\constants;
use yxorP\app\lib\http\wrapper;
use yxorP\app\yP;

/* It's extending the wrapper class. */

class logPluginAction extends wrapper
{
    /* It's a method that is called when the headers are received. */
    public function onSent(): void
    {
        /* It's checking if the storage directory is writable, and if it is, it's writing the log to the file. */
        if (is_writable(realpath('./storage'))) @file_put_contents(realpath('./storage') . CHAR_SLASH . date("Y-m-d") . '.log', implode("\t", array('ip' => (yP::store(VAR_SERVER))[YXORP_REMOTE_ADDR], 'time' => time(), VAR_URL => yP::store(VAR_REQUEST)->getUri(), 'status' => yP::store(VAR_RESPONSE)->getStatusCode(), VAR_TYPE => yP::store(VAR_RESPONSE)->headers->get(VAR_CONTENT_TYPE, 'unknown'), 'size' => yP::store(VAR_RESPONSE)->headers->get(VAR_CONTENT_LENGTH, 'unknown'))) . "\r\n", FILE_APPEND);
    }
}