<?php namespace yxorP\app\lib\http;

/**
 * Importing the namespace `yxorP` into the current namespace.
 */


use Exception;
use yxorP\app\yP;

/**
 * Importing the class `request` from the namespace `yxorP\app\lib\http`.
 */

/**
 * Importing the `response` class from the `http` namespace.
 */
abstract class wrapper
{
    /**
     * A property that is used to filter the events.
     */
    protected ?string $url_pattern = null;


    /**
     * Subscribing to all the events.
     */
    final public function subscribe(yp $dispatcher): void
    {
        /**
         * Adding a listener to all the events.
         */
        foreach (store::handler(YXORP_EVENT_LIST) as $event) {
            /**
             * Adding a listener to the event.
             */
            $dispatcher->addListener($event, function () use ($event) {
                /**
                 * Calling the `route` method.
                 */
                $this->route($event);
            });
        }
    }

    /**
     * A method that is used to route the events to the appropriate methods.
     */

    private function route(string $event_name): void
    {
        /**
         * Used to catch exceptions.
         */
        try {

            if ($this->url_pattern && helpers::starts_with($this->url_pattern, CHAR_SLASH)
                && preg_match($this->url_pattern, YXORP_REQUEST_URI_FULL) !== 1
                && stripos(YXORP_REQUEST_URI_FULL, $this->url_pattern) === 0) return;

            /**
             * Used to check if the event should be executed.
             */
            $this->onCheck();

            /**
             * Used to route the events to the appropriate methods.
             */
            switch ($event_name) {
                case EVENT_BUILD_CACHE:
                    $this->onCache();
                    break;
                case EVENT_BUILD_CONTEXT:
                    $this->onContext();
                    break;
                case EVENT_BUILD_INCLUDES:
                    $this->onIncludes();
                    break;
                case EVENT_BUILD_HEADERS:
                    $this->onHeaders();
                    break;
                case EVENT_BUILD_REQUEST:
                    $this->onRequest();
                    break;
                case EVENT_BEFORE_SEND:
                    $this->onBeforeSend();
                    break;
                case EVENT_SEND:
                    $this->onSend();
                    break;
                case EVENT_SENT:
                    $this->onSent();
                    break;
                case EVENT_WRITE:
                    $this->onWrite();
                    break;
                case EVENT_COMPLETE:
                    $this->onComplete();
                    break;
                case EVENT_FINAL:
                    $this->onFinal();
                    break;
            }
        } catch (Exception $e) {
            /**
             * Calling the `onException` method.
             */
            $this->onException($e);
        }
    }

    /**
     * Used to check if the event should be executed.
     *
     */
    public function onCheck(): void
    {
    }

    /**
     * A method that is called when the event `EVENT_BUILD_CACHE` is triggered.
     *
     */
    public function onCache(): void
    {
    }

    /**
     * A method that is called when the event `EVENT_BUILD_CONTEXT` is triggered.
     *
     */
    public function onContext(): void
    {
    }

    /**
     * A method that is called when the event `EVENT_BUILD_INCLUDES` is triggered.
     *
     */
    public function onIncludes(): void
    {
    }

    /**
     * A method that is called when the event `EVENT_BUILD_HEADERS` is triggered.
     *
     */
    public function onHeaders(): void
    {
    }

    /**
     * A method that is called when the event `EVENT_BUILD_REQUEST` is triggered.
     *
     */
    public function onRequest(): void
    {
    }

    /**
     * Used to build the result.
     *
     */
    public function onBeforeSend(): void
    {
    }

    /**
     * Used to execute code when the request is sent.
     *
     */
    public function onSend(): void
    {
    }

    /**
     * Used to execute code before the request is sent.
     *
     */
    public function onSent(): void
    {
    }

    /**
     * Used to execute code when the headers are received.
     *
     */
    public function onWrite(): void
    {
    }

    /**
     * Used to execute code when the headers are received.
     *
     */
    public function onComplete(): void
    {
    }

    /**
     * Used to execute code when the request is completed.
     *
     */
    public function onFinal(): void
    {
    }

    /**
     * Used to execute code when an exception is thrown.
     *
     */
    public function onException(Exception $e): void
    {
    }
}