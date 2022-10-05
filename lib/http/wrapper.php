<?php namespace yxorP\lib\http;

/**
 * Importing the namespace `yxorP` into the current namespace.
 */


use Exception;
use yxorP\lib\yP;

/**
 * Importing the class `request` from the namespace `yxorP\lib\http`.
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

            /* Used to filter the events. */
            if ($this->url_pattern && helpers::starts_with($this->url_pattern, CHAR_SLASH) && preg_match($this->url_pattern, YXORP_REQUEST_URI_FULL) !== 1 && stripos(YXORP_REQUEST_URI_FULL, $this->url_pattern) === 0) return;

            /**
             * Used to route the events to the appropriate methods.
             */
            echo $event_name;
            switch ($event_name) {
                case EVENT_BUILD_CACHE: /* Calling the `onCheck` method and then the `onCache` method. */
                    $this->onCheck()->onCache();
                    break;
                case EVENT_BUILD_CONTEXT: /* Calling the `onCheck` method and then the `onContext` method. */
                    $this->onCheck()->onContext();
                    break;
                case EVENT_BUILD_INCLUDES: /* Calling the `onCheck` method and then the `onIncludes` method. */
                    $this->onCheck()->onIncludes();
                    break;
                case EVENT_BUILD_HEADERS: /* Calling the `onCheck` method and then the `onHeaders` method. */
                    $this->onCheck()->onHeaders();
                    break;
                case EVENT_BUILD_REQUEST: /* Calling the `onCheck` method and then the `onRequest` method. */
                    $this->onCheck()->onRequest();
                    break;
                case EVENT_BEFORE_SEND: /* Calling the `onCheck` method and then the `onBeforeSend` method. */
                    $this->onCheck()->onBeforeSend();
                    break;
                case EVENT_SEND: /* Calling the `onCheck` method and then the `onSend` method. */
                    $this->onCheck()->onSend();
                    break;
                case EVENT_SENT: /* Calling the `onCheck` method and then the `onSent` method. */
                    $this->onCheck()->onSent();
                    break;
                case EVENT_WRITE: /* Calling the `onCheck` method and then the `onWrite` method. */
                    $this->onCheck()->onWrite();
                    break;
                case EVENT_COMPLETE: /* Calling the `onComplete` method. */
                    $this->onComplete();
                    break;
                case EVENT_FINAL: /* Calling the `onFinal` method. */
                    $this->onFinal();
                    break;
            }
        } catch (Exception $e) {
            $this->onException($e);
        }
    }

    /**
     * A method that is called when the event `EVENT_BUILD_CACHE` is triggered.
     *
     */
    public
    function onCache(): void
    {
    }

    /**
     * Used to check if the event should be executed.
     *
     */
    public
    function onCheck(): self
    {
        return $this;
    }

    /**
     * A method that is called when the event `EVENT_BUILD_CONTEXT` is triggered.
     *
     */
    public
    function onContext(): void
    {
    }

    /**
     * A method that is called when the event `EVENT_BUILD_INCLUDES` is triggered.
     *
     */
    public
    function onIncludes(): void
    {
    }

    /**
     * A method that is called when the event `EVENT_BUILD_HEADERS` is triggered.
     *
     */
    public
    function onHeaders(): void
    {
    }

    /**
     * A method that is called when the event `EVENT_BUILD_REQUEST` is triggered.
     *
     */
    public
    function onRequest(): void
    {
    }

    /**
     * Used to build the result.
     *
     */
    public
    function onBeforeSend(): void
    {
    }

    /**
     * Used to execute code when the request is sent.
     *
     */
    public
    function onSend(): void
    {
    }

    /**
     * Used to execute code before the request is sent.
     *
     */
    public
    function onSent(): void
    {
    }

    /**
     * Used to execute code when the headers are received.
     *
     */
    public
    function onWrite(): void
    {
    }

    /**
     * Used to execute code when the headers are received.
     *
     */
    public
    function onComplete(): void
    {
    }

    /**
     * Used to execute code when the request is completed.
     *
     */
    public
    function onFinal(): void
    {
    }

    /**
     * Used to execute code when an exception is thrown.
     *
     */
    public
    function onException(Exception $e): void
    {
    }
}
