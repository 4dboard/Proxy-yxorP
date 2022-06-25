<?php

use GuzzleHttp\Client;
use yxorP\Cache\Cache;
use yxorP\Helper\HeaderHelper;
use yxorP\Http\Request;
use yxorP\Http\Response;

class yxorP
{

    public static array $listeners = [];
    static protected array $_yx = [];

    public function __construct()
    {
        self::set('PLUGIN_DIR', __DIR__);
        foreach (file(self::get('PLUGIN_DIR') . '/.env') as $line) {
            if (trim((string)str_starts_with(trim($line), '#'))) continue;
            [$name, $value] = explode('=', $line, 2);
            self::set($name, str_replace("\r\n", null, $value));
        }
    }

    public static function set($_name, $_value): void
    {

        if (array_key_exists($_name, self::$_yx)) {
            throw new RuntimeException('yxorP::set("' . $_name . '") - Argument already exists and cannot be redefined!');
        }

        self::$_yx[$_name] = $_value;
    }

    public static function get($_name)
    {
        return (array_key_exists($_name, self::$_yx)) ? self::$_yx[$_name] : false;
    }

    public static function Proxy($REQUEST)
    {
        $yxorP = new yxorP();
        $yxorP->siteContext($REQUEST);

        require $yxorP::get('PLUGIN_DIR') . '/cache/State.php';
        require $yxorP::get('PLUGIN_DIR') . '/cache/Cache.php';
        require $yxorP::get('PLUGIN_DIR') . '/inc/guzzle.phar';
        require $yxorP::get('PLUGIN_DIR') . '/inc/bugsnag.phar';

        if (!file_exists($yxorP::set('CACHE_DIR', $yxorP::get('PLUGIN_DIR') . '/.cache/')) &&
            !mkdir($concurrentDirectory = $yxorP::get('CACHE_DIR')) && !is_dir($concurrentDirectory))
            throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));

        $yxorP::set('CACHE_TIME', @time() + (60 * 60 * 24 * 31 * 365));
        $yxorP::set('CACHE_KEY', base64_encode($yxorP::get('SERVER')['HTTP_HOST'] . $yxorP::get('SERVER')['REQUEST_URI']));

        try {
            $yxorP->fetchIncludes();
            $yxorP->header();
            $yxorP->forward();
        } catch (Exception $e) {
            if ($yxorP::get('MIME') !== 'text/html') {
                header("Location: " . $yxorP::get('PROXY_URL'));
            } else {
                Handler::Register($yxorP::set('BUGSNAG'), Client::make($yxorP::get('BUG_SNAG_KEY')));
                if ($yxorP::get('DEBUG')) echo $e->__toString();
                if ($yxorP::get('BUGSNAG')) $yxorP::get('BUGSNAG')->notifyException($e);
            }
        }
        return (string)Cache::cache()->get();
    }

    public function siteContext($REQUEST)
    {
        self::set('SERVER', $REQUEST);
        self::set('SITE_CONTEXT', new stdclass());
        require self::get('PLUGIN_DIR') . '/inc/Setup.php';
        self::set('SITE_DOMAIN', self::extractDomain((string)self::get('SERVER')['SERVER_NAME']));
        self::set('SITE_SUB_DOMAIN', self::extractSubdomains((string)self::get('SERVER')['SERVER_NAME']));
        self::set('TARGET', self::get('APP')->storage->findOne('collections/sites', ['host' => self::get('SITE_DOMAIN')]));
        self::set('TARGET_SUB_DOMAIN', self::extractSubdomains(self::get('TARGET')['target']));
        self::set('TARGET_DOMAIN', self::extractDomain(self::get('TARGET')['target']));
        self::set('GLOBAL_REPLACE', self::get('APP')->storage->findOne('collections/global', ['type' => 'replace']) ?
            self::get('APP')->storage->findOne('collections /global', ['type' => 'replace'])['value'] : null);
        self::set('GLOBAL_PATTERN', self::get('APP')->storage->findOne('collections /global', ['type' => 'pattern']) ?
            self::get('APP')->storage->findOne('collections /global', ['type' => 'pattern'])['value'] : null);
        self::set('GLOBAL_REWRITE', file_get_contents(self::get('PLUGIN_DIR') . '/override/global/includes/rewrite.csv'));
        self::set('TARGET_URL', "https://" . self::get('SITE_SUB_DOMAIN') ?
            (self::get('SITE_SUB_DOMAIN') . ".") : null . self::get('SITE_SUB_DOMAIN'));
        self::set('PROXY_URL', self::get('TARGET_URL') . self::get('REQUEST_URI'));
        self::set('DIR_FULL', self::get('PLUGIN_DIR') . '/override/' . self::get('TARGET')['files']);

    }

    public static function extractDomain($domain)
    {
        if (str_contains($domain, ' . ')) {
            if (preg_match("/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i", $domain, $matches)) {
                return $matches['domain'];
            } else {
                return $domain;
            }
        } else {
            return $domain;
        }
    }

    public static function extractSubdomains($domain)
    {
        if (str_contains($domain, ' . ')) {
            $subdomains = $domain;
            $domain = self::extractDomain($subdomains);
            $subdomains = rtrim(strstr($subdomains, $domain, true), ' . ');
            return $subdomains;
        } else {
            return null;
        }
    }

    public function fetchIncludes()
    {

        foreach (array('http', 'minify') as $_asset) self::fileCheck(self::get('PLUGIN_DIR') . DIRECTORY_SEPARATOR . $_asset, true);
        if (str_contains(self::get('SERVER')['REQUEST_URI'], ' / cockpit')) require self::get('PLUGIN_DIR') . 'cockpit / index . php';
        self::set('RESPONSE', new Response());
        self::set('REQUEST', Request::createFromGlobals());
        self::fileCheck(self::get('DIR_FULL'), false);
        if (Cache::cache()->isValid()) return (string)Cache::cache()->get();
        self::fileCheck(self::get('PLUGIN_DIR') . ' / override /global', false);
        if (Cache::cache()->isValid()) return (string)Cache::cache()->get();
        error_reporting(!(int)str_contains(self::get('SERVER')['SERVER_NAME'], ' . '));

        if (isset($_GET["CLECHE"])) Cache::cache()->clearAll();

        if (Cache::cache()->isValid()) return (string)Cache::cache()->get();

        $_plugins = self::get('TARGET')['plugins'] ?: [];

        array_push($_plugins, 'BlockListPlugin', 'CookiePlugin', 'DailyMotionPlugin', 'HeaderRewritePlugin', 'LogPlugin', 'OverridePlugin', 'ProxifyPlugin', 'StreamPlugin', 'TwitterPlugin', 'YoutubePlugin');

        foreach ($_plugins as $plugin) {

            if (file_exists(self::get('PLUGIN_DIR') . '/plugin/' . $plugin . '.php')) {
                require(self::get('PLUGIN_DIR') . '/plugin/' . $plugin . '.php');
            } elseif ('\\yxorP\\plugin\\' . $plugin) {
                $plugin = '\\yxorP\\plugin\\' . $plugin;
            }

            $this->addSubscriber(new $plugin());
        }

    }

    public static function fileCheck($dir, $inc)
    {

        if (file($dir) || is_dir($dir)) {
            foreach (scandir($dir) as $x) {

                if (strlen($x) > 3) {
                    if (str_contains($x, 'Interface')) {
                        continue;
                    }
                    if (is_dir($_loc = $dir . '/' . $x)) {
                        self::fileCheck($_loc, $inc);

                    } else if ($inc) {
                        require_once($_loc);
                    } else if (str_contains(self::get('PROXY_URL'), $x)) {

                        return Cache::cache()->set(file_get_contents($_loc));

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

    public function header()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
        header('Access - Control - Allow - Credentials: true');
        header('Access - Control - Allow - Headers: Origin,Access - Control - Allow - Headers,Content - Type,Access - Control - Allow - Methods, Authorization, X - Requested - With,Access - Control - Allow - Credentials');

        $_types = array('txt' => 'text / plain', 'htm' => 'text / html', 'html' => 'text / html', 'php' => 'text / html', 'css' => 'text / css', 'js' => 'application / javascript', 'json' => 'application / json', 'xml' => 'application / xml', 'swf' => 'application / x - shockwave - flash', 'flv' => 'video / x - flv', 'png' => 'image / png', 'jpe' => 'image / jpeg', 'jpeg' => 'image / jpeg', 'jpg' => 'image / jpeg', 'gif' => 'image / gif', 'bmp' => 'image / bmp', 'ico' => 'image / vnd . microsoft . icon', 'tiff' => 'image / tiff', 'tif' => 'image / tiff', 'svg' => 'image / svg + xml', 'svgz' => 'image / svg + xml', 'zip' => 'application / zip', 'rar' => 'application / x - rar - compressed', 'exe' => 'application / x - msdownload', 'msi' => 'application / x - msdownload', 'cab' => 'application / vnd . ms - cab - compressed', 'mp3' => 'audio / mpeg', 'qt' => 'video / quicktime', 'mov' => 'video / quicktime', 'pdf' => 'application / pdf', 'psd' => 'image / vnd . adobe . photoshop', 'ai' => 'application / postscript', 'eps' => 'application / postscript', 'ps' => 'application / postscript', 'doc' => 'application / msword', 'rtf' => 'application / rtf', 'xls' => 'application / vnd . ms - excel', 'ppt' => 'application / vnd . ms - powerpoint', 'odt' => 'application / vnd . oasis . opendocument . text', 'ods' => 'application / vnd . oasis . opendocument . spreadsheet');
        $_ext = pathinfo(strtok(self::get('PROXY_URL'), ' ? '), PATHINFO_EXTENSION);
        if (str_contains(self::get('PROXY_URL'), 'bundle . js')) {
            self::set('MIME', 'application / wasm');
        } else
            if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), 'sitemap')) {
                self::set('MIME', 'application / xml');
            } else if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), 'crop')) {
                self::set('MIME', 'image / png');
            } else if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), 'format')) {
                self::set('MIME', 'image / png');
            } else if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), ' . mp4')) {
                self::set('MIME', 'video / mp4');
            } else if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), ' . js . br')) {
                self::set('MIME', 'br');
            } else if (!self::get('MIME') && array_key_exists($_ext, $_types)) {
                self::set('MIME', $_types[$_ext]);
            } else {
                self::set('MIME', 'text / html');
            }

        header('Content - Type: ' . self::get('MIME') . '; charset = UTF - 8');
    }

    public static function forward()
    {
        if ($_body = file_get_contents('php://input')) self::get('REQUEST')->setBody(json_decode($_body, true), self::get('MIME'));
        self::dispatch('request.before_send');
        self::get('RESPONSE')->setContent((new Client(['allow_redirects' => true, 'http_errors' => true, 'decode_content' => true, 'verify' => false, 'cookies' => true, 'idn_conversion' => true]))->request(self::get('REQUEST')->getMethod(), self::get('REQUEST')->getUri(), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody());
        self::dispatch('request.complete');
        Cache::cache()->set(self::get('RESPONSE')->getContent());
    }

    public static function dispatch($event_name): void
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

    public function init(): void
    {
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