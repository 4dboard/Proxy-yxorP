<?php namespace yxorP\Helper;

use yxorP;
use yxorP\Cache\Cache;

require yxorP::get('PLUGIN_DIR') . '/guzzle.phar';
require yxorP::get('PLUGIN_DIR') . '/bugsnag.phar';

class FetchHelper
{
    public function __construct()
    {
        try {
            $this->forward();
        } catch (Exception $e) {
            if (yxorP::get('MIME') !== 'text/html') {
                header("Location: " . yxorP::get('SITE_CONTEXT')->PROXY_URL);
            } else {
                Handler::Register(yxorP::set('BUGSNAG', Client::make(yxorP::get('BUG_SNAG_KEY'))));
                if (yxorP::get('DEBUG')) echo $e->__toString();
                if (yxorP::get('BUGSNAG')) yxorP::get('BUGSNAG')->notifyException($e);
            }
        }
    }

    public function forward()
    {
        if ($_body = file_get_contents('php://input')) yxorP::get('REQUEST')->setBody(json_decode($_body, true), yxorP::get('MIME'));
        $this->dispatch('request.before_send');
        yxorP::get('RESPONSE')->setContent(yxorP::get('GUZZLE')->request(yxorP::get('REQUEST')->getMethod(), yxorP::get('REQUEST')->getUri(), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody());
        $this->dispatch('request.complete');
        Cache::cache(yxorP::get('CACHE_KEY'))->set(yxorP::get('RESPONSE')->getContent());
    }

    public function dispatch($event_name): void
    {
        if (isset(yxorP::$listeners[$event_name])) {
            $temp = (array)yxorP::$listeners[$event_name];
            foreach ($temp as $priority => $listeners) {
                foreach ((array)$listeners as $listener) {
                    if (is_callable($listener)) {
                        $listener();
                    }
                }
            }
        }
    }
}