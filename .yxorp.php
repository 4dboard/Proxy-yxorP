<?php error_reporting(0);

use Bugsnag\Client;
use Bugsnag\Handler;
use yxorp\Http;
use yxorP\Http\ProxyEvent;
use yxorP\Http\Request;
use yxorP\Http\Response;

require (@$GLOBALS['PLUGIN_DIR'] = __DIR__) . '/cache/Cache.php';
require @$GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require @$GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';

header_remove('X-Powered-By');
header_remove("X-Frame-Options");
header_remove("Content-Security-Policy");
header_remove("Access-Control-Allow-Origin");
header_remove("Access-Control-Allow-Methods");
header_remove("Access-Control-Expose-Headers");
header("Access-Control-Allow-Origin: *");

class yxorp
{

    private $request;
    private $client;
    private $cookieDir;

    private bool $output_buffering = true;
    private string $output_buffer = '';
 
    private array $listeners = array();

    public function __construct($TARGET_URL)
    {
        @ini_set('default_charset', 'utf-8');

        @$GLOBALS['SITE_URL'] = 'https://' . @$GLOBALS['SITE_HOST'] = @$_SERVER['HTTP_HOST'];
        @$GLOBALS['TARGET_HOST'] = @parse_url(@$GLOBALS['TARGET_URL'] = @$TARGET_URL, PHP_URL_HOST);
        @$GLOBALS['CACHE_KEY'] = @base64_encode(@$GLOBALS['REQUEST_URI'] = @$_SERVER['REQUEST_URI']);

        if (!file_exists(@$GLOBALS['CACHE_DIR'] = @$GLOBALS['PLUGIN_DIR'] . '/.cache/')) {
            if (!mkdir($concurrentDirectory = $concurrentDirectory = @$GLOBALS['CACHE_DIR'], 0777, true) && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
        }

        if (!file_exists(@$GLOBALS['COOKIE_DIR'] = @$GLOBALS['PLUGIN_DIR'] . '/.cookie/')) {
            if (!mkdir($concurrentDirectory = $concurrentDirectory = @$GLOBALS['COOKIE_DIR'], 0777, true) && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
        }

        $_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $_ext = @pathinfo(@strtok(@$GLOBALS['REQUEST_URI'], '?'), PATHINFO_EXTENSION);

        @$GLOBALS['MIME'] = (@array_key_exists(@$_ext, @$_types)) ? @$_types[@$_ext] : 'text/html';
        @header('Content-Type: ' . @$GLOBALS['MIME'] . '; charset=UTF-8');
        @$GLOBALS['CACHE_ADAPTER'] = new yxorP\cache\Cache();

        if (@$_GET["DONCLEAR"] !== null) {
            @$GLOBALS['CACHE_ADAPTER']->clean();
        }
        if (!(@$GLOBALS['CACHE_ADAPTER'])->isExisting(@$GLOBALS['CACHE_KEY'])) {
            $this->FETCH();
        } else {
            echo @$GLOBALS['CACHE_ADAPTER']->get(@$GLOBALS['CACHE_KEY']);
        }

    }

    private function FETCH()
    {
        require(@$GLOBALS['PLUGIN_DIR'] . '/plugin/AbstractPlugin.php');

        @$GLOBALS['OVERRIDE_DIR'] = file_exists(@$GLOBALS['PLUGIN_DIR'] . '/override/' . @$GLOBALS['TARGET_HOST']) ?
            @$GLOBALS['PLUGIN_DIR'] . '/override/' . @$GLOBALS['TARGET_HOST'] : @$GLOBALS['PLUGIN_DIR'] . '/override/default';

        $this->FILES_CHECK(@$GLOBALS['OVERRIDE_DIR'] . '/assets', false);
        $this->FILES_CHECK(@$GLOBALS['PLUGIN_DIR'] . '/override/default/assets', false);

        try {

            foreach (@file(@$GLOBALS['PLUGIN_DIR'] . '/.env') as $line) {
                if (@trim(@strpos(@trim(@$line), '#') === 0)) {
                    continue;
                }
                [$name, $value] = explode('=', @$line, 2);
                @$GLOBALS[$name] = @$value;
            }

            Handler::register(@$GLOBALS['BUGSNAG'] = Client::make(@$GLOBALS['BUG_SNAG_KEY']));

            foreach ((array)@json_decode(@file_get_contents(@$GLOBALS['OVERRIDE_DIR'] . '/overrides.json'),
                false, 512, JSON_THROW_ON_ERROR) as $key => $value) {
                @$GLOBALS[$key] = @$value;
            }

            foreach (array('/helper', '/http') as $_asset) $this->FILES_CHECK(@$GLOBALS['PLUGIN_DIR'] . $_asset, true);

            foreach (@$GLOBALS['PLUGINS'] as $plugin) {
                if (@file_exists(@$GLOBALS['PLUGIN_DIR'] . '/plugin/' . @$plugin . '.php')) {
                    require(@$GLOBALS['PLUGIN_DIR'] . '/plugin/' . @$plugin . '.php');
                } elseif (@class_exists('\\yxorP\\plugin\\' . @$plugin)) {
                    @$plugin = '\\yxorP\\plugin\\' . @$plugin;
                }
                $this->addSubscriber(new $plugin());
            }

            echo $_content = @$this->forward(Http\Request::createFromGlobals(), @$GLOBALS['PROXY_URL'] = @$GLOBALS['TARGET_URL'] . @$GLOBALS['REQUEST_URI'] = @$_SERVER['REQUEST_URI'])->getContent();
            @$GLOBALS['CACHE_ADAPTER']->set(@$GLOBALS['CACHE_KEY'], @preg_replace_callback('(<p>(.*?)</p>)', static function ($m) {
                    return '<p>' . @str_replace(fgetcsv(fopen(@$GLOBALS['PLUGIN_DIR'] . '/override/default/search_rewrite.csv', 'rb')),
                            @fgetcsv(@fopen(@$GLOBALS['PLUGIN_DIR'] . '/override/default/replace_rewrite.csv', 'rb')), @$m[1]);
                }, @$_content) . '</p>', @$GLOBALS['CACHE_TIME'] = @time() + (60 * 60 * 24 * 31));

        } catch (exception $e) {
            @$GLOBALS['BUGSNAG']->notifyException(@$e->__toString());
            if (@$GLOBALS['MIME'] !== 'text/html') {
                return @header("Location: " . @$GLOBALS['PROXY_URL']);
            }
        }
    }

    public function forward(Request $request, $url): Response
    {
        $request->setUrl(@$url);

        $this->request = @$request;
        $response = new Response();

        $this->dispatch('request.before_send', new ProxyEvent(array(
            'request' => $this->request,
            'response' => @$response
        )));


        if (!$this->request->params->has('request.complete')) {
            $this->client = $this->client ?: new \GuzzleHttp\Client();
            $response->setContent($this->client->request($this->request->getMethod(), $this->request->getUri(), $_REQUEST, $_FILES)->getBody());
        }

        $this->dispatch('request.complete', new ProxyEvent(array(
            'request' => $this->request,
            'response' => @$response
        )));

        return @$response;


    }

    public function FILES_CHECK($dir, $inc): void
    {
        foreach (@scandir(@$dir) as $x) {
            if (@strlen(@$x) > 3) {
                if (@str_contains(@$x, 'Interface')) continue;
                if (@is_dir($_loc = @$dir . '/' . @$x)) {
                    $this->FILES_CHECK(@$_loc, $inc);
                } else if (@$inc) {
                    require_once(@$_loc);
                } else if (@str_contains(@$GLOBALS['REQUEST_URI'], @$x)) {
                    echo @file_get_contents(@$_loc);
                    exit;
                }
            }
        }

    }

    public function addSubscriber($subscriber): void
    {
        if (@method_exists(@$subscriber, 'subscribe')) {
            $subscriber->subscribe($this);
        }
    }

    private function dispatch($event_name, $event): void
    {
        if (isset($this->listeners[@$event_name])) {
            $temp = (array)$this->listeners[@$event_name];

            foreach ($temp as $priority => $listeners) {
                foreach ((array)$listeners as $listener) {
                    if (@is_callable(@$listener)) {
                        @$listener(@$event);
                    }
                }
            }
        }
    }

    public function setOutputBuffering($output_buffering): void
    {
        $this->output_buffering = @$output_buffering;
    }

    public function addListener($event, $callback, $priority = 0): void
    {
        $this->listeners[$event][$priority][] = @$callback;
    }

    private function write_callback($str): int
    {

        $len = @strlen(@$str);

        $this->dispatch('curl.callback.write', new ProxyEvent(array(
            'request' => $this->request,
            'data' => @$str
        )));

        if ($this->output_buffering) {
            $this->output_buffer .= @$str;
        }

        return @$len;
    }


}