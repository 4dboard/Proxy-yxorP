<?php namespace yxorP\Http;
if (!\class_exists('EventWrapper')) {
    abstract class EventWrapper
    {
        protected $url_pattern;

        final public function subscribe($dispatcher): void
        {
            $dispatcher::addListener('request.before_send', function ($event) {
                $this->route('request.before_send', $event);
            });
            $dispatcher::addListener('request.sent', function ($event) {
                $this->route('request.sent', $event);
            });
            $dispatcher::addListener('curl.callback.write', function ($event) {
                $this->route('curl.callback.write', $event);
            });
            $dispatcher::addListener('request.complete', function ($event) {
                $this->route('request.complete', $event);
            });
        }

        private function route($event_name, ProxyEvent $event): void
        {
            $url = $event['request']->getUri();
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
                    $this->onBeforeRequest($event);
                    break;
                case 'request.sent':
                    $this->onHeadersReceived($event);
                    break;
                case 'curl.callback.write':
                    $this->onCurlWrite($event);
                    break;
                case 'request.complete':
                    $this->onCompleted($event);
                    break;
            }
        }

        public function onBeforeRequest(ProxyEvent $event)
        {
        }

        public function onHeadersReceived(ProxyEvent $event)
        {
        }

        public function onCurlWrite(ProxyEvent $event)
        {
        }

        public function onCompleted(ProxyEvent $event)
        {
        }

        final protected function event()
        {
            return $GLOBALS['EVENT'] ?: $GLOBALS['EVENT'] = new ProxyEvent(array('request' => Request::createFromGlobals(), 'response' => new Response()));
        }
    }
}