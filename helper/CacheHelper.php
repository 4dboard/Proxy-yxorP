<?php /* yxorP */

namespace yxorP\Helpers;

use yxorP\Cache\Cache;

class CacheHelper
{
    public function __construct()
    {
        $GLOBALS['SITE_CONTEXT']->CACHE_DIR = $GLOBALS['SITE_CONTEXT']->CACHE_DIR . "/cache";
        if (!file_exists($GLOBALS['SITE_CONTEXT']->CACHE_DIR)) {
            if (!mkdir($concurrentDirectory = $GLOBALS['SITE_CONTEXT']->CACHE_DIR, 0777, true) && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
        }

        $GLOBALS['CACHE_KEY'] = base64_encode($GLOBALS['SITE_CONTEXT']->SITE_URL . $GLOBALS['SITE_CONTEXT']->REQUEST_URI);
        $GLOBALS['CACHE_TIME'] = @time() + (60 * 60 * 24 * 31 * 365);

        if (isset($_GET["CLECHE"])) Cache::cache($GLOBALS['CACHE_KEY'])->clearAll();

        new MimeHelper();

    }
}
