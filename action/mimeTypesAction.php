<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\wrapper;
use yxorP\inc\constants;

/* A class that extends the wrapper class. */

class mimeTypesAction extends wrapper
{
    /* Setting the content type of the response. */
    public function buildHeaders(): void
    {
        /* An array of mime types. */
        $_types = array('txt' => 'text' . CHAR_SLASH . 'plain', 'htm' => 'text' . CHAR_SLASH . 'html', 'html' => 'text' . CHAR_SLASH . 'html', 'php' => 'text' .
            CHAR_SLASH . 'html', 'css' => 'text' . CHAR_SLASH . 'css', 'js' => 'application' . CHAR_SLASH . 'javascript', 'json' => 'application' .
            CHAR_SLASH . 'json', 'xml' => 'application' . CHAR_SLASH . 'xml', 'swf' => 'application' . CHAR_SLASH . 'x-shockwave-flash', 'flv' => 'video' .
            CHAR_SLASH . 'x-flv', 'png' => 'image' . CHAR_SLASH . 'png', 'jpe' => 'image' . CHAR_SLASH . 'jpeg', 'jpeg' => 'image' .
            CHAR_SLASH . 'jpeg', 'jpg' => 'image' . CHAR_SLASH . 'jpeg', 'gif' => 'image' . CHAR_SLASH . 'gif', 'bmp' => 'image' .
            CHAR_SLASH . 'bmp', 'ico' => 'image' . CHAR_SLASH . 'vnd', 'tiff' => 'image' . CHAR_SLASH . 'tiff', 'tif' => 'image' .
            CHAR_SLASH . 'tiff', 'svg' => 'image' . CHAR_SLASH . 'svg + xml', 'svgz' => 'image' . CHAR_SLASH . 'svg + xml', 'zip' => 'application' .
            CHAR_SLASH . 'zip', 'rar' => 'application' . CHAR_SLASH . 'x-rar-compressed', 'exe' => 'application' . CHAR_SLASH . 'x-msdownload', 'msi' => 'application' .
            CHAR_SLASH . 'x-msdownload', 'cab' => 'application' . CHAR_SLASH . 'vnd', 'mp3' => 'audio' . CHAR_SLASH . 'mpeg', 'qt' => 'video' .
            CHAR_SLASH . 'quicktime', 'mov' => 'video' . CHAR_SLASH . 'quicktime', 'pdf' => 'application' . CHAR_SLASH . 'pdf', 'psd' => 'image' .
            CHAR_SLASH . 'vnd', 'ai' => 'application' . CHAR_SLASH . 'postscript', 'eps' => 'application' . CHAR_SLASH . 'postscript', 'ps' => 'application' .
            CHAR_SLASH . 'postscript', 'doc' => 'application' . CHAR_SLASH . 'msword', 'rtf' => 'application' . CHAR_SLASH . 'rtf', 'xls' => 'application' .
            CHAR_SLASH . 'vnd', 'ppt' => 'application' . CHAR_SLASH . 'vnd-powerpoint', 'odt' => 'application' . CHAR_SLASH . 'vnd', 'ods' => 'application' .
            CHAR_SLASH . 'vnd');

        /* Getting the file extension of the requested file. */
        $_ext = pathinfo(strtok(constants::get(YXORP_PROXY_URL), ' ? '), PATHINFO_EXTENSION);

        /* Setting the content type of the response. */
        if (str_contains(constants::get(YXORP_PROXY_URL), 'bundle.js')) constants::set('MIME', 'application' . CHAR_SLASH . 'wasm'); else if (!constants::get('MIME') && str_contains(constants::get(YXORP_PROXY_URL), 'sitemap'))
            constants::set('MIME', 'application' . CHAR_SLASH . 'xml'); else if (!constants::get('MIME') && str_contains(constants::get(YXORP_PROXY_URL), 'crop'))
            constants::set('MIME', 'image' . CHAR_SLASH . 'png'); else if (!constants::get('MIME') && str_contains(constants::get(YXORP_PROXY_URL), 'format'))
            constants::set('MIME', 'image' . CHAR_SLASH . 'png'); else if (!constants::get('MIME') && str_contains(constants::get(YXORP_PROXY_URL), '.mp4'))
            constants::set('MIME', 'video' . CHAR_SLASH . 'mp4'); else if (!constants::get('MIME') && str_contains(constants::get(YXORP_PROXY_URL), '.js.br'))
            constants::set('MIME', 'br'); else if (array_key_exists($_ext, $_types) && !constants::get('MIME')) constants::set('MIME', $_types[$_ext]); else
            constants::set('MIME', 'text' . CHAR_SLASH . 'html');

        /* Setting the content type of the response. */
        header('Content-Type: ' . constants::get('MIME')->__toString() . '; charset = UTF-8');
    }
}