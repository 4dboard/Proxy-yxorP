<?php /* yxorP */

namespace yxorP\Helpers;

use Bugsnag\Client;
use Bugsnag\Handler;
use yxorp\Cache\Cache;
use yxorP\http\ProxyEvent;
use yxorP\Http\Request;
use yxorP\Http\Response;

class FetchHelper
{
    public function __construct()
    {


        \yxorp::FILES_CHECK($GLOBALS['SITE_CONTEXT']->DIR_FULL . '/assets', false);
        \yxorp::FILES_CHECK($GLOBALS['PLUGIN_DIR'] . '/override/default/assets', false);

        require($GLOBALS['PLUGIN_DIR'] . '/plugin/AbstractPlugin.php');

        foreach (file($GLOBALS['PLUGIN_DIR'] . '/.env') as $line) {
            if (trim(strpos(trim($line), '#') === 0)) continue;
            [$name, $value] = explode('=', $line, 2);
            $GLOBALS[$name] = $value;
        }

        Handler::register($GLOBALS['BUGSNAG'] = Client::make($GLOBALS['BUG_SNAG_KEY']));

        try {

            if (str_contains($GLOBALS['SITE_CONTEXT']->SITE_URL . $GLOBALS['SITE_CONTEXT']->REQUEST_URI, ($GLOBALS['SITE_CONTEXT']->SITE_URL . '/dashboard'))) {
                require($GLOBALS['PLUGIN_DIR'] . '/dashboard/index.php');
                exit;
            }

            foreach ((array)json_decode(file_get_contents($GLOBALS['SITE_CONTEXT']->DIR_FULL . '/overrides.json'), false) as $key => $value) $GLOBALS[$key] = $value;
            foreach (array('/http') as $_asset) \yxorp::FILES_CHECK($GLOBALS['PLUGIN_DIR'] . $_asset, true);

            foreach ($GLOBALS['PLUGINS'] as $plugin) {
                if (file_exists($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php')) require($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php');
                elseif (class_exists('\\yxorP\\plugin\\' . $plugin)) $plugin = '\\yxorP\\plugin\\' . $plugin;
                $this->addSubscriber(new $plugin());
            }


            Cache::cache($GLOBALS['CACHE_KEY'])->set($this->forward(Request::createFromGlobals(), $GLOBALS['SITE_CONTEXT']->PROXY_URL));

        } catch (exception $e) {
            if ($GLOBALS['MIME'] !== 'text/html') header("Location: " . $GLOBALS['SITE_CONTEXT']->PROXY_URL); else {
                if ($GLOBALS['DEBUG']) echo $e->__toString();
                $GLOBALS['BUGSNAG']->notifyException($e);
            }
        }
    }

    public function forward(Request $request, $url): string
    {
        $request->setUrl($url);

        $response = new Response();

        $this->dispatch('request.before_send', new ProxyEvent(array('request' => $request, 'response' => $response)));

        if ($_body = file_get_contents('php://input')) $request->setBody(json_decode($_body, true), $GLOBALS['MIME']);

        $this->client = $this->client ?: new \GuzzleHttp\Client(['allow_redirects' => true, 'http_errors' => true, 'decode_content' => true, 'verify' => false, 'cookies' => true, 'idn_conversion' => true]);

        $response->setContent($this->client->request($request->getMethod(), $request->getUri(), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody());

        $this->dispatch('request.complete', new ProxyEvent(array('request' => $request, 'response' => $response)));

        return $response->getContent();

    }


    public function dispatch($event_name, $event): void
    {
        if (isset($this->listeners[$event_name])) {
            $temp = (array)$this->listeners[$event_name];

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
