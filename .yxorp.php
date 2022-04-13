<?php /* yxorP */
error_reporting(1);

use Bugsnag\Client;
use Bugsnag\Handler;
use GuzzleHttp\Exception\GuzzleException;
use yxorp\Http;
use yxorP\Http\ProxyEvent;
use yxorP\Http\Request;
use yxorP\Http\Response;

require ($GLOBALS['PLUGIN_DIR'] = __DIR__) . '/cache/Cache.php';
require $GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require $GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';

header_remove('X-Powered-By');
header_remove("X-Frame-Options");
header_remove("Content-Security-Policy");
header_remove("Access-Control-Allow-Origin");
header_remove("Access-Control-Allow-Methods");
header_remove("Access-Control-Expose-Headers");
header("Access-Control-Allow-Origin: *");

class yxorp
{

    private $client;

    private array $listeners = array();

    public function __construct($TARGET_URL)
    {
        ini_set('default_charset', 'utf-8');

        $GLOBALS['SITE_URL'] = 'https://' . $GLOBALS['SITE_HOST'] = $_SERVER['HTTP_HOST'];
        $GLOBALS['TARGET_HOST'] = parse_url($GLOBALS['TARGET_URL'] = $TARGET_URL, PHP_URL_HOST);
        $GLOBALS['CACHE_KEY'] = base64_encode($GLOBALS['REQUEST_URI'] = $_SERVER['REQUEST_URI']);
        $GLOBALS['CACHE_MIME_KEY'] = base64_encode($GLOBALS['SITE_HOST'] . '_mime_key');
        $GLOBALS['PROXY_URL'] = $GLOBALS['TARGET_URL'] . $GLOBALS['REQUEST_URI'];

        if (!file_exists($GLOBALS['CACHE_DIR'] = $GLOBALS['PLUGIN_DIR'] . '/.cache/') && !mkdir($concurrentDirectory = $concurrentDirectory = $GLOBALS['CACHE_DIR'], 0777, true) && !is_dir($concurrentDirectory)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        if (!file_exists($GLOBALS['COOKIE_DIR'] = $GLOBALS['PLUGIN_DIR'] . '/.cookie/') && !mkdir($concurrentDirectory = $concurrentDirectory = $GLOBALS['COOKIE_DIR'], 0777, true) && !is_dir($concurrentDirectory)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }

        $GLOBALS['CACHE_ADAPTER'] = new yxorP\cache\Cache();

        if ($_GET["DONCLEAR"] !== null) {
            $GLOBALS['CACHE_ADAPTER']->clean();
        }

        //header('Content-Type: ' . $GLOBALS['MIME']  = $this->getMimeContentType($GLOBALS['PROXY_URL']) . '; charset=UTF-8');

        $_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'mp4' => 'video/mp4', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $_ext = pathinfo(strtok($GLOBALS['REQUEST_URI'], '?'), PATHINFO_EXTENSION);
        $GLOBALS['MIME'] = (array_key_exists($_ext, $_types)) ? $_types[$_ext] : 'text/html';
        header('Content-Type: ' . $GLOBALS['MIME'] . '; charset=UTF-8');

        if (!($GLOBALS['CACHE_ADAPTER'])->isExisting($GLOBALS['CACHE_KEY'])) $this->FETCH();
        echo $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['CACHE_KEY']);

    }

