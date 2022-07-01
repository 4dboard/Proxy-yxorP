<?php

/* It's importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\Constants;

/* It's extending the ActionWrapper class. */

class logPluginAction extends ActionWrapper
{
    /* It's a method that is called when the headers are received. */
    public function onHeadersReceived(): void
    {
        /* It's checking if the storage directory is writable, and if it is, it's writing the log to the file. */
        if (is_writable(realpath('./storage'))) @file_put_contents(realpath('./storage') . '/' . date("Y-m-d") . '.log', implode("\t", array('ip' => Constants::get(TOKEN_SERVER)['REMOTE_ADDR'], 'time' => time(), VAR_URL => Constants::get(TOKEN_REQUEST)->getUri(), 'status' => Constants::get(TOKEN_RESPONSE)->getStatusCode(), 'type' => Constants::get(TOKEN_RESPONSE)->headers->get('content-type', 'unknown'), 'size' => Constants::get(TOKEN_RESPONSE)->headers->get('content-length', 'unknown'))) . "\r\n", FILE_APPEND);
    }
}