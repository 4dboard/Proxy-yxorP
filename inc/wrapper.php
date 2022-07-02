<?php namespace yxorP\inc;

/* Importing the namespace `yxorP` into the current namespace. */


use yxorP;

/* Importing the class `request` from the namespace `yxorP\http`. */

/* Importing the `response` class from the `http` namespace. */


abstract class wrapper
{
    /* A property that is used to filter the events. */
    protected ?string $url_pattern = null;

    /* Subscribing to all the events. */
    final public function subscribe($dispatcher): void
    {
        /* Subscribing to the event `EVENT_BUILD_CACHE`. */
        $dispatcher->addListener(EVENT_BUILD_CACHE, function () {
            /* Calling the `route` method with the `EVENT_BUILD_CACHE` parameter. */
            $this->route(EVENT_BUILD_CACHE);
        });
        /* Subscribing to the event `EVENT_BUILD_CONTEXT`. */
        $dispatcher->addListener(EVENT_BUILD_CONTEXT, function () {
            /* Calling the `route` method with the `EVENT_BUILD_CONTEXT` parameter. */
            $this->route(EVENT_BUILD_CONTEXT);
        });
        /* Subscribing to the event `EVENT_BUILD_INCLUDES`. */
        $dispatcher->addListener(EVENT_BUILD_INCLUDES, function () {
            /* Calling the `route` method with the `EVENT_BUILD_INCLUDES` parameter. */
            $this->route(EVENT_BUILD_INCLUDES);
        });
        /* Subscribing to the event `EVENT_BUILD_HEADERS`. */
        $dispatcher->addListener(EVENT_BUILD_HEADERS, function () {
            /* Calling the `route` method with the `EVENT_BUILD_HEADERS` parameter. */
            $this->route(EVENT_BUILD_HEADERS);
        });
        /* Subscribing to the event `EVENT_BUILD_REQUEST`. */
        $dispatcher->addListener(EVENT_BUILD_REQUEST, function () {
            /* Calling the `route` method with the `EVENT_BUILD_REQUEST` parameter. */
            $this->route(EVENT_BUILD_REQUEST);
        });
        /* Subscribing to the event `EVENT_FINAL`. */
        $dispatcher->addListener(EVENT_FINAL, function () {
            /* Calling the `route` method with the `EVENT_FINAL` parameter. */
            $this->route(EVENT_FINAL);
        });
        /* Subscribing to the event `EVENT_EXCEPTION`. */
        $dispatcher->addListener(EVENT_EXCEPTION, function () {
            /* Calling the `route` method with the `EVENT_EXCEPTION` parameter. */
            $this->route(EVENT_EXCEPTION);
        });
        /* Subscribing to the event `EVENT_BEFORE_SEND`. */
        $dispatcher->addListener(EVENT_BEFORE_SEND, function () {
            /* Calling the `route` method with the `EVENT_BEFORE_SEND` parameter. */
            $this->route(EVENT_BEFORE_SEND);
        });
        /* Subscribing to the event `EVENT_SENT`. */
        $dispatcher->addListener(EVENT_SENT, function () {
            /* Calling the `route` method with the `EVENT_SENT` parameter. */
            $this->route(EVENT_SENT);
        });
        /* Subscribing to the event `EVENT_WRITE`. */
        $dispatcher->addListener(EVENT_WRITE, function () {
            /* Calling the `route` method with the `EVENT_WRITE` parameter. */
            $this->route(EVENT_WRITE);
        });
        /* Subscribing to the event `EVENT_COMPLETE`. */
        $dispatcher->addListener(EVENT_COMPLETE, function () {
            /* Calling the `route` method with the `EVENT_COMPLETE` parameter. */
            $this->route(EVENT_COMPLETE);
        });
    }

    /* A method that is used to route the events to the appropriate methods. */

    private function route($event_name): void
    {
        /* Used to catch exceptions. */
        try {
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
                /* Calling the `onFinal` method. */
                case EVENT_FINAL:
                    /* Calling the `onFinal` method. */
                    $this->onFinal();
                    break;
                /* Calling the `onBeforeRequest` method. */
                case EVENT_BEFORE_SEND:
                    /* Calling the `onBeforeRequest` method. */
                    $this->onBeforeRequest();
                    break;
                /* Calling the `onHeadersReceived` method. */
                case EVENT_SENT:
                    /* Calling the `onHeadersReceived` method. */
                    $this->onHeadersReceived();
                    break;
                /* Calling the `onCurlWrite` method. */
                case EVENT_WRITE:
                    /* Calling the `onCurlWrite` method. */
                    $this->onCurlWrite();
                    break;
                /* Calling the `onCompleted` method. */
                case EVENT_COMPLETE:
                    /* Calling the `onCompleted` method. */
                    $this->onCompleted();
                    break;
            }
        } catch (Exception $e) {
            /* Calling the `onBuildException` method. */
            $this->build_exception($e);
        }
    }

    /* Used to check if the event should be executed. */

    public function onCheck()
    {
    }

    /* A method that is called when the event `EVENT_BUILD_CACHE` is triggered. */

    public function onBuildCache()
    {
    }

    /* A method that is called when the event `EVENT_BUILD_CONTEXT` is triggered. */

    public function onBuildContext()
    {
    }

    /* A method that is called when the event `EVENT_BUILD_INCLUDES` is triggered. */

    public function onBuildIncludes()
    {
    }

    /* A method that is called when the event `EVENT_BUILD_HEADERS` is triggered. */

    public function onBuildHeaders()
    {
    }

    /* A method that is called when the event `EVENT_BUILD_REQUEST` is triggered. */

    public function onBuildRequest()
    {
    }

    /* Used to build the result. */

    public function onFinal()
    {
    }

    /* Used to execute code before the request is sent. */

    public function onBeforeRequest()
    {
    }

    /* Used to execute code when the headers are received. */

    public function onHeadersReceived()
    {
    }

    /* Used to execute code when the headers are received. */

    public function onCurlWrite()
    {
    }

    /* Used to execute code when the request is completed. */

    public function onCompleted()
    {
    }

    /* Used to execute code when an exception is thrown. */

    public function onBuildException($e)
    {
    }
}