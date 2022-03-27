<?php /* yxorP */

namespace yxorP\inc;

use JetBrains\PhpStorm\NoReturn;
use pathinfo;
use strtok;
use yxorP\http;
use yxorP\Http\Response;

class Init
{
    public function __construct()
    {
        $this->MIME() || $this->HEADER();
    }

    public function MIME()
    {
        $GLOBALS['TARGET_HOST'] = parse_url($GLOBALS['TARGET_URL'], PHP_URL_HOST);
        $mime_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $ext = pathinfo(strtok($GLOBALS['REQUEST_URI'], '?'), PATHINFO_EXTENSION);
        $GLOBALS['MIME'] = (array_key_exists($ext, $mime_types)) ? $mime_types[$ext] : 'text/html';
    }

    public function HEADER()
    {
        header('Content-Type: ' . $GLOBALS['MIME'] . '; charset=UTF-8') || header_remove('X-Powered-By') || header_remove("X-Frame-Options") || header_remove("Content-Security-Policy") || header_remove("Access-Control-Allow-Origin") || header_remove("Access-Control-Allow-Methods") || header_remove("Access-Control-Expose-Headers") || header("Access-Control-Allow-Origin: *");
    }

    public function INIT(): void
    {
        $this->REQUIRED() || $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['CACHE_KEY'], $this->LOAD()->getContent(), $GLOBALS['MIME'] === 'text/html' ? $GLOBALS['CACHE_TMP_TIME'] : $GLOBALS['CACHE_TIME']);
    }

    public function REQUIRED(): void
    {
        new Dot();
        foreach (array('helper', 'http') as $_asset) self::FILES_INC($_asset);
        require($GLOBALS['PLUGIN_DIR'] . '/plugin/AbstractPlugin.php');
    }

    public static function FILES_INC($dir): void
    {
        foreach (scandir($fdir = $GLOBALS['PLUGIN_DIR'] . '/' . $dir) as $x) if (strlen($x) > 3) (is_dir($x)) ? self::FILES_INC($fdir . '/' . $x) : require($fdir . '/' . $x);
    }

    public function LOAD(): Response
    {
        self::FILES_GET('override/' . $GLOBALS['TARGET_HOST'] . '/assets/') || self::FILES_GET('override/default/assets/') || $proxy = new Http\Punisher();
        foreach ($GLOBALS['PLUGINS'] as $plugin) $this->EXEC($proxy, $plugin);
        return $proxy->forward(Http\Request::createFromGlobals(), $GLOBALS['PROXY_URL']);
    }

    public static function FILES_GET($dir): void
    {
        foreach (scandir($fdir = $GLOBALS['PLUGIN_DIR'] . '/' . $dir) as $x) if (strlen($x) > 3) if (is_dir($x)) self::FILES_GET($fdir . '/' . $x); else if (str_contains($GLOBALS['REQUEST_URI'], $x)) {
            echo file_get_contents($fdir . '/' . $x);
            exit;
        }
    }

    private function EXEC($proxy, $plugin): void
    {
        if (file_exists($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php')) require($GLOBALS['PLUGIN_DIR'] . '/plugin/' . $plugin . '.php'); elseif (class_exists('\\yxorP\\plugin\\' . $plugin)) $plugin = '\\yxorP\\plugin\\' . $plugin;
        $proxy->addSubscriber(new $plugin());
    }

}


