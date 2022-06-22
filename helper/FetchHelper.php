<?php namespace yxorP\Helper;
require $GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require $GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';

use Bugsnag\Client;
use Bugsnag\Handler;
use yxorP\Cache\Cache;
use yxorP\Http\ProxyEvent;


class FetchHelper
{
    public function __construct()
    {
        Handler::register($GLOBALS['BUGSNAG'] = Client::make($GLOBALS['BUG_SNAG_KEY']));
        //try {
        Cache::cache($GLOBALS['CACHE_KEY'])->set($this->forward($GLOBALS['SITE_CONTEXT']->PROXY_URL));
        /* } catch (exception $e) {
             if ($GLOBALS['MIME'] !== 'text/html') {
                 header("Location: " . $GLOBALS['SITE_CONTEXT']->PROXY_URL);
             } else {
                 if ($GLOBALS['DEBUG']) {
                     echo $e->__toString();
                 }
                 $GLOBALS['BUGSNAG']->notifyException($e);
             }
         }*/
    }

    public function forward($url): string
    {
        $GLOBALS['REQUEST']->setUrl($url);
        $this->dispatch('request.before_send', new ProxyEvent(array('request' => $GLOBALS['REQUEST'], 'response' => $GLOBALS['RESPONSE'])));
        if ($_body = file_get_contents('php://input')) {
            $GLOBALS['REQUEST']->setBody(json_decode($_body, true), $GLOBALS['MIME']);
        }
        $GLOBALS['RESPONSE']->setContent($GLOBALS['GUZZLE']->request($GLOBALS['REQUEST']->getMethod(), $GLOBALS['REQUEST']->getUri(), json_decode(json_encode($GLOBALS['REQUEST']), true, 512, JSON_THROW_ON_ERROR))->getBody());
        $this->dispatch('request.complete', new ProxyEvent(array('request' => $GLOBALS['REQUEST'], 'response' => $GLOBALS['RESPONSE'])));
        return $GLOBALS['RESPONSE']->getContent();
    }

    public function dispatch($event_name, $event): void
    {
        if (isset(\yxorP::$listeners[$event_name])) {
            $temp = (array)\yxorP::$listeners[$event_name];
            foreach ($temp as $priority => $listeners) {
                foreach ((array)$listeners as $listener) {
                    if (is_callable($listener)) {
                        $listener($event);
                    }
                }
            }
        }
    }
}