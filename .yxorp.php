<?php /* yxorP */
error_reporting(0);
use yxorp\inc\Init;
require (@$GLOBALS['PLUGIN_DIR'] = __DIR__) . '/cache/Cache.php';
class yxorp
{
    public function __construct($TARGET_URL)
    {
        @ini_set('default_charset', 'utf-8');
        @$GLOBALS['SITE_HOST'] = @parse_url(@$GLOBALS['SITE_URL'] = 'https://' . @$_SERVER['HTTP_HOST'], PHP_URL_HOST);
        @$GLOBALS['TARGET_HOST'] = @parse_url(@$GLOBALS['TARGET_URL'] = @$TARGET_URL, PHP_URL_HOST);
        @$GLOBALS['CACHE_KEY'] = @base64_encode(@$GLOBALS['REQUEST_URI'] = @$_SERVER['REQUEST_URI']);
        if(!file_exists(@$GLOBALS['CACHE_DIR'] = @$GLOBALS['PLUGIN_DIR'] . '/.cache/') ) if (!mkdir($concurrentDirectory = @$GLOBALS['CACHE_DIR'], 0777, true) && !@is_dir(@$concurrentDirectory)) throw new \RuntimeException(@sprintf('Directory "%s" was not created', @$concurrentDirectory));
        $_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $_ext = @pathinfo(@strtok(@$GLOBALS['REQUEST_URI'], '?'), PATHINFO_EXTENSION);
        @$GLOBALS['MIME'] = (@array_key_exists(@$_ext, @$_types)) ? @$_types[@$_ext] : 'text/html';
        @header('Content-Type: ' . @$GLOBALS['MIME'] . '; charset=UTF-8') || @header_remove('X-Powered-By') || @header_remove("X-Frame-Options") || @header_remove("Content-Security-Policy") || @header_remove("Access-Control-Allow-Origin") || @header_remove("Access-Control-Allow-Methods") || @header_remove("Access-Control-Expose-Headers") || @header("Access-Control-Allow-Origin: *");
        if (!(@$GLOBALS['CACHE_ADAPTER'] = new yxorP\cache\Cache())->isExisting(@$GLOBALS['CACHE_KEY']))  $this->FETCH(); else echo @$GLOBALS['CACHE_ADAPTER']->get(@$GLOBALS['CACHE_KEY']);
        if (@$_GET["DONCLEAR"] !== null) @$GLOBALS['CACHE_ADAPTER']->clean();
    }

    private function FETCH(): void
    {
        require @$GLOBALS['PLUGIN_DIR'] . '/inc/Init.php';
        require @$GLOBALS['PLUGIN_DIR'] . '/inc/Dot.php';
        try {
            new Init();
        } catch (exception $e) {
            @$GLOBALS['BUGSNAG']->notifyException(@$e->__toString());
            (@$GLOBALS['MIME'] !== 'text/html') ? @header("Location: " . @$GLOBALS['PROXY_URL']) : new yxorp();
        }
    }
}
