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
        /* Checking if the requested file exists. */
        if (/* Checking if the file extension of the requested file is set. */
        is_file(YXORP_PROXY_URL)) {
            if (/* Getting the file extension of the requested file. */
            isset(pathinfo(YXORP_PROXY_URL)['extension'])) {
                /* Checking if the file extension of the requested file is set. */
                $content_ext = pathinfo(YXORP_PROXY_URL)['extension'];
                if (isset(constants::get(YXORP_MIME_TYPES)[$content_ext])) constants::set(VAR_MIME, constants::get(YXORP_MIME_TYPES)[$content_ext]); else {
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
                        if ($content_mime === null | $content_mime === "") constants::set(VAR_MIME, 'application' . CHAR_SLASH . 'octet-stream'); else constants::set(VAR_MIME, $content_mime);
                        /* Closing the fileinfo resource. */
                        finfo_close($finfo);
                    } else constants::set(VAR_MIME, 'application' . CHAR_SLASH . 'octet-stream');
                }
            }
        }
        $_ext = pathinfo(strtok(YXORP_PROXY_URL, ' ? '), PATHINFO_EXTENSION);

        if (str_contains(YXORP_PROXY_URL, 'bundle.js')) constants::set(VAR_MIME, 'application' . CHAR_SLASH . 'wasm'); else if (str_contains(YXORP_PROXY_URL, 'sitemap')) constants::set(VAR_MIME, 'application' . CHAR_SLASH . 'xml'); else if (str_contains(YXORP_PROXY_URL, 'crop')) constants::set(VAR_MIME, 'image' . CHAR_SLASH . 'png'); else if (str_contains(YXORP_PROXY_URL, 'format')) constants::set(VAR_MIME, 'image' . CHAR_SLASH . 'png'); else if (str_contains(YXORP_PROXY_URL, '.mp4')) constants::set(VAR_MIME, 'video' . CHAR_SLASH . 'mp4'); else if (str_contains(YXORP_PROXY_URL, '.js.br')) constants::set(VAR_MIME, 'br'); else if (array_key_exists($_ext, constants::get(YXORP_MIME_TYPES))) constants::set(VAR_MIME, constants::get(YXORP_MIME_TYPES)[$_ext]); else  constants::set(VAR_MIME, 'text' . CHAR_SLASH . 'html');

        header('Content-Type: ' . constants::get(VAR_MIME) . '; charset = UTF-8');
    }
}
