<?php

/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\actionWrapper;
use yxorP\inc\constants;

/* Extending the wrapper class, which is a class that allows you to listen to events. */

class streamPluginAction extends actionWrapper
{
    /* An array of content types that will be streamed. */
    private array $output_buffer_types = array(VAR_TEXT_HTML, 'text/plain', 'text/css', 'text/javascript', 'application/x-javascript', 'application/javascript');
    /* A variable that is used to determine if the response should be streamed or not. */
    private bool $stream = false;
    /* Used to determine if the response should be streamed or not. */
    private int $max_content_length = 5000000;

    /* Checking if the content type is in the array of content types that should be streamed. If it is, it sets the
    `$stream` variable to true. */
    public function onHeadersReceived(): void
    {
        /* Getting the content type of the response. */
        $content_type = constants::get(YXORP_RESPONSE)->headers->get(VAR_CONTENT_TYPE);
        /* Getting the content length of the response. */
        $content_length = constants::get(YXORP_RESPONSE)->headers->get(VAR_CONTENT_LENGTH);
        /* Checking if the content type is in the array of content types that should be streamed. If it is, it sets the
        `$stream` variable to true. */
        if (!in_array($content_type, $this->output_buffer_types, true) || $content_length > $this->max_content_length) {
            /* Setting the `$stream` variable to true. */
            $this->stream = true;
            /* Sending the headers of the response. */
            constants::get(YXORP_RESPONSE)->sendHeaders();
            /* Checking if the request has a parameter called `force_buffering`. If it does, it will not disable the output
            buffering. */
            if (!constants::get(YXORP_REQUEST)->params->has('force_buffering')) $event['proxy']->setOutputBuffering(false);
        }
    }

    /* A function that is called when the proxy receives data from the server. */
    public function onCurlWrite(): void
    {
        /* Checking if the response should be streamed or not. */
        if ($this->stream) {
            /* Echoing the data that is received from the server. */
            echo $event['data'];
            /* Flushing the output buffer. */
            flush();
        }
    }

    /* Used to exit the script when the response is streamed. */
    public function onCompleted(): void
    {
        /* Used to exit the script. */
        /* Checking if the response should be streamed or not. */
        if ($this->stream) {
            exit;
        }
    }
}