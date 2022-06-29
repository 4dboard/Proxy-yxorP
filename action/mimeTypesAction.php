<?php use yxorP\Http\EventWrapper;

class mimeTypesAction extends EventWrapper
{
    public function buildHeaders(): void
    {
        $_types = array('txt' => 'text' . DIRECTORY_SEPARATOR . 'plain', 'htm' => 'text' . DIRECTORY_SEPARATOR . 'html', 'html' => 'text' . DIRECTORY_SEPARATOR . 'html', 'php' => 'text' . DIRECTORY_SEPARATOR . 'html', 'css' => 'text' . DIRECTORY_SEPARATOR . 'css', 'js' => 'application' . DIRECTORY_SEPARATOR . 'javascript', 'json' => 'application' . DIRECTORY_SEPARATOR . 'json', 'xml' => 'application' . DIRECTORY_SEPARATOR . 'xml', 'swf' => 'application' . DIRECTORY_SEPARATOR . 'x-shockwave-flash', 'flv' => 'video' . DIRECTORY_SEPARATOR . 'x-flv', 'png' => 'image' . DIRECTORY_SEPARATOR . 'png', 'jpe' => 'image' . DIRECTORY_SEPARATOR . 'jpeg', 'jpeg' => 'image' . DIRECTORY_SEPARATOR . 'jpeg', 'jpg' => 'image' . DIRECTORY_SEPARATOR . 'jpeg', 'gif' => 'image' . DIRECTORY_SEPARATOR . 'gif', 'bmp' => 'image' . DIRECTORY_SEPARATOR . 'bmp', 'ico' => 'image' . DIRECTORY_SEPARATOR . 'vnd', 'tiff' => 'image' . DIRECTORY_SEPARATOR . 'tiff', 'tif' => 'image' . DIRECTORY_SEPARATOR . 'tiff', 'svg' => 'image' . DIRECTORY_SEPARATOR . 'svg + xml', 'svgz' => 'image' . DIRECTORY_SEPARATOR . 'svg + xml', 'zip' => 'application' . DIRECTORY_SEPARATOR . 'zip', 'rar' => 'application' . DIRECTORY_SEPARATOR . 'x-rar-compressed', 'exe' => 'application' . DIRECTORY_SEPARATOR . 'x-msdownload', 'msi' => 'application' . DIRECTORY_SEPARATOR . 'x-msdownload', 'cab' => 'application' . DIRECTORY_SEPARATOR . 'vnd', 'mp3' => 'audio' . DIRECTORY_SEPARATOR . 'mpeg', 'qt' => 'video' . DIRECTORY_SEPARATOR . 'quicktime', 'mov' => 'video' . DIRECTORY_SEPARATOR . 'quicktime', 'pdf' => 'application' . DIRECTORY_SEPARATOR . 'pdf', 'psd' => 'image' . DIRECTORY_SEPARATOR . 'vnd', 'ai' => 'application' . DIRECTORY_SEPARATOR . 'postscript', 'eps' => 'application' . DIRECTORY_SEPARATOR . 'postscript', 'ps' => 'application' . DIRECTORY_SEPARATOR . 'postscript', 'doc' => 'application' . DIRECTORY_SEPARATOR . 'msword', 'rtf' => 'application' . DIRECTORY_SEPARATOR . 'rtf', 'xls' => 'application' . DIRECTORY_SEPARATOR . 'vnd', 'ppt' => 'application' . DIRECTORY_SEPARATOR . 'vnd-powerpoint', 'odt' => 'application' . DIRECTORY_SEPARATOR . 'vnd', 'ods' => 'application' . DIRECTORY_SEPARATOR . 'vnd');
        $_ext = pathinfo(strtok(self::get('PROXY_URL'), ' ? '), PATHINFO_EXTENSION);
        if (str_contains(self::get('PROXY_URL'), 'bundle.js')) self::set('MIME', 'application' . DIRECTORY_SEPARATOR . 'wasm'); else if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), 'sitemap')) {
            self::set('MIME', 'application' . DIRECTORY_SEPARATOR . 'xml');
        } else if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), 'crop')) {
            self::set('MIME', 'image' . DIRECTORY_SEPARATOR . 'png');
        } else if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), 'format')) self::set('MIME', 'image' . DIRECTORY_SEPARATOR . 'png'); else if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), '.mp4')) {
            self::set('MIME', 'video' . DIRECTORY_SEPARATOR . 'mp4');
        } else if (!self::get('MIME') && str_contains(self::get('PROXY_URL'), '.js.br')) {
            self::set('MIME', 'br');
        } else if (!self::get('MIME') && array_key_exists($_ext, $_types)) self::set('MIME', $_types[$_ext]); else {
            self::set('MIME', 'text' . DIRECTORY_SEPARATOR . 'html');
        }
        header('Content-Type: ' . self::get('MIME') . '; charset = UTF-8');
    }
}