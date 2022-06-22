<?php namespace yxorP\cache;


class Check
{
    public static function fetch()
    {
        $GLOBALS['CACHE_DIR'] = $GLOBALS['PLUGIN_DIR'] . '/.cache/';
        if (!file_exists($GLOBALS['CACHE_DIR']) && !mkdir($concurrentDirectory = $GLOBALS['CACHE_DIR'], 0777, true) && !is_dir($concurrentDirectory)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }
        $GLOBALS['CACHE_KEY'] = base64_encode($GLOBALS['SERVER']['HTTP_HOST'] . $GLOBALS['SERVER']['REQUEST_URI']);
        $GLOBALS['CACHE_TIME'] = @time() + (60 * 60 * 24 * 31 * 365);
        if (isset($_GET["CLECHE"])) {
            Cache::cache($GLOBALS['CACHE_KEY'])->clearAll();
        }
    }
}
}