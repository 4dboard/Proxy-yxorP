<?php /* yxorP */
error_reporting(0);
use Bugsnag\Client;
use Bugsnag\Handler;
use GuzzleHttp\Exception\GuzzleException;
use yxorp\Http;
use yxorP\Http\ProxyEvent;
use yxorP\Http\Request;
use yxorP\Http\Response;

$GLOBALS['PLUGIN_DIR'] = __DIR__;

require $GLOBALS['PLUGIN_DIR'] . '/cache/Cache.php';
require $GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require $GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';


class yxorp
{

    private $client;

    private array $listeners = array();

    public function __construct($TARGET_URL)
    {
        ini_set('default_charset', 'utf-8');

        $GLOBALS['SITE_URL'] = 'https://' . $GLOBALS['SITE_HOST'] = $_SERVER['HTTP_HOST'];
        $GLOBALS['TARGET_HOST'] = parse_url(($GLOBALS['TARGET_URL'] = $TARGET_URL), PHP_URL_HOST);

        if (str_contains($GLOBALS['SITE_URL'], "localhost")) error_reporting(1);

        /*
            foreach ((array)json_decode(file_get_contents($GLOBALS['PLUGIN_DIR'] . '/override/default/overrides.json')) as $key => $value)
                if (str_contains($GLOBALS['SITE_HOST'], $key)) $GLOBALS['TARGET_HOST'] = $GLOBALS['TARGET_URL'] = ($this->SUB($GLOBALS['SITE_HOST']) && $this->SUB($value)) ? str_replace($this->SUB($value), $this->SUB($GLOBALS['SITE_HOST']), $value) : $value;
            if(!$GLOBALS['TARGET_HOST']) $GLOBALS['TARGET_HOST'] = "www.example.com";
        */

        $GLOBALS['CACHE_KEY'] = base64_encode(($GLOBALS['REQUEST_URI'] = $_SERVER['REQUEST_URI']));
        $GLOBALS['CACHE_TIME'] = @time() + (60 * 60 * 24 * 31 * 365);

        $_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $_ext = pathinfo(strtok($GLOBALS['REQUEST_URI'], '?'), PATHINFO_EXTENSION);

        $GLOBALS['MIME'] = null;

        if (!$GLOBALS['MIME'] && array_key_exists($_ext, $_types)) {
            $GLOBALS['MIME'] = $_types[$_ext];
        } else if (!$GLOBALS['MIME'] && str_contains($GLOBALS['REQUEST_URI'], '/sitemap/')) {
            $GLOBALS['MIME'] = 'application/xml';
        } else if (!$GLOBALS['MIME'] && str_contains($GLOBALS['REQUEST_URI'], 'fit=crop')) {
            $GLOBALS['MIME'] = 'image/png';
        } else {
            $GLOBALS['MIME'] = 'text/html';
        }

        header('Content-Type: ' . $GLOBALS['MIME'] . '; charset=UTF-8');

        $GLOBALS['CACHE_ADAPTER'] = new yxorP\cache\Cache();

        if (isset($_GET["CLECHE"])) {
            $GLOBALS['CACHE_ADAPTER']->clean();
        }

        $GLOBALS['CACHE_ADAPTER']->clean();

        if (!($GLOBALS['CACHE_ADAPTER'])->isExisting($GLOBALS['CACHE_KEY'])) {
            $this->FETCH();
        }

        echo $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['CACHE_KEY']);

    }

    private function FETCH(): void
    {

        try {

            $GLOBALS['OVERRIDE_DIR'] = is_dir($GLOBALS['PLUGIN_DIR'] . '/override/' . $GLOBALS['TARGET_HOST']) ?
                $GLOBALS['PLUGIN_DIR'] . '/override/' . $GLOBALS['TARGET_HOST'] : $GLOBALS['PLUGIN_DIR'] . '/override/default';

            $this->FILES_CHECK($GLOBALS['OVERRIDE_DIR'] . '/asset', false);
            $this->FILES_CHECK($GLOBALS['PLUGIN_DIR'] . '/override/default/asset', false);

            require($GLOBALS['PLUGIN_DIR'] . '/plugin/AbstractPlugin.php');

            foreach (file($GLOBALS['PLUGIN_DIR'] . '/.env') as $line) {
                if (trim(strpos(trim($line), '#') === 0)) {
                    continue;
                }
                [$name, $value] = explode('=', $line, 2);
                $GLOBALS[$name] = $value;
            }

            Handler::register($GLOBALS['BUGSNAG'] = Client::make($GLOBALS['BUG_SNAG_KEY']));

            foreach ((array)json_decode(file_get_contents($GLOBALS['OVERRIDE_DIR'] . '/overrides.json'), false, 512, JSON_THROW_ON_ERROR) as $key => $value) {
                $GLOBALS[$key] = $value;
            }

            foreach (array('/helper', '/http') as $_asset) {
                $this->FILES_CHECK($GLOBALS['PLUGIN_DIR'] . $_asset, true);
            }

            foreach ($GLOBALS['PLUGINS'] as $plugin) {
                if (file_exists($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php')) {
                    require($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php');
                } elseif (class_exists('\\yxorP\\plugin\\' . $plugin)) {
                    $plugin = '\\yxorP\\plugin\\' . $plugin;
                }
                $this->addSubscriber(new $plugin());
            }

            $this->STORE($this->forward(Http\Request::createFromGlobals(), $GLOBALS['PROXY_URL'] = $GLOBALS['TARGET_URL'] . $GLOBALS['REQUEST_URI'] = $_SERVER['REQUEST_URI'])->getContent());


        } catch (exception $e) {
            if ($GLOBALS['MIME'] !== 'text/html') {
                header("Location: " . $GLOBALS['PROXY_URL']);
            } else {
                if ($GLOBALS['DEBUG']) {
                    echo $e->__toString();
                }
                $GLOBALS['BUGSNAG']->notifyException($e);
            }
        }
    }

    public function FILES_CHECK($dir, $inc): void
    {
        if (file($dir) || is_dir($dir)) foreach (scandir($dir) as $x) if (strlen($x) > 3) {
            if (str_contains($x, 'Interface')) continue;
            if (is_dir($_loc = $dir . '/' . $x)) $this->FILES_CHECK($_loc, $inc); else if ($inc) require_once($_loc); else if (str_contains($GLOBALS['REQUEST_URI'], $x)) {
                echo file_get_contents($_loc);
                exit;
            }
        }

    }

    public function addSubscriber($subscriber): void
    {
        if (method_exists($subscriber, 'subscribe')) {
            $subscriber->subscribe($this);
        }
    }

    public function STORE($content): void
    {
        $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['CACHE_KEY'], ($GLOBALS['MIME'] === 'text/html') ? preg_replace_callback(self::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/target_rewrite.csv'), static function ($m) {
            return str_replace(self::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_rewrite.csv'),
                self::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_rewrite.csv'), $m[1]);
        }, $this->MINI($content)) : $content, $GLOBALS['CACHE_TIME']);
    }

    public static function CSV($filename = '')
    {
        $csvArray = array_map('str_getcsv', file($filename));
        return array_merge(...$csvArray);
    }

    protected function MINI($body)
    {
        $replace = array('/\>[^\S ]+/s' => '>', '/[^\S ]+\</s' => '<', '/([\t ])+/s' => ' ', '/^([\t ])+/m' => '', '/([\t ])+$/m' => '', '~//[a-zA-Z0-9 ]+$~m' => '', '/[\r\n]+([\t ]?[\r\n]+)+/s' => "\n", '/\>[\r\n\t ]+\</s' => '><', '/}[\r\n\t ]+/s' => '}',
            '/}[\r\n\t ]+,[\r\n\t ]+/s' => '},', '/\)[\r\n\t ]?{[\r\n\t ]+/s' => '){', '/,[\r\n\t ]?{[\r\n\t ]+/s' => ',{', '/\),[\r\n\t ]+/s' => '),', '~([\r\n\t ])?([a-zA-Z0-9]+)="([a-zA-Z0-9_/\\-]+)"([\r\n\t ])?~s' => '$1$2=$3$4');
        return str_ireplace(array('</option>', '</li>', '</dt>', '</dd>', '</tr>', '</th>', '</td>'), '', preg_replace(array_keys($replace), array_values($replace), $body));
    }

    public function forward(Request $request, $url): Response
    {
        $request->setUrl($url);

        $response = new Response();

        $this->dispatch('request.before_send', new ProxyEvent(array(
            'request' => $request,
            'response' => $response
        )));


        if (!$request->params->has('request.complete')) {

            if ($_body = file_get_contents('php://input')) {
                $request->setBody(json_decode($_body, true), $GLOBALS['MIME']);
            }

            $this->client = $this->client ?: new \GuzzleHttp\Client([
                'verify' => false
            ]);
            try {
                $response->setContent($this->client->request($request->getMethod(), $request->getUri(), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody());
            } catch (GuzzleException $e) {
            }
        }

        $this->dispatch('request.complete', new ProxyEvent(array(
            'request' => $request,
            'response' => $response
        )));

        return $response;

    }

    private function dispatch($event_name, $event): void
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

    public function SUB($url)
    {
        $urlHostSegments = explode('.', parse_url($url)['host']);
        return (count($urlHostSegments) > 2) ? $urlHostSegments[0] : null;
    }

    public function setOutputBuffering($output_buffering): void
    {
        $output_buffering = true;
        $output_buffering1 = true;
    }

    public function addListener($event, $callback, $priority = 0): void
    {
        $this->listeners[$event][$priority][] = $callback;
    }

}