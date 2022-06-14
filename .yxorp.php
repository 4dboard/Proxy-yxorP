<?php /* yxorP */
error_reporting(0);

use yxorP\cache\Cache;
use yxorP\Helpers\ContextHelper;
use yxorP\Helpers\FetchHelper;

$GLOBALS['PLUGIN_DIR'] = __DIR__;

require $GLOBALS['PLUGIN_DIR'] . '/cache/Cache.php';
require $GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require $GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials');


class yxorp
{
    private $client;
    private $listeners = [];

    public function __construct()
    {

        foreach (array('/helper') as $_asset) self::FILES_CHECK($GLOBALS['PLUGIN_DIR'] . $_asset, true);
        new ContextHelper();
        if (!Cache::cache($GLOBALS['CACHE_KEY'])->isValid()) new FetchHelper();
        echo Cache::cache($GLOBALS['CACHE_KEY'])->get();

    }

    public static function FILES_CHECK($dir, $inc): void
    {
        if (file($dir) || is_dir($dir)) foreach (scandir($dir) as $x) if (strlen($x) > 3) {

            if (str_contains($x, 'Interface')) continue;

            if (is_dir($_loc = $dir . '/' . $x)) self::FILES_CHECK($_loc, $inc); else if ($inc) require_once($_loc); else if (str_contains($GLOBALS['SITE_CONTEXT']->REQUEST_URI, $x)) {
                echo file_get_contents($_loc);
                exit;
            }
        }
    }

    public static function CSV($filename = '')
    {
        $csvArray = array_map('str_getcsv', file($filename));
        return array_merge(...$csvArray);
    }

    public function addSubscriber($subscriber): void
    {
        if (method_exists($subscriber, 'subscribe')) $subscriber->subscribe($this);
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