    /**
     * @throws GuzzleException
     */
    private function FETCH(): void
    {

        try {

        require($GLOBALS['PLUGIN_DIR'] . '/plugin/AbstractPlugin.php');

        $GLOBALS['OVERRIDE_DIR'] = file_exists($GLOBALS['PLUGIN_DIR'] . '/override/' . $GLOBALS['TARGET_HOST']) ?
            $GLOBALS['PLUGIN_DIR'] . '/override/' . $GLOBALS['TARGET_HOST'] : $GLOBALS['PLUGIN_DIR'] . '/override/default';

        $this->FILES_CHECK($GLOBALS['OVERRIDE_DIR'] . '/assets', false);
        $this->FILES_CHECK($GLOBALS['PLUGIN_DIR'] . '/override/default/assets', false);


            foreach (file($GLOBALS['PLUGIN_DIR'] . '/.env') as $line) {
                if (trim(strpos(trim($line), '#') === 0)) {
                    continue;
                }
                [$name, $value] = explode('=', $line, 2);
                $GLOBALS[$name] = $value;
            }

            if($GLOBALS['AFFILIATE'])
                (str_contains($GLOBALS['PROXY_URL'], '?' )) ? ($GLOBALS['PROXY_URL'] .  '?' . $GLOBALS['AFFILIATE']) : $GLOBALS['PROXY_URL'] .  '&' . $GLOBALS['AFFILIATE'];

            Handler::register($GLOBALS['BUGSNAG'] = Client::make($GLOBALS['BUG_SNAG_KEY']));

            foreach ((array)json_decode(file_get_contents($GLOBALS['OVERRIDE_DIR'] . '/overrides.json'),
                false, 512, JSON_THROW_ON_ERROR) as $key => $value) {
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

            $_content = $this->forward(Http\Request::createFromGlobals())->getContent();
            $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['CACHE_KEY'], ($GLOBALS['MIME'] === 'text/html') ? preg_replace_callback('(<p>(.*?)</p>)', static function ($m) {
                return str_replace(fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_rewrite.csv', 'r')), fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_rewrite.csv', 'r')), $m[1]);
            }, $_content) : $_content, $GLOBALS['CACHE_TIME'] = time() + (60 * 60 * 24 * 31));

        } catch (exception $e) {
            if ($GLOBALS['MIME'] !== 'text/html') {
                header("Location: " . $GLOBALS['PROXY_URL']);
            } else {
                $GLOBALS['BUGSNAG']->notifyException($e->__toString());
            }
        }
    }

    public function FILES_CHECK($dir, $inc): void
    {
        foreach (scandir($dir) as $x) {
            if (strlen($x) > 3) {
                if (is_dir($_loc = $dir . '/' . $x)) {
                    $this->FILES_CHECK($_loc, $inc);
                } else if ($inc) {
                    require_once($_loc);
                } else if (str_contains($GLOBALS['REQUEST_URI'], $x)) {
                    echo file_get_contents($_loc);
                    exit;
                }
            }
        }

    }

    public function addSubscriber($subscriber): void
    {
        if (method_exists($subscriber, 'subscribe')) {
            $subscriber->subscribe($this);
        }
    }

    /**
     * @throws GuzzleException
     */
    public function forward(Request $request): Response
    {
        $request->setUrl($GLOBALS['PROXY_URL']);

        $response = new Response();

        $this->dispatch('request.before_send', new ProxyEvent(array(
            'request' => $request,
            'response' => $response
        )));


        if (!$request->params->has('request.complete')) {

            if ($_body = file_get_contents('php://input')) $request->setBody(json_decode($_body, true), $GLOBALS['MIME']);

            $this->client = $this->client ?: new \GuzzleHttp\Client();
            $response->setContent($this->client->request($request->getMethod(), $request->getUri(), json_decode(json_encode($_REQUEST), true))->getBody());
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

    function getMimeContentType($filename)
    {
        $ext = strtolower(array_pop(explode('.', $GLOBALS['PROXY_URL'])));

        if (!function_exists('mime_content_type')) {

            if (!($GLOBALS['CACHE_ADAPTER'])->isExisting($GLOBALS['CACHE_MIME_KEY']))
                ($GLOBALS['CACHE_ADAPTER'])->set($GLOBALS['CACHE_MIME_KEY'], $this->getMimeTypes(), $GLOBALS['CACHE_TIME']);

            if ($mime_types = ($GLOBALS['CACHE_ADAPTER'])->get($GLOBALS['CACHE_MIME_KEY'])) {
                if (array_key_exists($ext, $mime_types)) {
                    return $mime_types[$ext];
                } elseif (function_exists('finfo_open')) {
                    $finfo = finfo_open(FILEINFO_MIME);
                    $mimetype = finfo_file($finfo, $filename);
                    finfo_close($finfo);
                    return $mimetype;
                }
            }
            return 'application/octet-stream';
        }
        return mime_content_type($filename);
    }

    function getMimeTypes()
    {
        $url = '/mime.types.json';

        $mimes = array();
        foreach (@explode("\n", @file_get_contents($url)) as $x) {
            if (isset($x[0]) && $x[0] !== '#' && preg_match_all('#([^\s]+)#', $x, $out) && isset($out[1]) && ($c = count($out[1])) > 1) {
                for ($i = 1; $i < $c; $i++) {
                    $mimes[$out[1][$i]] = $out[1][0];
                }
            }
        }
        return (@sort($mimes)) ? $mimes : false;
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