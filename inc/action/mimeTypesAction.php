/* Setting the content type of the response. */
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
        /* Getting the mime types from the mime.types file. */
        /* Parsing the mime.types file and creating an associative array of mime types. */
        preg_match_all('#^([^\s]{2,}?)\s+(.+?)$#ism', file_get_contents(PATH_FILE_MIME_TYPES), $matches, PREG_SET_ORDER);
        /* Parsing the mime.types file and creating an associative array of mime types. */
        foreach ($matches as $match) foreach (explode(" ", $match[2]) as $ext) $mimes[$ext] = $match[1];
        /* Checking if the requested file exists. */
        if (/* Checking if the file extension of the requested file is set. */
        is_file(YXORP_PROXY_URL)) {
            if (/* Getting the file extension of the requested file. */
            isset(pathinfo(YXORP_PROXY_URL) ['extension'])) {
                /* Checking if the file extension of the requested file is set. */
                $content_ext = pathinfo(YXORP_PROXY_URL) ['extension'];
                if (isset($mimes[$content_ext])) constants::set('MIME', $mimes[$content_ext]); else {
                    /* Checking if the requested file is readable and executable. */
                    if (is_readable(YXORP_PROXY_URL) && is_executable(YXORP_PROXY_URL)) {
                        /* Getting the mime type of the requested file. */
                        /* Opening a fileinfo resource. */
                        /* Getting the mime type of the requested file. */
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        /* Setting the content type of the response to `application/octet-stream` if the requested file is not
                        readable and executable. */
                        $content_mime = finfo_file($finfo, YXORP_PROXY_URL);
                        /* Checking if the mime type of the requested file is null or empty and if it is, it sets the mime
                        type of the response to `application/octet-stream` and if it is not, it sets the mime type of
                        the response to the mime type of the requested file. */
                        if ($content_mime === null | $content_mime === "") constants::set('MIME', 'application' . CHAR_SLASH . 'octet-stream'); else constants::set('MIME', $content_mime);
                        /* Closing the fileinfo resource. */
                        finfo_close($finfo);
                    } else constants::set('MIME', 'application' . CHAR_SLASH . 'octet-stream');
                }
            }
        }
        $_ext = pathinfo(strtok(YXORP_PROXY_URL, ' ? '), PATHINFO_EXTENSION);

        if (str_contains(YXORP_PROXY_URL, 'bundle.js')) constants::set('MIME', 'application' . CHAR_SLASH . 'wasm'); else if (str_contains(YXORP_PROXY_URL, 'sitemap')) constants::set('MIME', 'application' . CHAR_SLASH . 'xml'); else if (str_contains(YXORP_PROXY_URL, 'crop')) constants::set('MIME', 'image' . CHAR_SLASH . 'png'); else if (str_contains(YXORP_PROXY_URL, 'format')) constants::set('MIME', 'image' . CHAR_SLASH . 'png'); else if (str_contains(YXORP_PROXY_URL, '.mp4')) constants::set('MIME', 'video' . CHAR_SLASH . 'mp4'); else if (str_contains(YXORP_PROXY_URL, '.js.br')) constants::set('MIME', 'br'); else if (array_key_exists($_ext, $mimes)) constants::set('MIME', $mimes[$_ext]); else  constants::set('MIME', 'text' . CHAR_SLASH . 'html');

        header('Content-Type: ' . constants::get('MIME') . '; charset = UTF-8');
    }
}
