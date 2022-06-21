<?php


use yxorP\Http\EventWrapper;
use yxorP\Http\ProxyEvent;

class StreamPlugin extends EventWrapper
{
    private array $output_buffer_types = array('text/html', 'text/plain', 'text/css', 'text/javascript', 'application/x-javascript', 'application/javascript');
    private bool $stream = false;
    private int $max_content_length = 5000000;

    public function onHeadersReceived(ProxyEvent $event)
    {
        $content_type = $event['response']->headers->get('content-type');
        $content_length = $event['response']->headers->get('content-length');

        if (!in_array($content_type, $this->output_buffer_types, true) || $content_length > $this->max_content_length) {
            $this->stream = true;
            $event['response']->sendHeaders();
            if (!$event['request']->params->has('force_buffering')) {
                $event['proxy']->setOutputBuffering(false);
            }
        }
    }

    public function onCurlWrite(ProxyEvent $event)
    {
        if ($this->stream) {
            echo $event['data'];
            flush();
        }
    }

    public function onCompleted(ProxyEvent $event)
    {
        if ($this->stream) {
            exit;
        }
    }
}

