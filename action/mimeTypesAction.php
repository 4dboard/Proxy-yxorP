<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;
use yxorP\inc\Constants;

/* A class that extends the EventWrapper class. */

class mimeTypesAction extends EventWrapper
{
    /* Setting the content type of the response. */
    public function buildHeaders(): void
    {
        /* An array of mime types. */
        $_types = array('txt' => 'text' . DIRECTORY_SEPARATOR . 'plain', 'htm' => 'text' . DIRECTORY_SEPARATOR . 'html', 'html' => 'text' . DIRECTORY_SEPARATOR . 'html', 'php' => 'text' .
            DIRECTORY_SEPARATOR . 'html', 'css' => 'text' . DIRECTORY_SEPARATOR . 'css', 'js' => 'application' . DIRECTORY_SEPARATOR . 'javascript', 'json' => 'application' .
            DIRECTORY_SEPARATOR . 'json', 'xml' => 'application' . DIRECTORY_SEPARATOR . 'xml', 'swf' => 'application' . DIRECTORY_SEPARATOR . 'x-shockwave-flash', 'flv' => 'video' .
            DIRECTORY_SEPARATOR . 'x-flv', 'png' => 'image' . DIRECTORY_SEPARATOR . 'png', 'jpe' => 'image' . DIRECTORY_SEPARATOR . 'jpeg', 'jpeg' => 'image' .
            DIRECTORY_SEPARATOR . 'jpeg', 'jpg' => 'image' . DIRECTORY_SEPARATOR . 'jpeg', 'gif' => 'image' . DIRECTORY_SEPARATOR . 'gif', 'bmp' => 'image' .
            DIRECTORY_SEPARATOR . 'bmp', 'ico' => 'image' . DIRECTORY_SEPARATOR . 'vnd', 'tiff' => 'image' . DIRECTORY_SEPARATOR . 'tiff', 'tif' => 'image' .
            DIRECTORY_SEPARATOR . 'tiff', 'svg' => 'image' . DIRECTORY_SEPARATOR . 'svg + xml', 'svgz' => 'image' . DIRECTORY_SEPARATOR . 'svg + xml', 'zip' => 'application' .
            DIRECTORY_SEPARATOR . 'zip', 'rar' => 'application' . DIRECTORY_SEPARATOR . 'x-rar-compressed', 'exe' => 'application' . DIRECTORY_SEPARATOR . 'x-msdownload', 'msi' => 'application' .
            DIRECTORY_SEPARATOR . 'x-msdownload', 'cab' => 'application' . DIRECTORY_SEPARATOR . 'vnd', 'mp3' => 'audio' . DIRECTORY_SEPARATOR . 'mpeg', 'qt' => 'video' .
            DIRECTORY_SEPARATOR . 'quicktime', 'mov' => 'video' . DIRECTORY_SEPARATOR . 'quicktime', 'pdf' => 'application' . DIRECTORY_SEPARATOR . 'pdf', 'psd' => 'image' .
            DIRECTORY_SEPARATOR . 'vnd', 'ai' => 'application' . DIRECTORY_SEPARATOR . 'postscript', 'eps' => 'application' . DIRECTORY_SEPARATOR . 'postscript', 'ps' => 'application' .
            DIRECTORY_SEPARATOR . 'postscript', 'doc' => 'application' . DIRECTORY_SEPARATOR . 'msword', 'rtf' => 'application' . DIRECTORY_SEPARATOR . 'rtf', 'xls' => 'application' .
            DIRECTORY_SEPARATOR . 'vnd', 'ppt' => 'application' . DIRECTORY_SEPARATOR . 'vnd-powerpoint', 'odt' => 'application' . DIRECTORY_SEPARATOR . 'vnd', 'ods' => 'application' .
            DIRECTORY_SEPARATOR . 'vnd');

        /* Getting the file extension of the requested file. */
        $_ext = pathinfo(strtok(Constants::get('PROXY_URL'), ' ? '), PATHINFO_EXTENSION);

        /* Setting the content type of the response. */
        if (str_contains(Constants::get('PROXY_URL'), 'bundle.js')) Constants::set('MIME', 'application' . DIRECTORY_SEPARATOR . 'wasm'); else if (!Constants::get('MIME') && str_contains(Constants::get('PROXY_URL'), 'sitemap'))
            Constants::set('MIME', 'application' . DIRECTORY_SEPARATOR . 'xml'); else if (!Constants::get('MIME') && str_contains(Constants::get('PROXY_URL'), 'crop'))
            Constants::set('MIME', 'image' . DIRECTORY_SEPARATOR . 'png'); else if (!Constants::get('MIME') && str_contains(Constants::get('PROXY_URL'), 'format'))
            Constants::set('MIME', 'image' . DIRECTORY_SEPARATOR . 'png'); else if (!Constants::get('MIME') && str_contains(Constants::get('PROXY_URL'), '.mp4'))
            Constants::set('MIME', 'video' . DIRECTORY_SEPARATOR . 'mp4'); else if (!Constants::get('MIME') && str_contains(Constants::get('PROXY_URL'), '.js.br'))
            Constants::set('MIME', 'br'); else if (array_key_exists($_ext, $_types) && !Constants::get('MIME')) Constants::set('MIME', $_types[$_ext]); else
            Constants::set('MIME', 'text' . DIRECTORY_SEPARATOR . 'html');

        /* Setting the content type of the response. */
        header('Content-Type: ' . Constants::get('MIME') . '; charset = UTF-8');
    }
}