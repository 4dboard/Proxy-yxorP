<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* A class that extends the wrapper class. */

class mimeTypesAction extends wrapper
{
    /* Setting the content type of the response. */
    public function onBuildContext(): void
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
        $_ext = pathinfo(strtok(YXORP_PROXY_URL, ' ? '), PATHINFO_EXTENSION);

        /* Setting the content type of the response. */
        if (str_contains(YXORP_PROXY_URL, 'bundle.js')) constants::set('MIME', 'application' . CHAR_SLASH . 'wasm'); else if (str_contains(YXORP_PROXY_URL, 'sitemap'))
            constants::set('MIME', 'application' . CHAR_SLASH . 'xml'); else if (str_contains(YXORP_PROXY_URL, 'crop'))
            constants::set('MIME', 'image' . CHAR_SLASH . 'png'); else if (str_contains(YXORP_PROXY_URL, 'format'))
            constants::set('MIME', 'image' . CHAR_SLASH . 'png'); else if (str_contains(YXORP_PROXY_URL, '.mp4'))
            constants::set('MIME', 'video' . CHAR_SLASH . 'mp4'); else if (str_contains(YXORP_PROXY_URL, '.js.br'))
            constants::set('MIME', 'br'); else if (array_key_exists($_ext, $_types)) constants::set('MIME', $_types[$_ext]); else
            constants::set('MIME', 'text' . CHAR_SLASH . 'html');

        /* Setting the content type of the response. */
        header('Content-Type: ' . constants::get('MIME') . '; charset = UTF-8');
    }


    function get_content_mime_type($content)
    {
        $url = 'http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types';
        $url_live = false;
        $handle = curl_init($url);
        curl_setopt_array($handle, array(
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_NOBODY => true,
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false
        ));
        $response = curl_exec($handle);
        $httpCode = curl_getinfo($handle, CURLINFO_EFFECTIVE_URL);
        $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
        if ($httpCode == 200) {
            $url_live = true;
        }
        $url_live = $url_live;
        curl_close($handle);
        $mimes = array();
        if ($url_live) {
            $mimes_file = file_get_contents($url);
            preg_match_all('#^([^\s]{2,}?)\s+(.+?)$#ism', $mimes_file, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                $exts = explode(" ", $match[2]);
                foreach ($exts as $ext) {
                    $mimes[$ext] = $match[1];
                }
            }
        } else {
            $mimes = array(
                'txt' => 'text/plain',
                'htm' => 'text/html',
                'html' => 'text/html',
                'php' => 'text/html',
                'css' => 'text/css',
                'js' => 'application/javascript',
                'json' => 'application/json',
                'xml' => 'application/xml',
                'swf' => 'application/x-shockwave-flash',
                'flv' => 'video/x-flv',
                // images
                'png' => 'image/png',
                'jpe' => 'image/jpeg',
                'jpeg' => 'image/jpeg',
                'jpg' => 'image/jpeg',
                'gif' => 'image/gif',
                'bmp' => 'image/bmp',
                'ico' => 'image/vnd.microsoft.icon',
                'tiff' => 'image/tiff',
                'tif' => 'image/tiff',
                'svg' => 'image/svg+xml',
                'svgz' => 'image/svg+xml',
                // archives
                'zip' => 'application/zip',
                'rar' => 'application/x-rar-compressed',
                'exe' => 'application/x-msdownload',
                'msi' => 'application/x-msdownload',
                'cab' => 'application/vnd.ms-cab-compressed',
                // audio/video
                'mp3' => 'audio/mpeg',
                'qt' => 'video/quicktime',
                'mov' => 'video/quicktime',
                // adobe
                'pdf' => 'application/pdf',
                'psd' => 'image/vnd.adobe.photoshop',
                'ai' => 'application/postscript',
                'eps' => 'application/postscript',
                'ps' => 'application/postscript',
                // ms office
                'doc' => 'application/msword',
                'rtf' => 'application/rtf',
                'xls' => 'application/vnd.ms-excel',
                'ppt' => 'application/vnd.ms-powerpoint',
                'docx' => 'application/msword',
                'xlsx' => 'application/vnd.ms-excel',
                'pptx' => 'application/vnd.ms-powerpoint',
                // open office
                'odt' => 'application/vnd.oasis.opendocument.text',
                'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
            );
        }
        $content_mime = 'unknown';
        if (is_file($content)) {
            if (isset(pathinfo($content) ['extension'])) {
                $content_ext = pathinfo($content) ['extension'];
                if (isset($mimes[$content_ext])) {
                    $content_mime = $mimes[$content_ext];
                } else {
                    if (is_readable($content) && is_executable($content)) {
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $content_mime = finfo_file($finfo, $content);
                        if ($content_mime === null | $content_mime === "") {
                            $content_mime = "application/octet-stream";
                        } else {
                            $content_mime = $content_mime;
                        }
                        finfo_close($finfo);
                    } else {
                        $content_mime = "application/octet-stream";
                    }
                }
            }
        } else {
            // return whatever you want
            // $content_mime = 'unknown';

        }
        $content_mime = $content_mime;
        return $content_mime;
    }
}