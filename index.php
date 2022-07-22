<?php

foreach (['Access-Control-Allow-Origin: "*" always', 'Access-Control-Allow-Methods: "POST,GET,OPTIONS" always', 'Access-Control-Allow-Credentials: true always', 'Access-Control-Allow-Headers: "Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials" always', 'Cache-Control: "max-age=36000000" always'] as $head) header($head);//Setting the headers for the response.

define('YXORP_HTTP_HOST', $_SERVER['HTTP_HOST']);
define('YXORP_REQUEST_URI', $_SERVER['REQUEST_URI']);
define('CHAR_PERIOD', '.');
define('VAR_TMP', 'tmp');
define('FILE_TMP', CHAR_PERIOD . VAR_TMP);
define('DIR_TMP', VAR_TMP . DIRECTORY_SEPARATOR . urlencode(YXORP_HTTP_HOST) . DIRECTORY_SEPARATOR);
define('CACHE_KEY', rtrim(strtr(base64_encode(YXORP_REQUEST_URI), '+/=', '._-')));
define('PATH_TMP_DIR', __DIR__ . DIRECTORY_SEPARATOR . DIR_TMP);
define('PATH_TMP_FILE', __DIR__ . DIRECTORY_SEPARATOR . DIR_TMP . CACHE_KEY . FILE_TMP);
if ($cacheExits = file_exists(PATH_TMP_FILE)) @include PATH_TMP_FILE; //Render Cache if Exits: Including the file `/tmp` + `base64_encode(YXORP_HTTP_HOST . YXORP_REQUEST_URI)` + `.tmp`.

/* Checking if we must clear the cache */
if (isset($_GET["CLECHE"])) foreach (glob(PATH_TMP_DIR . '*') as $file) unlink($file);
if ($cacheExits) exit(die());
/* It defines constants and sets the value of the constants to the value of the arguments passed to the class.  Defining constants. Creating a class called constants.  Defining a constant named `CHAR_SLASH` with the value `/`. */


/* Creating a namespace called `yxorP`. */

namespace yxorP;
/* Including the file `yxorP.php` in the current file. */

require __DIR__ . '/app/yP.php';

/**
 *  Proxy to the yxorP::proxy() method.
 *  A function that is called to start the proxy. // Returns true if the request was successful.
 *  Calling the `proxy()` method of the `yxorP` class.
 */


app\yP::proxy(__DIR__);
