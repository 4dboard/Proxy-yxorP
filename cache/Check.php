<?php

use yxorP\cache\Cache;

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

if (str_contains($_SERVER['REQUEST_URI'], '/cockpit')) {
    require $GLOBALS['PLUGIN_DIR'] . 'cockpit/index.php';
    exit;
}

require $GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require $GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';