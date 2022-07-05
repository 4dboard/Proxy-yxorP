<?php namespace yxorP\inc;

/* Importing the namespace `yxorP` into the current namespace. */


use Exception;
use yxorP;

/* Importing the class `request` from the namespace `yxorP\http`. */

/* Importing the `response` class from the `http` namespace. */


abstract class wrapper
{
    /* A property that is used to filter the events. */
    protected ?string $url_pattern = null;


    /* Subscribing to all the events. */
    final public function subscribe(yxorP $dispatcher): void
    {
        /* Adding a listener to all the events. */
        foreach ([EVENT_BUILD_CACHE, EVENT_BUILD_CACHE, EVENT_BUILD_CONTEXT, EVENT_BUILD_INCLUDES, EVENT_BUILD_HEADERS, EVENT_BUILD_REQUEST, EVENT_BEFORE_SEND, EVENT_SENT, EVENT_WRITE, EVENT_COMPLETE, EVENT_EXCEPTION, EVENT_FINAL] as $event) {
            /* Adding a listener to the event. */
            $dispatcher->addListener($event, function () use ($event) {
                /* Calling the `route` method. */
                $this->route($event);
            });
        }
    }

    /* A method that is used to route the events to the appropriate methods. */
    private function route(string $event_name): void
    {
        /* Used to catch exceptions. */
        try {

            if ($this->url_pattern && generalHelper::starts_with($this->url_pattern, CHAR_SLASH)
                && preg_match($this->url_pattern, Constants::get(YXORP_REQUEST_URI_FULL)) !== 1
                && stripos(Constants::get(YXORP_REQUEST_URI_FULL), $this->url_pattern) === false) return;

            /* Used to check if the event should be executed. */
            $this->onCheck();

            /* Used to route the events to the appropriate methods. */
            switch ($event_name) {
                /* Calling the `onBuildCache` method. */
                case EVENT_BUILD_CACHE:
                    /* Calling the `onBuildCache` method. */
                    $this->onBuildCache();
                    break;
                /* Calling the `onBuildContext` method. */
                case EVENT_BUILD_CONTEXT:
                    /* Calling the `onBuildContext` method. */
                    $this->onBuildContext();
                    break;
                /* Calling the `onBuildIncludes` method. */
                case EVENT_BUILD_INCLUDES:
                    /* Calling the `onBuildIncludes` method. */
                    $this->onBuildIncludes();
                    break;
                /* Calling the `onBuildHeaders` method. */
                case EVENT_BUILD_HEADERS:
                    /* Calling the `onBuildHeaders` method. */
                    $this->onBuildHeaders();
                    break;
                /* Calling the `onBuildRequest` method. */
                case EVENT_BUILD_REQUEST:
                    /* Calling the `onBuildRequest` method. */
                    $this->onBuildRequest();
                    break;
                /* Calling the `onBeforeSend` method. */
                case EVENT_BEFORE_SEND:
                    /* Calling the `onBeforeSend` method. */
                    $this->onBeforeSend();
                    break;
                /* Calling the `onEventSent` method. */
                case EVENT_SENT:
                    /* Calling the `onEventSent` method. */
                    $this->onEventSent();
                    break;
                /* Calling the `onEventWrite` method. */
                case EVENT_WRITE:
                    /* Calling the `onEventWrite` method. */
                    $this->onEventWrite();
                    break;
                /* Calling the `onEventComplete` method. */
                case EVENT_COMPLETE:
                    /* Calling the `onEventComplete` method. */
                    $this->onEventComplete();
                    break;
                /* Calling the `onEventFinal` method. */
                case EVENT_FINAL:
                    /* Calling the `onEventFinal` method. */
                    $this->onEventFinal();
                    break;
            }
        } catch (Exception $e) {
            /* Calling the `onBuildException` method. */
            $this->onBuildException($e);
        }
    }

    /* Used to check if the event should be executed. */

    public function onCheck(): void
    {
    }

    /* A method that is called when the event `EVENT_BUILD_CACHE` is triggered. */

    public function onBuildCache(): void
    {
    }

    /* A method that is called when the event `EVENT_BUILD_CONTEXT` is triggered. */

    public function onBuildContext(): void
    {
    }

    /* A method that is called when the event `EVENT_BUILD_INCLUDES` is triggered. */

    public function onBuildIncludes(): void
    {
    }

    /* A method that is called when the event `EVENT_BUILD_HEADERS` is triggered. */

    public function onBuildHeaders(): void
    {
    }

    /* A method that is called when the event `EVENT_BUILD_REQUEST` is triggered. */

    public function onBuildRequest(): void
    {
    }

    /* Used to build the result. */

    public function onBeforeSend(): void
    {
    }

    /* Used to execute code before the request is sent. */

    public function onEventSent(): void
    {
    }

    /* Used to execute code when the headers are received. */

    public function onEventWrite(): void
    {
    }

    /* Used to execute code when the headers are received. */

    public function onEventComplete(): void
    {
    }

    /* Used to execute code when the request is completed. */

    public function onEventFinal(): void
    {
    }

    /* Used to execute code when an exception is thrown. */

    public function onBuildException($e): void
    {
    }
}