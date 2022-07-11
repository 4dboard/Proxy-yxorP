<?php

/* Defining a constant named `CHAR_SLASH` with the value `/`. */
define('CHAR_SLASH', '/');
define('CHAR_PERIOD', '.');
define('VAR_CACHE', 'cache');
define('DIR_CACHE', CHAR_PERIOD . VAR_CACHE . DIRECTORY_SEPARATOR);
define('PATH_DIR_CACHE', __DIR__ . DIRECTORY_SEPARATOR . DIR_CACHE);
define('CACHE_KEY', rtrim(strtr(base64_encode($_SERVER['SITE_URL'] . $_SERVER['REQUEST_URI']), '+/=', '._-')));

try {
    /* Checking if the requested URI contains the string `$t`. */
    /* A function that checks if the current request URI contains the given string. */
    function checkUri($t)
    {
        /* Checking if the current request URI contains the given string. */
        return str_contains($_SERVER['REQUEST_URI'], $t);
    }

    /* Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`. */
    $array_map = array_map('str_getcsv', file(__DIR__ . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'mime.types'));
    /* Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`. */
    $mimeTypes = array_merge(...$array_map);
    /* Getting the file extension of the requested file. */
    $_ext = pathinfo(strtok($_SERVER['REQUEST_URI'], ' ? '), PATHINFO_EXTENSION);

    /* Setting the content type of the response. */
    if (checkUri('bundle.js')) define('MIME', 'application' . CHAR_SLASH . 'wasm');
    /* Checking if the current request URI contains the string `sitemap`. */
    else if (checkUri('sitemap'))
        /* Checking if the current request URI contains the string `crop`. */
        define('MIME', 'application' . CHAR_SLASH . 'xml');
    else if (checkUri('crop'))
        /* Setting the content type of the response to `image/png`. */
        define('MIME', 'image' . CHAR_SLASH . 'png');
    else if (checkUri('format'))
        /* Checking if the current request URI contains the string `.mp4`. */
        define('MIME', 'image' . CHAR_SLASH . 'png');
    else if (checkUri('.mp4'))
        define('MIME', 'video' . CHAR_SLASH . 'mp4');
    /* Checking if the current request URI contains the string `.js.br`. */
    else if (checkUri('.js.br'))
        /* Checking if the file extension of the requested file is in the array `$mimeTypes`. */
        define('MIME', 'br');
    /* Checking if the file extension of the requested file is in the array `$mimeTypes`. */
    else if (array_key_exists($_ext, $mimeTypes))
        define('MIME', $mimeTypes[$_ext]);
    else
        define('MIME', 'text' . CHAR_SLASH . 'html');

    /* Setting the content type of the response. */
    header('Content-Type: ' . MIME . ';charset=UTF-8');

    /* Including the file `../tmp` + `base64_encode($_SERVER['SITE_URL'] . $_SERVER['REQUEST_URI'])` + `.tmp`. */
    include __DIR__ . DIRECTORY_SEPARATOR . '.cache' . CACHE_KEY . '.tmp';

} catch
(Exception $e) {
    /*swollow*/
}