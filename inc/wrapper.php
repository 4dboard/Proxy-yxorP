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
    final public function subscribe(yxorP\yxorP $dispatcher): void
    {
        /* Adding a listener to all the events. */
        foreach ([EVENT_BUILD_CACHE, EVENT_BUILD_CONTEXT, EVENT_BUILD_INCLUDES, EVENT_BUILD_HEADERS, EVENT_BUILD_REQUEST, EVENT_BEFORE_SEND, EVENT_SEND, EVENT_SENT, EVENT_WRITE, EVENT_COMPLETE, EVENT_FINAL, EVENT_EXCEPTION] as $event) {
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
                case EVENT_BUILD_CACHE:
                    $this->onBuildCache();
                    break;
                case EVENT_BUILD_CONTEXT:
                    $this->onBuildContext();
                    break;
                case EVENT_BUILD_INCLUDES:
                    $this->onBuildIncludes();
                    break;
                case EVENT_BUILD_HEADERS:
                    $this->onBuildHeaders();
                    break;
                case EVENT_BUILD_REQUEST:
                    $this->onBuildRequest();
                    break;
                case EVENT_BEFORE_SEND:
                    $this->onBeforeSend();
                    break;
                case EVENT_SENT:
                    $this->onEventSent();
                    break;
                case EVENT_WRITE:
                    $this->onEventWrite();
                    break;
                case EVENT_COMPLETE:
                    $this->onEventComplete();
                    break;
                case EVENT_FINAL:
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

    public function onBuildException(Exception $e): void
    {
    }
}