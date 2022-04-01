<?php /* yxorP */
error_reporting(0);

use JetBrains\PhpStorm\NoReturn;
use yxorp\inc\Init;

$GLOBALS['PLUGIN_DIR'] = __DIR__;
require $GLOBALS['PLUGIN_DIR'] . '/cache/Cache.php';

class yxorp
{
    public function __construct($TARGET_URL)
    {
        @ini_set('default_charset', 'utf-8');

        $GLOBALS['TARGET_URL'] = $TARGET_URL;
        $GLOBALS['REQUEST_URI'] = @$_SERVER['REQUEST_URI'];
        $GLOBALS['SITE_URL'] = 'https://' . @$_SERVER['HTTP_HOST'];
        $GLOBALS['SITE_HOST'] = parse_url($GLOBALS['SITE_URL'], PHP_URL_HOST);

         $this->MIME() || $this->CACHE() || $this->LOAD();
    }

    #[NoReturn] public function MIME(): void
    {
        $GLOBALS['TARGET_HOST'] = parse_url($GLOBALS['TARGET_URL'], PHP_URL_HOST);
        $mime_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $ext = pathinfo(strtok($GLOBALS['REQUEST_URI'], '?'), PATHINFO_EXTENSION);
        $GLOBALS['MIME'] = (array_key_exists($ext, $mime_types)) ? $mime_types[$ext] : 'text/html';
        @header('Content-Type: ' . $GLOBALS['MIME'] . '; charset=UTF-8') || @header_remove('X-Powered-By') || @header_remove("X-Frame-Options") || @header_remove("Content-Security-Policy") || @header_remove("Access-Control-Allow-Origin") || @header_remove("Access-Control-Allow-Methods") || @header_remove("Access-Control-Expose-Headers") || @header("Access-Control-Allow-Origin: *");
    }

    #[NoReturn] private function CACHE(): void
    {
        $GLOBALS['CACHE_DIR'] = $GLOBALS['PLUGIN_DIR'] . '/.cache/';

        if (!file_exists($GLOBALS['CACHE_DIR']) && !mkdir($GLOBALS['CACHE_DIR'], 0777, true)
            && !is_dir($GLOBALS['CACHE_DIR']))
            throw new RuntimeException(sprintf('Directory "%s" was not created', 'path/to/directory'));

        $GLOBALS['CACHE_KEY'] = base64_encode($GLOBALS['REQUEST_URI']);
        $GLOBALS['CACHE_ADAPTER'] = new yxorP\cache\Cache();
    }

    #[NoReturn] private function FETCH(): void
    {
        require $GLOBALS['PLUGIN_DIR'] . '/inc/Init.php';
        require $GLOBALS['PLUGIN_DIR'] . '/inc/Dot.php';

        try {
            new Init();
        } catch (exception $e) {
            $GLOBALS['BUGSNAG']->notifyException($e->__toString());
            ($GLOBALS['MIME'] !== 'text/html') ? @header("Location: " . $GLOBALS['PROXY_URL']) : new yxorp();
        }
    }

    #[NoReturn] private function GO(): void
    {
        if (!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['CACHE_KEY']))  $this->FETCH(); else
            echo $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['CACHE_KEY']);
    }


    #[NoReturn] private function CLEAR(): void
    {
        if (isset($_GET["DONCLEAR"])) $GLOBALS['CACHE_ADAPTER']->clean();
    }

    #[NoReturn] private function LOAD(): void
    {

        $this->GO() || $this->CLEAR;
    }


}
