<?php

use GuzzleHttp\Client;
use yxorP\cache\Cache;
use yxorP\Helper\HeaderHelper;
use yxorP\Http\Request;
use yxorP\Http\Response;


class yxorP
{
    public static array $listeners = [];
    private static array $vars = array();

    public function __construct()
    {
        self::set('PLUGIN_DIR', __DIR__);

        require self::get('PLUGIN_DIR') . '/cache/Cache.php';
        require self::get('PLUGIN_DIR') . '/guzzle.phar';
        require self::get('PLUGIN_DIR') . '/bugsnag.phar';

        self::set('CACHE_DIR', self::get('PLUGIN_DIR') . '/.cache/');
        if (!file_exists(self::get('CACHE_DIR')) && !mkdir($concurrentDirectory = self::get('CACHE_DIR')) && !is_dir($concurrentDirectory)) throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        self::set('CACHE_TIME', @time() + (60 * 60 * 24 * 31 * 365));

        if (str_contains(self::get('SERVER')['REQUEST_URI'], '/cockpit')) require self::get('PLUGIN_DIR') . 'cockpit/index.php';

        foreach (array('http', 'dom', 'helper', 'domain', 'minify') as $_asset) self::FILES_CHECK(self::get('PLUGIN_DIR') . DIRECTORY_SEPARATOR . $_asset, true);

        $_plugins = self::get('SITE_CONTEXT')->SITE['plugins'] ?: [];

        $_plugins[] = 'OverridePlugin';

        foreach ($_plugins as $plugin) {

            if (file_exists(self::get('PLUGIN_DIR') . '/plugin/' . $plugin . '.php')) {
                require(self::get('PLUGIN_DIR') . '/plugin/' . $plugin . '.php');
            } elseif ('\\yxorP\\plugin\\' . $plugin) {
                $plugin = '\\yxorP\\plugin\\' . $plugin;
            }

            self::addSubscriber(new $plugin());
        }

        foreach (file(self::get('PLUGIN_DIR') . '/.env') as $line) {
            if (trim((string)str_starts_with(trim($line), '#'))) continue;
            [$name, $value] = explode('=', $line, 2);
            self::set($name, str_replace("\r\n", null, $value));
        }
    }

    public static function set($_name, $_value): void
    {
        $GLOBALS[$_name] = $_value;
    }

    public static function get($_name)
    {
        return (array_key_exists($_name, $GLOBALS)) ? $GLOBALS[$_name] : false;
    }

