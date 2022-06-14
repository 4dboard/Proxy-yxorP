<?php /* yxorP */

namespace yxorP\Helpers;


class MimeHelper
{
    public function __construct()
    {

        $_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $_ext = pathinfo(strtok($GLOBALS['SITE_CONTEXT']->REQUEST_URI, '?'), PATHINFO_EXTENSION);

        $GLOBALS['MIME'] = null;

        if (str_contains($GLOBALS['SITE_CONTEXT']->REQUEST_URI, 'bundle.js')) {
            $GLOBALS['MIME'] = 'application/wasm';
        } else if (!$GLOBALS['MIME'] && str_contains($GLOBALS['SITE_CONTEXT']->REQUEST_URI, 'sitemap')) {
            $GLOBALS['MIME'] = 'application/xml';
        } else if (!$GLOBALS['MIME'] && str_contains($GLOBALS['SITE_CONTEXT']->REQUEST_URI, 'crop')) {
            $GLOBALS['MIME'] = 'image/png';
        } else if (!$GLOBALS['MIME'] && str_contains($GLOBALS['SITE_CONTEXT']->REQUEST_URI, 'format')) {
            $GLOBALS['MIME'] = 'image/png';
        } else if (!$GLOBALS['MIME'] && str_contains($GLOBALS['SITE_CONTEXT']->REQUEST_URI, '.mp4')) {
            $GLOBALS['MIME'] = 'video/mp4';
        } else if (!$GLOBALS['MIME'] && str_contains($GLOBALS['SITE_CONTEXT']->REQUEST_URI, '.js.br')) {
            $GLOBALS['MIME'] = 'br';
        } else if (!$GLOBALS['MIME'] && array_key_exists($_ext, $_types)) {
            $GLOBALS['MIME'] = $_types[$_ext];
        } else {
            $GLOBALS['MIME'] = 'text/html';
        }

        header('Content-Type: ' . $GLOBALS['MIME'] . '; charset=UTF-8');
    }
}
