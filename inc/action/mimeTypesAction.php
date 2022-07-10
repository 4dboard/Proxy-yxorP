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

        $mimes_file = file_get_contents(PATH_FILE_MIME_TYPES);
        preg_match_all('#^([^\s]{2,}?)\s+(.+?)$#ism', $mimes_file, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $exts = explode(" ", $match[2]);
            foreach ($exts as $ext) {
                $mimes[$ext] = $match[1];
            }
        }
        $content_mime = 'unknown';
        if (is_file(YXORP_PROXY_URL)) {
            if (isset(pathinfo(YXORP_PROXY_URL) ['extension'])) {
                $content_ext = pathinfo(YXORP_PROXY_URL) ['extension'];
                if (isset($mimes[$content_ext])) {
                    $content_mime = $mimes[$content_ext];
                } else {
                    if (is_readable(YXORP_PROXY_URL) && is_executable(YXORP_PROXY_URL)) {
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $content_mime = finfo_file($finfo, YXORP_PROXY_URL);
                        if ($content_mime === null | $content_mime === "") {
                            constants::set('MIME', 'application' . CHAR_SLASH . 'octet-stream');
                        } else {
                            constants::set('MIME', $content_mime);
                        }
                        finfo_close($finfo);
                    } else {
                        constants::set('MIME', 'application' . CHAR_SLASH . 'octet-stream');
                    }
                }
            }
        }
        /* Getting the file extension of the requested file. */
        $_ext = pathinfo(strtok(YXORP_PROXY_URL, ' ? '), PATHINFO_EXTENSION);

        /* Setting the content type of the response. */
        if (str_contains(YXORP_PROXY_URL, 'bundle.js')) constants::set('MIME', 'application' . CHAR_SLASH . 'wasm'); else if (str_contains(YXORP_PROXY_URL, 'sitemap'))
            constants::set('MIME', 'application' . CHAR_SLASH . 'xml'); else if (str_contains(YXORP_PROXY_URL, 'crop'))
            constants::set('MIME', 'image' . CHAR_SLASH . 'png'); else if (str_contains(YXORP_PROXY_URL, 'format'))
            constants::set('MIME', 'image' . CHAR_SLASH . 'png'); else if (str_contains(YXORP_PROXY_URL, '.mp4'))
            constants::set('MIME', 'video' . CHAR_SLASH . 'mp4'); else if (str_contains(YXORP_PROXY_URL, '.js.br'))
            constants::set('MIME', 'br'); else if (array_key_exists($_ext, $mimes)) constants::set('MIME', $mimes[$_ext]); else
            constants::set('MIME', 'text' . CHAR_SLASH . 'html');

        /* Setting the content type of the response. */
        header('Content-Type: ' . constants::get('MIME') . '; charset = UTF-8');
    }
