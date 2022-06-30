<?php

/* It's importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\Constants;

/* It's extending the actionWrapper class. */

class logPluginAction extends actionWrapper
{
    /* It's a method that is called when the headers are received. */
    public function onHeadersReceived(): void
    {
        /* It's checking if the storage directory is writable, and if it is, it's writing the log to the file. */
        if (is_writable(realpath('./storage'))) @file_put_contents(realpath('./storage') . '/' . date("Y-m-d") . '.log', implode("\t", array('ip' => CACHE_SERVER['REMOTE_ADDR'], 'time' => time(), VAR_URL => Constants::get('REQUEST')->getUri(), 'status' => Constants::get('RESPONSE')->getStatusCode(), 'type' => Constants::get('RESPONSE')->headers->get('content-type', 'unknown'), 'size' => Constants::get('RESPONSE')->headers->get('content-length', 'unknown'))) . "\r\n", FILE_APPEND);
    }
}