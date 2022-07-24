<?php
foreach (['Access-Control-Allow-Origin: "*" always', 'Access-Control-Allow-Methods: "POST,GET,OPTIONS" always', 'Access-Control-Allow-Credentials: true always', 'Access-Control-Allow-Headers: "Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials" always', 'Cache-Control: "max-age=36000000" always'] as $head) header($head);
$file = ($dir = __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . ($key = urlencode($_SERVER['HTTP_HOST'])) . DIRECTORY_SEPARATOR) . rtrim(strtr(base64_encode($_SERVER['REQUEST_URI']), '+/=', '._-')) . '.tmp';
session_name($_SERVER['HTTP_HOST']) . session_start();
store::print($key);

if (isset($_GET["CLECHE"])) {
    foreach (glob($dir . '*') as $file) unlink($file);
    session_unset() . session_destroy() . session_write_close() . setcookie(session_name(), '', 0, '/') . session_regenerate_id(true) . rmdir($dir);
}
if ($cacheExits = file_exists($file)) @include $file;
require __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';