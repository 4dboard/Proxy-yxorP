<?php error_reporting(1);

use Bugsnag\Client;
use Bugsnag\Handler;
use yxorp\Http;

require (@$GLOBALS['PLUGIN_DIR'] = __DIR__) . '/cache/Cache.php';
require @$GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require @$GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';
header_remove('X-Powered-By');
header_remove("X-Frame-Options");
header_remove("Content-Security-Policy");
header_remove("Access-Control-Allow-Origin");
header_remove("Access-Control-Allow-Methods");
header_remove("Access-Control-Expose-Headers");
header("Access-Control-Allow-Origin: *");

class yxorp
{
    public function __construct($TARGET_URL)
    {
        @ini_set('default_charset', 'utf-8');
        @$GLOBALS['SITE_HOST'] = @parse_url(@$GLOBALS['SITE_URL'] = 'https://' . @$_SERVER['HTTP_HOST'], PHP_URL_HOST);
        @$GLOBALS['TARGET_HOST'] = @parse_url(@$GLOBALS['TARGET_URL'] = @$TARGET_URL, PHP_URL_HOST);
        @$GLOBALS['CACHE_KEY'] = @base64_encode(@$GLOBALS['REQUEST_URI'] = @$_SERVER['REQUEST_URI']);
        if (!file_exists(@$GLOBALS['CACHE_DIR'] = @$GLOBALS['PLUGIN_DIR'] . '/.cache/'))
            mkdir($concurrentDirectory = @$GLOBALS['CACHE_DIR'], 0777, true);
        $_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $_ext = @pathinfo(@strtok(@$GLOBALS['REQUEST_URI'], '?'), PATHINFO_EXTENSION);
        @$GLOBALS['MIME'] = (@array_key_exists(@$_ext, @$_types)) ? @$_types[@$_ext] : 'text/html';
        @header('Content-Type: ' . @$GLOBALS['MIME'] . '; charset=UTF-8');
        @$GLOBALS['CACHE_ADAPTER'] = new yxorP\cache\Cache();
        if (!(@$GLOBALS['CACHE_ADAPTER'])->isExisting(@$GLOBALS['CACHE_KEY'])) $this->FETCH(@$TARGET_URL);
            else echo @$GLOBALS['CACHE_ADAPTER']->get(@$GLOBALS['CACHE_KEY']);
        if (@$_GET["DONCLEAR"] !== null) @$GLOBALS['CACHE_ADAPTER']->clean();
    }

    private function FETCH()
    {
        require(@$GLOBALS['PLUGIN_DIR'] . '/plugin/AbstractPlugin.php');
        try {
            foreach (@file(@$GLOBALS['PLUGIN_DIR'] . '/.env') as $line) {
                if (trim(stripos(trim(@$line), '#') === 0)) continue;
                [$name, $value] = explode('=', @$line, 2);
                @$GLOBALS[$name] = @$value;
            }
            Handler::register(@$GLOBALS['BUGSNAG'] = Client::make(@$GLOBALS['BUG_SNAG_KEY']));
            foreach ((array)json_decode(file_get_contents((file_exists(@$GLOBALS['PLUGIN_DIR'] . '/override/' . @$GLOBALS['TARGET_HOST'])) ?
                @$GLOBALS['PLUGIN_DIR'] . '/override/' . @$GLOBALS['TARGET_HOST'] . '/overrides.json' : @$GLOBALS['PLUGIN_DIR'] . '/override/default/overrides.json'),
                false, 512, JSON_THROW_ON_ERROR) as $key => $value) @$GLOBALS[$key] = @$value;
            foreach (array('helper', 'http') as $_asset) $this->FILES_CHECK($_asset, true);
            $this->FILES_CHECK('override/' . @$GLOBALS['TARGET_HOST'] . '/assets/', false);
            $this->FILES_CHECK('override/default/assets/', false);
            $proxy = new Http\Punisher();
            foreach (@$GLOBALS['PLUGINS'] as $plugin) {
                if (file_exists(@$GLOBALS['PLUGIN_DIR'] . '/plugin/' . @$plugin . '.php')) require(@$GLOBALS['PLUGIN_DIR'] . '/plugin/' . @$plugin . '.php');
                    elseif (class_exists('\\yxorP\\plugin\\' . @$plugin)) @$plugin = '\\yxorP\\plugin\\' . @$plugin;
                $proxy->addSubscriber(new $plugin());
            }
            echo $_content = @$proxy->forward(Http\Request::createFromGlobals(), @$GLOBALS['PROXY_URL'] = @$GLOBALS['TARGET_URL'] . @$GLOBALS['REQUEST_URI'] = @$_SERVER['REQUEST_URI'])->getContent();
            @$GLOBALS['CACHE_ADAPTER']->set(@$GLOBALS['CACHE_KEY'], preg_replace_callback('(<p>(.*?)</p>)', function ($m) {
                    return '<p>' . str_replace(fgetcsv(fopen(@$GLOBALS['PLUGIN_DIR'] . '/override/default/search_rewrite.csv', 'rb')),
                            fgetcsv(fopen(@$GLOBALS['PLUGIN_DIR'] . '/override/default/replace_rewrite.csv', 'rb')), @$m[1]);
                }, @$_content) . '</p>', @$GLOBALS['CACHE_TIME'] = time() + (60 * 60 * 24 * 31));
        } catch (exception $e) {
            @$GLOBALS['BUGSNAG']->notifyException(@$e->__toString());
            if (@$GLOBALS['MIME'] !== 'text/html') @header("Location: " . @$GLOBALS['PROXY_URL']);
        }
    }

    public function FILES_CHECK($dir, $inc): void
    {
        foreach (scandir(@$fdir = @$GLOBALS['PLUGIN_DIR'] . '/' . @$dir) as $x) if (strlen(@$x) > 3) if (is_dir($x)) $this->FILES_CHECK(@$fdir . '/' . @$x, $inc);
        elseif($inc) {
            require(@$fdir . '/' . @$x);
        } else {
            if (strpos(@$GLOBALS['REQUEST_URI'], @$x) === true) {
                echo file_get_contents(@$fdir . '/' . @$x);
                exit;
            }
        }
    }
}