    public static function FILES_CHECK($dir, $inc)
    {

        if (file($dir) || is_dir($dir)) {
            foreach (scandir($dir) as $x) {

                if (strlen($x) > 3) {
                    if (str_contains($x, 'Interface')) {
                        continue;
                    }
                    if (is_dir($_loc = $dir . '/' . $x)) {
                        self::FILES_CHECK($_loc, $inc);

                    } else if ($inc) {
                        require_once($_loc);
                    } else if (str_contains(self::get('SITE_CONTEXT')->REQUEST_URI, $x)) {

                        return Cache::cache(self::get('CACHE_KEY'))->set(file_get_contents($_loc));

                    }

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

    public static function Proxy($REQUEST)
    {
        self::set('SERVER', $REQUEST);

        require self::get('PLUGIN_DIR') . '/inc/Setup.php';
        self::set('RESPONSE', self::get('RESPONSE') ?: new Response());
        self::set('REQUEST', self::get('REQUEST') ?: Request::createFromGlobals());
        self::FILES_CHECK(self::get('SITE_CONTEXT')->DIR_FULL . '/', false);
        if (Cache::cache(self::get('CACHE_KEY'))->isValid()) return (string)Cache::cache(self::get('CACHE_KEY'))->get();
        self::FILES_CHECK(self::get('PLUGIN_DIR') . '/override/global/assets', false);
        if (Cache::cache(self::get('CACHE_KEY'))->isValid()) return (string)Cache::cache(self::get('CACHE_KEY'))->get();
        self::set('GUZZLE', self::get('GUZZLE') ?: new Client(['allow_redirects' => true, 'http_errors' => true, 'decode_content' => true, 'verify' => false, 'cookies' => true, 'idn_conversion' => true]));

        error_reporting(!(int)str_contains(self::get('SERVER')['SERVER_NAME'], '.'));
        self::set('CACHE_KEY', base64_encode(self::get('SERVER')['HTTP_HOST'] . self::get('SERVER')['REQUEST_URI']));
        if (isset($_GET["CLECHE"])) Cache::cache(self::get('CACHE_KEY'))->clearAll();

        if (Cache::cache(self::get('CACHE_KEY'))->isValid()) return (string)Cache::cache(self::get('CACHE_KEY'))->get();

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials');

        self::set('SITE_CONTEXT', new stdClass());
        self::get('SITE_CONTEXT')->SITE_DOMAIN = self::extract_domain((string)self::get('SERVER')['SERVER_NAME']);
        self::get('SITE_CONTEXT')->SITE_SUB_DOMAIN = self::extract_subdomains((string)self::get('SERVER')['SERVER_NAME']);
        self::get('SITE_CONTEXT')->TARGET = self::get('APP')->storage->findOne('collections/sites', ['host' => self::get('SITE_CONTEXT')->SITE_DOMAIN]);
        self::get('SITE_CONTEXT')->TARGET_SUB_DOMAIN = self::extract_subdomains(self::get('SITE_CONTEXT')->TARGET['target']);
        self::get('SITE_CONTEXT')->TARGET_DOMAIN = self::extract_domain(self::get('SITE_CONTEXT')->TARGET['target']);
        self::get('SITE_CONTEXT')->GLOBAL_REPLACE = self::get('APP')->storage->findOne('collections/global', ['type' => 'replace'])['value'];
        self::get('SITE_CONTEXT')->GLOBAL_PATTERN = self::get('APP')->storage->findOne('collections/global', ['type' => 'pattern'])['value'];
        self::get('SITE_CONTEXT')->GLOBAL_REWRITE = file_get_contents(self::get('PLUGIN_DIR') . '/override/default/includes/rewrite.csv');
        self::get('SITE_CONTEXT')->TARGET_URL = "https://" . (self::get('SITE_CONTEXT')->SITE_SUB_DOMAIN ? self::get('SITE_CONTEXT')->SITE_SUB_DOMAIN . "." : null) . self::get('SITE_CONTEXT')->TARGET_DOMAIN;
        self::get('SITE_CONTEXT')->PROXY_URL = self::get('SITE_CONTEXT')->TARGET_URL . self::get('REQUEST_URI');
        self::get('SITE_CONTEXT')->DIR_FULL = self::get('PLUGIN_DIR') . '/override/' . self::get('SITE_CONTEXT')->SITE['dir'];

        $_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $_ext = pathinfo(strtok(self::get('SITE_CONTEXT')->REQUEST_URI, '?'), PATHINFO_EXTENSION);
        if (str_contains(self::get('SITE_CONTEXT')->REQUEST_URI, 'bundle.js')) {
            self::set('MIME', 'application/wasm');
        } else if (!self::get('MIME') && str_contains(self::get('SITE_CONTEXT')->REQUEST_URI, 'sitemap')) {
            self::set('MIME', 'application/xml');
        } else if (!self::get('MIME') && str_contains(self::get('SITE_CONTEXT')->REQUEST_URI, 'crop')) {
            self::set('MIME', 'image/png');
        } else if (!self::get('MIME') && str_contains(self::get('SITE_CONTEXT')->REQUEST_URI, 'format')) {
            self::set('MIME', 'image/png');
        } else if (!self::get('MIME') && str_contains(self::get('SITE_CONTEXT')->REQUEST_URI, '.mp4')) {
            self::set('MIME', 'video/mp4');
        } else if (!self::get('MIME') && str_contains(self::get('SITE_CONTEXT')->REQUEST_URI, '.js.br')) {
            self::set('MIME', 'br');
        } else if (!self::get('MIME') && array_key_exists($_ext, $_types)) {
            self::set('MIME', $_types[$_ext]);
        } else {
            self::set('MIME', 'text/html');
        }

        try {
            self::forward();
        } catch (Exception $e) {
            if (self::get('MIME') !== 'text/html') {
                header("Location: " . self::get('SITE_CONTEXT')->PROXY_URL);
            } else {
                Handler::Register(self::set('BUGSNAG', Client::make(self::get('BUG_SNAG_KEY'))));
                if (self::get('DEBUG')) echo $e->__toString();
                if (self::get('BUGSNAG')) self::get('BUGSNAG')->notifyException($e);
            }
        }
        header('Content-Type: ' . self::get('MIME') . '; charset=UTF-8');
        return (string)Cache::cache(self::get('CACHE_KEY'))->get();
    }

    public static function extract_domain($domain)
    {
        if (str_contains($domain, '.')) {
            if (preg_match("/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i", $domain, $matches)) {
                return $matches['domain'];
            } else {
                return $domain;
            }
        } else {
            return $domain;
        }
    }

    public static function extract_subdomains($domain)
    {
        if (str_contains($domain, '.')) {
            $subdomains = $domain;
            $domain = self::extract_domain($subdomains);
            $subdomains = rtrim(strstr($subdomains, $domain, true), '.');
            return $subdomains;
        } else {
            return null;
        }
    }

    public function forward()
    {
        if ($_body = file_get_contents('php://input')) self::get('REQUEST')->setBody(json_decode($_body, true), self::get('MIME'));
        self::dispatch('request.before_send');
        self::get('RESPONSE')->setContent(self::get('GUZZLE')->request(self::get('REQUEST')->getMethod(), self::get('REQUEST')->getUri(), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody());
        self::dispatch('request.complete');
        Cache::cache(self::get('CACHE_KEY'))->set(self::get('RESPONSE')->getContent());
    }

    public function dispatch($event_name): void
    {
        if (isset(self::$listeners[$event_name])) {
            $temp = (array)self::$listeners[$event_name];
            foreach ($temp as $priority => $listeners) {
                foreach ((array)$listeners as $listener) {
                    if (is_callable($listener)) {
                        $listener();
                    }
                }
            }
        }
    }

    public function addListener($event, $callback, $priority = 0): void
    {
        self::$listeners[$event][$priority][] = $callback;
    }

    public function CSV($filename = ''): array
    {
        $csvArray = array_map('str_getcsv', file($filename));
        return array_merge(...$csvArray);
    }
}