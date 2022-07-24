<?php
/* Creating a namespace called `yxorP`. */

namespace yxorP;
/* Including the file `yxorP.php` in the current file. */

use yxorP\app\yP;

require __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'yP.php';

/**
 *  Proxy to the yxorP::proxy() method.
 *  A function that is called to start the proxy. // Returns true if the request was successful.
 *  Calling the `proxy()` method of the `yxorP` class.
 */

if (!str_contains(YXORP_REQUEST_URI, '/app')) {
    new yP(__DIR__);
    exit(die());
}
if (str_replace(['.js', '.css', '.png', '.svg', '.tag', '.woff', '.tff'], '', YXORP_REQUEST_URI) !== YXORP_REQUEST_URI) {

    /* Checking if the request URI contains the string "bundle.js" and if it does, it sets the mime type to
    "application/wasm". */
    if (str_contains(YXORP_REQUEST_URI, 'bundle.js')) $mime = 'application' . CHAR_SLASH . 'wasm'; else if (str_contains(YXORP_REQUEST_URI, 'sitemap')) $mime = 'application' . CHAR_SLASH . 'xml'; else if (str_contains(YXORP_REQUEST_URI, 'crop')) $mime = 'image' . CHAR_SLASH . 'png'; else if (str_contains(YXORP_REQUEST_URI, 'format')) $mime = 'image' . CHAR_SLASH . 'png'; else if (yP::try(VAR_RESPONSE)) $mime = yP::try(VAR_RESPONSE)->getHeaderLine('Content-Type'); else {
        /* Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`. */
        $mimeTypes = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . DIR_APP . DIR_LIB . DIR_DATA . VAR_MIME . EXT_JSON), true);
        /* Getting the file extension of the requested file. */
        $_ext = pathinfo(strtok($_SERVER['REQUEST_URI'], ' ? '), PATHINFO_EXTENSION);
        /* Checking if the file extension is in the array of mime types. If it is, it sets the mime type to the value
        of the array key. If it is not, it sets the mime type to text/html. */
        if (array_key_exists($_ext, $mimeTypes)) $mime = $mimeTypes[$_ext]; else $mime = 'text' . CHAR_SLASH . 'html';
    }

    /* Setting the content type of the response. */
    header('Content-Type: ' . $mime . ';charset=UTF-8');
    exit(die(file_get_contents(strtok(__DIR__ . str_replace('/', DIRECTORY_SEPARATOR, YXORP_REQUEST_URI), '?'))));
}


// define base route and url
$COCKPIT_DIR = str_replace(DIRECTORY_SEPARATOR, '/', __DIR__ . DIRECTORY_SEPARATOR . 'app');
$COCKPIT_DOCS_ROOT = str_replace(DIRECTORY_SEPARATOR, '/', isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : dirname(__DIR__ . DIRECTORY_SEPARATOR . 'app'));

# make sure that $_SERVER['DOCUMENT_ROOT'] is set correctly
if (!str_starts_with($COCKPIT_DIR, $COCKPIT_DOCS_ROOT) && isset($_SERVER['SCRIPT_NAME'])) {
    $COCKPIT_DOCS_ROOT = str_replace(dirname(str_replace(DIRECTORY_SEPARATOR, '/', $_SERVER['SCRIPT_NAME'])), '', $COCKPIT_DIR);
}

$COCKPIT_BASE = trim(str_replace($COCKPIT_DOCS_ROOT, '', $COCKPIT_DIR), "/");


define('COCKPIT_BASE_ROUTE', strlen($COCKPIT_BASE) ? "/{$COCKPIT_BASE}" : $COCKPIT_BASE);
define('COCKPIT_API_REQUEST', str_contains($_SERVER['REQUEST_URI'], COCKPIT_BASE_ROUTE . '/api/') ? 1 : 0);


// define admin route
$route = preg_replace('#' . preg_quote(COCKPIT_BASE_ROUTE, '#') . '#', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1);
define('COCKPIT_ADMIN_ROUTE', $route == '' ? '/' : $route);


// set error handler or do, whatever you want...


// Instead of including index.php, you can copy and paste the missing parts from
// the original index.php into this file. Now include bootstrap.php instead.
// After including bootstrap.php and before running the app, you can change any
// settings with $cockpit->set('key', 'value');
exit(die(require(__DIR__ . DIRECTORY_SEPARATOR . 'app' . '/lib/cockpit/index.php')));


