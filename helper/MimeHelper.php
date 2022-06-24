<?php namespace yxorP\Helper;

use yxorP;

class MimeHelper
{
    public static function helper(): void
    {
        $_types = array('txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/html', 'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json', 'xml' => 'application/xml', 'swf' => 'application/x-shockwave-flash', 'flv' => 'video/x-flv', 'png' => 'image/png', 'jpe' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpeg', 'gif' => 'image/gif', 'bmp' => 'image/bmp', 'ico' => 'image/vnd.microsoft.icon', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'svg' => 'image/svg+xml', 'svgz' => 'image/svg+xml', 'zip' => 'application/zip', 'rar' => 'application/x-rar-compressed', 'exe' => 'application/x-msdownload', 'msi' => 'application/x-msdownload', 'cab' => 'application/vnd.ms-cab-compressed', 'mp3' => 'audio/mpeg', 'qt' => 'video/quicktime', 'mov' => 'video/quicktime', 'pdf' => 'application/pdf', 'psd' => 'image/vnd.adobe.photoshop', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'doc' => 'application/msword', 'rtf' => 'application/rtf', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'odt' => 'application/vnd.oasis.opendocument.text', 'ods' => 'application/vnd.oasis.opendocument.spreadsheet');
        $_ext = pathinfo(strtok(yxorP::get('SITE_CONTEXT')->REQUEST_URI, '?'), PATHINFO_EXTENSION);
        if (str_contains(yxorP::get('SITE_CONTEXT')->REQUEST_URI, 'bundle.js')) {
            yxorP::set('MIME', 'application/wasm');
        } else if (!yxorP::get('MIME') && str_contains(yxorP::get('SITE_CONTEXT')->REQUEST_URI, 'sitemap')) {
            yxorP::set('MIME', 'application/xml');
        } else if (!yxorP::get('MIME') && str_contains(yxorP::get('SITE_CONTEXT')->REQUEST_URI, 'crop')) {
            yxorP::set('MIME', 'image/png');
        } else if (!yxorP::get('MIME') && str_contains(yxorP::get('SITE_CONTEXT')->REQUEST_URI, 'format')) {
            yxorP::set('MIME', 'image/png');
        } else if (!yxorP::get('MIME') && str_contains(yxorP::get('SITE_CONTEXT')->REQUEST_URI, '.mp4')) {
            yxorP::set('MIME', 'video/mp4');
        } else if (!yxorP::get('MIME') && str_contains(yxorP::get('SITE_CONTEXT')->REQUEST_URI, '.js.br')) {
            yxorP::set('MIME', 'br');
        } else if (!yxorP::get('MIME') && array_key_exists($_ext, $_types)) {
            yxorP::set('MIME', $_types[$_ext]);
        } else {
            yxorP::set('MIME', 'text/html');
        }
        header('Content-Type: ' . yxorP::get('MIME') . '; charset=UTF-8');
        new FetchHelper();
    }
}