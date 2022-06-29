<?php use yxorP\http\EventWrapper;

class StreamPlugin extends EventWrapper
{
    private array $output_buffer_types = array('text/html', 'text/plain', 'text/css', 'text/javascript', 'application/x-javascript', 'application/javascript');
    private bool $stream = false;
    private int $max_content_length = 5000000;

    public function onHeadersReceived(): void
    {
        $content_type = Constants::get('RESPONSE')->headers->get('content-type');
        $content_length = Constants::get('RESPONSE')->headers->get('content-length');
        if (!in_array($content_type, $this->output_buffer_types, true) || $content_length > $this->max_content_length) {
            $this->stream = true;
            Constants::get('RESPONSE')->sendHeaders();
            if (!Constants::get('REQUEST')->params->has('force_buffering')) {
                $event['proxy']->setOutputBuffering(false);
            }
        }
    }

    public function onCurlWrite(): void
    {
        if ($this->stream) {
            echo $event['data'];
            flush();
        }
    }

    public function onCompleted(): void
    {
        if ($this->stream) {
            exit;
        }
    }
}