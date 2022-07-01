<?php

/* It's importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\http\actionWrapper;
use yxorP\inc\constants;

/* It's extending the actionWrapper class. */

class logPluginAction extends actionWrapper
{
    /* It's a method that is called when the headers are received. */
    public function onHeadersReceived(): void
    {
        /* It's checking if the storage directory is writable, and if it is, it's writing the log to the file. */
        if (is_writable(realpath('./storage'))) @file_put_contents(realpath('./storage') . '/' . date("Y-m-d") . '.log', implode("\t", array('ip' => constants::get(TOKEN_SERVER)['REMOTE_ADDR'], 'time' => time(), VAR_URL => constants::get(TOKEN_REQUEST)->getUri(), 'status' => constants::get(TOKEN_RESPONSE)->getStatusCode(), 'type' => constants::get(TOKEN_RESPONSE)->headers->get('content-type', 'unknown'), 'size' => constants::get(TOKEN_RESPONSE)->headers->get('content-length', 'unknown'))) . "\r\n", FILE_APPEND);
    }
}