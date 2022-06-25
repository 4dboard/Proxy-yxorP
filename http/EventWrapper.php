<?php namespace yxorP\Http;

use yxorP;

abstract /**
 *
 */
class EventWrapper
{
    protected $url_pattern;

    final public function subscribe($dispatcher): void
    {
        $dispatcher->addListener('request.before_send', function () {
            $this->route('request.before_send');
        });
        $dispatcher->addListener('request.sent', function () {
            $this->route('request.sent');
        });
        $dispatcher->addListener('curl.callback.write', function () {
            $this->route('curl.callback.write');
        });
        $dispatcher->addListener('request.complete', function () {
            $this->route('request.complete');
        });
    }

    public function onBeforeRequest()
    {
    }

    public function onHeadersReceived()
    {
    }

    public function onCurlWrite()
    {
    }

    public function onCompleted()
    {
    }

    private function route($event_name): void
    {
        $url = yxorP::get('REQUEST')->getUri();
        if ($this->url_pattern) {
            if (GeneralHelpers::starts_with($this->url_pattern, '/') && preg_match($this->url_pattern, $url) !== 1) {
                return;
            }
            if (stripos($url, $this->url_pattern) === false) {
                return;
            }
        }
        switch ($event_name) {
            case 'request.before_send':
                $this->onBeforeRequest();
                break;
            case 'request.sent':
                $this->onHeadersReceived();
                break;
            case 'curl.callback.write':
                $this->onCurlWrite();
                break;
            case 'request.complete':
                $this->onCompleted();
                break;
        }
    }
}