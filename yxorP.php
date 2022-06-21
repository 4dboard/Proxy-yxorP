<?php
use yxorP\cache\Cache;
use yxorP\Helper\HeaderHelper;
use yxorP\Helper\IncludeHelper;

$GLOBALS['PLUGIN_DIR'] = __DIR__;
error_reporting((int)$_SERVER['SERVER_NAME']== "localhost");

require $GLOBALS['PLUGIN_DIR'] . '/cache/Cache.php';

class yxorP
{
    public static $listeners = [];

    public  function __construct()
    {

        require $GLOBALS['PLUGIN_DIR'] . '/http/Contract/ProcessorInterface.php';

        foreach (array('http', 'dom', 'helper', 'domain') as $_asset) {
            self::FILES_CHECK($GLOBALS['PLUGIN_DIR'] . DIRECTORY_SEPARATOR . $_asset, true);
        }
        new IncludeHelper();
        $this->loadPlugins();
        echo Cache::cache($GLOBALS['CACHE_KEY'])->get();
    }

    public function loadPlugins()
    {
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

        HeaderHelper::helper();
    }

    public static function addListener($event, $callback, $priority = 0): void
    {
        self::$listeners[$event][$priority][] = $callback;
    }

    public function addSubscriber($subscriber): void
    {
        if (method_exists($subscriber, 'subscribe')) {
            $subscriber->subscribe($this);
        }
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

    public static function SUB($url)
    {
        $urlHostSegments = explode('.', parse_url($url)['host']);
        return (count($urlHostSegments) > 2) ? $urlHostSegments[0] : null;
    }


}