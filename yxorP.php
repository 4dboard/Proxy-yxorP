<?php
use yxorP\cache\Cache;
use yxorP\Helper\HeaderHelper;
use yxorP\Helper\IncludeHelper;
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
    public static function Proxy()
    {

        foreach (file($GLOBALS['PLUGIN_DIR'] . '/.env') as $line) {

            if (trim(str_starts_with(trim($line), '#'))) continue;

            [$name, $value] = explode('=', $line, 2);
            $GLOBALS[$name] = $value;
        }

        require $GLOBALS['PLUGIN_DIR'] . '/install.php';

        foreach ((array)json_decode(file_get_contents($GLOBALS['SITE_CONTEXT']->DIR_FULL . '/overrides.json'), false) as $key => $value) {
            $GLOBALS[$key] = $value;
        }

        foreach (array('http', 'helper', 'domain') as $_asset) {
            self::FILES_CHECK($GLOBALS['PLUGIN_DIR'] . DIRECTORY_SEPARATOR . $_asset, true);
        }

        self::FILES_CHECK($GLOBALS['SITE_CONTEXT']->DIR_FULL . '/assets', false);
        self::FILES_CHECK($GLOBALS['PLUGIN_DIR'] . '/override/default/assets', false);

        foreach ($GLOBALS['PLUGINS'] as $plugin) {
            if (file_exists($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php')) {
                require($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php');
            } elseif (class_exists('\\yxorP\\plugin\\' . $plugin)) {
                $plugin = '\\yxorP\\plugin\\' . $plugin;
            }
            $this->addSubscriber(new $plugin());
        }

        $GLOBALS['RESPONSE'] = $GLOBALS['RESPONSE'] ?: new Response();
        $GLOBALS['REQUEST'] = $GLOBALS['REQUEST'] ?: Request::createFromGlobals();
        $GLOBALS['EVENT'] = $GLOBALS['EVENT'] ?: $GLOBALS['EVENT'] = new ProxyEvent(array('request' => $GLOBALS['REQUEST'], 'response' => $GLOBALS['RESPONSE']));
        $GLOBALS['GUZZLE'] = $GLOBALS['GUZZLE'] ?: new \GuzzleHttp\Client(['allow_redirects' => true, 'http_errors' => true, 'decode_content' => true, 'verify' => false, 'cookies' => true, 'idn_conversion' => true]);

        if (!Cache::cache($GLOBALS['CACHE_KEY'])->isValid()) {
            new HeaderHelper();
        }
        echo Cache::cache($GLOBALS['CACHE_KEY'])->get();
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