<?php /* yxorP */
error_reporting(0);

use JetBrains\PhpStorm\NoReturn;
use yxorp\inc\Init;

header('Content-Type: text/html; charset=UTF-8');
ini_set('default_charset', 'utf-8');

$GLOBALS['PLUGIN_DIR'] = __DIR__;
require $GLOBALS['PLUGIN_DIR'] . '/cache/Cache.php';

class yxorp
{
    public function __construct($TARGET_URL)
    {
        $this->CACHE() || $this->GLOABLS($TARGET_URL) || $this->LOAD();
    }

    #[NoReturn] private function CACHE(): void
    {
        $GLOBALS['CACHE_DIR'] = $GLOBALS['PLUGIN_DIR'] . '/.cache/';
        if (!file_exists($GLOBALS['CACHE_DIR']) && !mkdir($GLOBALS['CACHE_DIR'], 0777, true) && !is_dir($GLOBALS['CACHE_DIR'])) throw new RuntimeException(sprintf('Directory "%s" was not created', 'path/to/directory'));
    }

    #[NoReturn] private function FETCH(): void
    {
        require $GLOBALS['PLUGIN_DIR'] . '/inc/Init.php';
        require $GLOBALS['PLUGIN_DIR'] . '/inc/Dot.php';

        try {
            (new Init())->INIT();
        } catch (exception $e) {
            $GLOBALS['BUGSNAG']->notifyException($e->__toString());
            ($GLOBALS['MIME'] !== 'text/html') ? @header("Location: " . $GLOBALS['PROXY_URL']) : new yxorp();
        }
    }

    #[NoReturn] public static function STORE($key, $content): void
    {
        if ($GLOBALS['CACHE_ADAPTER']->isExisting($key . 'FINAL')) exit('done');
        $c = str_replace(fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/search_rewrite.csv', 'r')), fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/replace_rewrite.csv', 'r')), $content);
        $GLOBALS['CACHE_ADAPTER']->set($key, $c . '<!-- CACHED ' . date("Y-m-d H:i:s") . ' -->', $GLOBALS['CACHE_TIME']);
        $GLOBALS['CACHE_ADAPTER']->set($key . 'FINAL', 'done', $GLOBALS['CACHE_TIME']);
        echo $key . $GLOBALS['CACHE_ADAPTER']->get($key);
        exit;
    }

    #[NoReturn] private function LOAD(): void
    {
        if (isset($_GET["URL"])) self::STORE(base64_encode($_GET["URL"]), $GLOBALS['CACHE_ADAPTER']->get(base64_encode($_GET["URL"])));
        if (!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['CACHE_KEY'])) $this->FETCH();
        echo $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['CACHE_KEY']);
        if (isset($_GET["DONCLEAR"])) $GLOBALS['CACHE_ADAPTER']->clean();

    }

    #[NoReturn] private function GLOABLS($TARGET_URL): void
    {
        $GLOBALS['TARGET_URL'] = $TARGET_URL;
        $GLOBALS['SITE_URL'] = 'https://' . @$_SERVER['HTTP_HOST'];
        $GLOBALS['SITE_HOST'] = parse_url($GLOBALS['SITE_URL'], PHP_URL_HOST);
        $GLOBALS['REQUEST_URI'] = @$_SERVER['REQUEST_URI'];
        $GLOBALS['CACHE_KEY'] = base64_encode($GLOBALS['REQUEST_URI']);
        $GLOBALS['CACHE_ADAPTER'] = new yxorP\cache\Cache();
    }


}
