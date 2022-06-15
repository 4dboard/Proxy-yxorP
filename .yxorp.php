<?php /* yxorP */
error_reporting(0);

use yxorP\cache\Cache;
use yxorP\Helpers\FetchHelper;
use yxorP\Helpers\IncludeHelper;

error_reporting((int)str_contains($_SERVER['SERVER_NAME'],
    "localhost"));

$GLOBALS['PLUGIN_DIR'] = __DIR__;
require $GLOBALS['PLUGIN_DIR'] . '/helper/IncludeHelper.php';
require $GLOBALS['PLUGIN_DIR'] . '/cache/Cache.php';
require $GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require $GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';


class yxorp
{
    private $client, $listeners = [];

    public function __construct()
    {
        new IncludeHelper();
        if (!Cache::cache($GLOBALS['CACHE_KEY'])->isValid()) new FetchHelper();
        echo Cache::cache($GLOBALS['CACHE_KEY'])->get();

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

    public function setOutputBuffering($output_buffering): void
    {
        $output_buffering = true;
        $output_buffering1 = true;
    }


}