<?php

use yxorP\http\ProxyEvent;
use yxorP\Http\EventWrapper;

class LogPlugin extends EventWrapper
{
    public function onHeadersReceived(ProxyEvent $event): void
    {
        $storage_dir = realpath('./storage');
        if (!is_writable($storage_dir)) {
            return;
        }
        $log_file = $storage_dir . '/' . date("Y-m-d") . '.log';
        $request = $event['request'];
        $response = $event['response'];
        $data = array('ip' => $_SERVER['REMOTE_ADDR'], 'time' => time(), 'url' => $request->getUri(), 'status' => $response->getStatusCode(), 'type' => $response->headers->get('content-type', 'unknown'), 'size' => $response->headers->get('content-length', 'unknown'));
        $message = implode("\t", $data) . "\r\n";
        @file_put_contents($log_file, $message, FILE_APPEND);
    }
}

