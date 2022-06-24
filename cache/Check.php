<?php namespace yxorP\cache;

use RuntimeException;
use yxorP;

class Check
{
    public static function fetch(): void
    {
        yxorP::set('CACHE_DIR', yxorP::get('PLUGIN_DIR') . '/.cache/');
        if (!file_exists(yxorP::get('CACHE_DIR')) && !mkdir($concurrentDirectory = yxorP::get('CACHE_DIR')) && !is_dir($concurrentDirectory)) throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        yxorP::set('CACHE_KEY', base64_encode(yxorP::get('SERVER')['HTTP_HOST'] . yxorP::get('SERVER')['REQUEST_URI']));
        yxorP::set('CACHE_TIME', @time() + (60 * 60 * 24 * 31 * 365));
        if (isset($_GET["CLECHE"])) Cache::cache(yxorP::get('CACHE_KEY'))->clearAll();
    }
}