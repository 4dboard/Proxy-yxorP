<?php
foreach (['Access-Control-Allow-Origin: "*" always', 'Access-Control-Allow-Methods: "POST,GET,OPTIONS" always', 'Access-Control-Allow-Credentials: true always', 'Access-Control-Allow-Headers: "Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials" always', 'Cache-Control: "max-age=36000000" always'] as $head) header($head);//Setting the headers for the response.
if ($cacheExits = file_exists($file = __DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . urlencode($_SERVER['HTTP_HOST']) . DIRECTORY_SEPARATOR . rtrim(strtr(base64_encode($_SERVER['REQUEST_URI']), '+/=', '._-')) . '.tmp')) @include $file;
if (isset($_GET["CLECHE"])) foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . urlencode($_SERVER['HTTP_HOST']) . DIRECTORY_SEPARATOR . '*') as $file) unlink($file);
if ($cacheExits) exit(die());
require 'bootstrap.php';
