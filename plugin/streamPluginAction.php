<?php

/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */

namespace yxorP\plugin;


use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;


/**
 * Extending the wrapper class, which is a class that allows you to listen to events.
 */
class streamPluginAction extends wrapper
{
    /**
     * An array of content types that will be streamed.
     */
    private array $output_buffer_types = array(VAR_TEXT_HTML, 'text/plain', 'text/css', 'text/javascript', 'application/x-javascript', 'application/javascript');
    /**
     * A variable that is used to determine if the response should be streamed or not.
     */
    private bool $stream = false;
    /**
     * Used to determine if the response should be streamed or not.
     */
    private int $max_content_length = 5000000;

    /**
     * Checking if the content type is in the array of content types that should be streamed. If it is, it sets the
     * `$stream` variable to true.
     *
     */
    public function onSent(): void
    {
        $content_type = store::handler(VAR_RESPONSE)->headers->get(VAR_CONTENT_TYPE);
        /**
         * Getting the content length of the response.
         */
        $content_length = store::handler(VAR_RESPONSE)->headers->get(VAR_CONTENT_LENGTH);
        /**
         * Checking if the content type is in the array of content types that should be streamed. If it is, it sets the
         * `$stream` variable to true.
         */
        if (!in_array($content_type, $this->output_buffer_types, true) || $content_length > $this->max_content_length) {
            /**
             * Setting the `$stream` variable to true.
             */
            $this->stream = true;
            /**
             * Sending the headers of the response.
             */
            store::handler(VAR_RESPONSE)->sendHeaders();
            /**
             * Checking if the request has a parameter called `force_buffering`. If it does, it will not disable the output
             * buffering.
             */
            //if (!store::handler(VAR_REQUEST)->params->has('force_buffering')) $event['proxy']->setOutputBuffering(0);
        }
    }

    /**
     * A function that is called when the proxy receives data from the server.
     *
     */
    public function onWrite(): void
    {
        /**
         * Checking if the response should be streamed or not.
         */
        if ($this->stream) {
            /**
             * Echoing the data that is received from the server.
             */
            //echo $event['data'];
            /**
             * Flushing the output buffer.
             */
            flush();
        }
    }

    /**
     * Used to exit the script when the response is streamed.
     *
     */
    public function onComplete(): void
    {
        /**
         * Used to exit the script.
         * Checking if the response should be streamed or not.
         */
        if ($this->stream) {
            exit;
        }
    }
}
