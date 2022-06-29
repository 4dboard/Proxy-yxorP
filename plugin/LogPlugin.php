<?php use yxorP\http\EventWrapper;

class LogPlugin extends EventWrapper
{
    public function onHeadersReceived(): void
    {
        $DIR_STORAGE = realpath('./storage');
        if (!is_writable($DIR_STORAGE)) {
            return;
        }
        $log_file = $DIR_STORAGE . '/' . date("Y-m-d") . '.log';
        $request = Constants::get('REQUEST');
        $response = Constants::get('RESPONSE');
        $data = array('ip' => CACHE_SERVER['REMOTE_ADDR'], 'time' => time(), 'url' => $request->getUri(), 'status' => $response->getStatusCode(), 'type' => $response->headers->get('content-type', 'unknown'), 'size' => $response->headers->get('content-length', 'unknown'));
        $message = implode("\t", $data) . "\r\n";
        @file_put_contents($log_file, $message, FILE_APPEND);
    }
}