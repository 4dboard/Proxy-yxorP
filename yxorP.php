<?php
use yxorP\cache\Cache;
use yxorP\Helper\HeaderHelper;
use yxorP\Helper\IncludeHelper;
use yxorP\Helper\MimeHelper;
use yxorP\Http\ProxyEvent;
use yxorP\Http\Request;
use yxorP\Http\Response;

$GLOBALS['PLUGIN_DIR'] = __DIR__;
error_reporting((int)$_SERVER['SERVER_NAME']== "localhost");

require $GLOBALS['PLUGIN_DIR'] . '/cache/Cache.php';
require $GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require $GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';

class yxorP
{
    public static $listeners = [];

    private static function cache(){
        $GLOBALS['CACHE_DIR'] = $GLOBALS['PLUGIN_DIR'] . '/.cache/' ;

        if (!file_exists($GLOBALS['CACHE_DIR']) && !mkdir($concurrentDirectory = $GLOBALS['CACHE_DIR'], 0777, true) && !is_dir($concurrentDirectory)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }
        $GLOBALS['CACHE_KEY'] = base64_encode($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $GLOBALS['CACHE_TIME'] = @time() + (60 * 60 * 24 * 31 * 365);
        if (isset($_GET["CLECHE"])) {
            Cache::cache($GLOBALS['CACHE_KEY'])->clearAll();
        }

        if (Cache::cache($GLOBALS['CACHE_KEY'])->isValid()) {
            echo Cache::cache($GLOBALS['CACHE_KEY'])->get();
            exit;
        }

    }

    public  function __construct()
    {
        self::cache();

        foreach (file($GLOBALS['PLUGIN_DIR'] . '/.env') as $line) {

            if (trim(str_starts_with(trim($line), '#'))) continue;

            [$name, $value] = explode('=', $line, 2);
            $GLOBALS[$name] = str_replace("\r\n",null,$value);
        }

        require $GLOBALS['PLUGIN_DIR'] . '/setup/install.php';

        foreach (array('http', 'helper', 'domain') as $_asset) {
            self::FILES_CHECK($GLOBALS['PLUGIN_DIR'] . DIRECTORY_SEPARATOR . $_asset, true);
        }

        $GLOBALS['RESPONSE'] = $GLOBALS['RESPONSE'] ?: new Response();
        $GLOBALS['REQUEST'] = $GLOBALS['REQUEST'] ?: Request::createFromGlobals();

        self::FILES_CHECK($GLOBALS['SITE_CONTEXT']->DIR_FULL . '/assets', false);
        self::FILES_CHECK($GLOBALS['PLUGIN_DIR'] . '/override/default/assets', false);

        $_plugins = $GLOBALS['SITE_CONTEXT']->SITE['plugins'] ?: [];

        array_push($_plugins,'OverridePlugin');

        foreach ($_plugins as $plugin) {
            if (file_exists($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php')) {
                require($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php');
            } elseif (class_exists('\\yxorP\\plugin\\' . $plugin)) {
                $plugin = '\\yxorP\\plugin\\' . $plugin;
            }
            $this->addSubscriber(new $plugin());
        }

        $GLOBALS['EVENT'] = $GLOBALS['EVENT'] ?: $GLOBALS['EVENT'] = new ProxyEvent(array('request' => $GLOBALS['REQUEST'], 'response' => $GLOBALS['RESPONSE']));
        $GLOBALS['GUZZLE'] = $GLOBALS['GUZZLE'] ?: new \GuzzleHttp\Client(['allow_redirects' => true, 'http_errors' => true, 'decode_content' => true, 'verify' => false, 'cookies' => true, 'idn_conversion' => true]);

        new HeaderHelper();

        echo Cache::cache($GLOBALS['CACHE_KEY'])->get();
    }

    public function addSubscriber($subscriber): void
    {
        if (method_exists($subscriber, 'subscribe')) {
            $subscriber->subscribe($this);
        }
    }

    public function addListener($event, $callback, $priority = 0): void
    {
        self::$listeners[$event][$priority][] = $callback;
    }

    public static function FILES_CHECK($dir, $inc): void
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
                    } else if (str_contains($GLOBALS['SITE_CONTEXT']->REQUEST_URI, $x)) {
                        echo file_get_contents($_loc);
                        exit;
                    }
                }
            }
        }
    }

    public static function CSV($filename = '')
    {
        $csvArray = array_map('str_getcsv', file($filename));
        return array_merge(...$csvArray);
    }

    public function SUB($url)
    {
        $urlHostSegments = explode('.', parse_url($url)['host']);
        return (count($urlHostSegments) > 2) ? $urlHostSegments[0] : null;
    }


}