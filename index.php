<?php
foreach (['Access-Control-Allow-Origin: "*" always', 'Access-Control-Allow-Methods: "POST,GET,OPTIONS" always', 'Access-Control-Allow-Credentials: true always', 'Access-Control-Allow-Headers: "Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials" always', 'Cache-Control: "max-age=36000000" always'] as $head) header($head);
$file = (($dir = __DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . ($key = urlencode($_SERVER['HTTP_HOST']))) . DIRECTORY_SEPARATOR) . rtrim(strtr(base64_encode($_SERVER['REQUEST_URI']), '+/=', '._-')) . '.tmp';
if (isset($_GET["CLECHE"])) array_map('unlink', glob("$dir/*.*"));
else require __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';