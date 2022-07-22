<?php
foreach (['Access-Control-Allow-Origin: "*" always', 'Access-Control-Allow-Methods: "POST,GET,OPTIONS" always', 'Access-Control-Allow-Credentials: true always', 'Access-Control-Allow-Headers: "Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials" always', 'Cache-Control: "max-age=36000000" always'] as $head) header($head);//Setting the headers for the response.
if ($cacheExits = file_exists(__DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . urlencode($_SERVER['HTTP_HOST']) . DIRECTORY_SEPARATOR . rtrim(strtr(base64_encode($_SERVER['REQUEST_URI']), '+/=', '._-')) . '.' . 'tmp')) @include __DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . urlencode($_SERVER['HTTP_HOST']) . DIRECTORY_SEPARATOR . rtrim(strtr(base64_encode($_SERVER['REQUEST_URI']), '+/=', '._-')) . '.' . 'tmp'; //Render Cache if Exits: Including the file `/tmp` + `base64_encode($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])` + `.tmp`.
if (isset($_GET["CLECHE"])) foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . urlencode($_SERVER['HTTP_HOST']) . DIRECTORY_SEPARATOR . '*') as $file) unlink($file);
if ($cacheExits) \exit(\die());


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
