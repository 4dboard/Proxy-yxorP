<?php

use yxorP\cache\Cache;
use yxorP\cache\Check;
use yxorP\Helper\HeaderHelper;
use yxorP\Helper\IncludeHelper;

class yxorP
{
    public static array $listeners = [];

    private static array $vars = array();

    public function __construct()
    {
        $_plugins = self::get('SITE_CONTEXT')->SITE['plugins'] ?: [];

        $_plugins[] = 'OverridePlugin';

        foreach ($_plugins as $plugin) {

            if (file_exists(self::get('PLUGIN_DIR') . '/plugin/' . $plugin . '.php')) {
                require(self::get('PLUGIN_DIR') . '/plugin/' . $plugin . '.php');
            } elseif ('\\yxorP\\plugin\\' . $plugin) {
                $plugin = '\\yxorP\\plugin\\' . $plugin;
            }

            $this->addSubscriber(new $plugin());
        }

        HeaderHelper::helper();
    }

    public static function get($_name)
    {
        return (array_key_exists($_name, $GLOBALS)) ? $GLOBALS[$_name] : false;
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

        self::set('PLUGIN_DIR', __DIR__);

        Check::fetch();

        error_reporting(!(int)str_contains(self::get('SERVER')['SERVER_NAME'], '.'));

        self::get('CACHE_KEY');

        if (Cache::cache(self::get('CACHE_KEY'))->isValid()) return Cache::cache(self::get('CACHE_KEY'))->get();

        if (str_contains(self::get('SERVER')['REQUEST_URI'], '/cockpit')) require self::get('PLUGIN_DIR') . 'cockpit/index.php';

        foreach (array('http', 'dom', 'helper', 'domain', 'minify') as $_asset) self::FILES_CHECK(self::get('PLUGIN_DIR') . DIRECTORY_SEPARATOR . $_asset, true);

        new IncludeHelper();

        return Cache::cache(self::get('CACHE_KEY'))->get();
    }

    public static function set($_name, $_value): void
    {
        $GLOBALS[$_name] = $_value;
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
                    } else if (str_contains(yxorP::get('SITE_CONTEXT')->REQUEST_URI, $x)) {

                        return Cache::cache(yxorP::get('CACHE_KEY'))->set(file_get_contents($_loc));

                    }

                }
            }
        }
    }

    public static function addListener($event, $callback, $priority = 0): void
    {
        self::$listeners[$event][$priority][] = $callback;
    }

    public static function CSV($filename = ''): array
    {
        $csvArray = array_map('str_getcsv', file($filename));
        return array_merge(...$csvArray);
    }
}