<?php
/* Importing the wrapper class from the yxorP\app\lib\http namespace. */


use yxorP\app\lib\http\wrapper;
use yxorP\app\yP;

/* Extending the `wrapper` class, which is a class that is used to wrap the `event` class. */

class onSentAction extends wrapper
{
    /* A method that is called before the request is sent. */
    /**
     * @throws JsonException
     */
    public function onSent(): void
    {

        /* Checking if the request URI contains the string "bundle.js" and if it does, it sets the mime type to "application/wasm". */
        if (str_contains(YXORP_REQUEST_URI, 'bundle.js')) $mime = 'application' . CHAR_SLASH . 'wasm';
        /* Checking if the request URI contains the word sitemap. If it does, it sets the mime type to application/xml. */
        else if (str_contains(YXORP_REQUEST_URI, 'sitemap')) $mime = 'application' . CHAR_SLASH . 'xml';
        /* Checking if the request URI contains the word "format" and if it does, it sets the mime type to image/png. */
        else if (str_contains(YXORP_REQUEST_URI, 'crop')) $mime = 'image' . CHAR_SLASH . 'png';
        /* Checking if the request URI contains the word "crop" and if it does, it sets the mime type to image/png. */
        else if (str_contains(YXORP_REQUEST_URI, 'format')) $mime = 'image' . CHAR_SLASH . 'png';
        /* Checking if the file extension is in the array of mime types. If it is, it sets the mime type to the value of the array
        key. If it is not, it sets the mime type to text/html. */
        else if (yP::get(VAR_RESPONSE)) $mime = yP::get(VAR_RESPONSE)->getHeaderLine('Content-Type'); else {
            /* Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`. */
            $mimeTypes = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'mime' . CHAR_PERIOD . 'json'), true);
            /* Getting the file extension of the requested file. */
            $_ext = pathinfo(strtok($_SERVER['REQUEST_URI'], ' ? '), PATHINFO_EXTENSION);
            /* Checking if the file extension is in the array of mime types. If it is, it sets the mime type to the value
            of the array key. If it is not, it sets the mime type to text/html. */
            if (array_key_exists($_ext, $mimeTypes)) $mime = $mimeTypes[$_ext]; else $mime = 'text' . CHAR_SLASH . 'html';
        }

        /* Defining the MIME constant as the $mime variable. */
        define('MIME', $mime);
        /* Setting the content type of the response. */
        header('Content-Type: ' . $mime . ';charset=UTF-8');
        /* Creating a new `yxorP\app\lib\proxy\Client` object, and then it is sending a request to the `\yxorP\app\yP::get(YXORP_FETCH)` URL,
        with the `\yxorP\app\yP::get(YXORP_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body.   Setting the content of the response to the content of the request. */
    }
}