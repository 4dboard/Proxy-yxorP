<?php namespace yxorP\app\lib\http;

use Exception;
use yxorP\app\lib\yP;

abstract class wrapper
{
    protected ?string $url_pattern = null;

    final public function subscribe(yp $dispatcher): void
    {
        foreach (store::handler(YXORP_EVENT_LIST) as $event) {
            $dispatcher->addListener($event, function () use ($event) {
                $this->route($event);
            });
        }
    }

    private function route(string $event_name): void
    {
        try {
            if ($this->url_pattern && helpers::starts_with($this->url_pattern, CHAR_SLASH) && preg_match($this->url_pattern, YXORP_REQUEST_URI_FULL) !== 1 && stripos(YXORP_REQUEST_URI_FULL, $this->url_pattern) === 0) return;
            switch ($event_name) {
                case EVENT_BUILD_CACHE:
                    $this->onCheck()->onCache();
                    break;
                case EVENT_BUILD_CONTEXT:
                    $this->onCheck()->onContext();
                    break;
                case EVENT_BUILD_INCLUDES:
                    $this->onCheck()->onIncludes();
                    break;
                case EVENT_BUILD_HEADERS:
                    $this->onCheck()->onHeaders();
                    break;
                case EVENT_BUILD_REQUEST:
                    $this->onCheck()->onRequest();
                    break;
                case EVENT_BEFORE_SEND:
                    $this->onCheck()->onBeforeSend();
                    break;
                case EVENT_SEND:
                    $this->onCheck()->onSend();
                    break;
                case EVENT_SENT:
                    $this->onCheck()->onSent();
                    break;
                case EVENT_WRITE:
                    $this->onCheck()->onWrite();
                    break;
                case EVENT_COMPLETE:
                    $this->onComplete();
                    break;
                case EVENT_FINAL:
                    $this->onFinal();
                    break;
            }
        } catch (Exception $e) {
            $this->onException($e);
        }
    }

    public function onCache(): void
    {
    }

    public function onCheck(): self
    {
        return $this;
    }

    public function onContext(): void
    {
    }

    public function onIncludes(): void
    {
    }

    public function onHeaders(): void
    {
    }

    public function onRequest(): void
    {
    }

    public function onBeforeSend(): void
    {
    }

    public function onSend(): void
    {
    }

    public function onSent(): void
    {
    }

    public function onWrite(): void
    {
    }

    public function onComplete(): void
    {
    }

    public function onFinal(): void
    {
    }

    public function onException(Exception $e): void
    {
    }
}
