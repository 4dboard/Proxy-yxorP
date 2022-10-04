<?php

// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}
$file = (($dir = __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . ($key = urlencode($_SERVER['HTTP_HOST']))) . DIRECTORY_SEPARATOR) . rtrim(strtr(base64_encode($_SERVER['REQUEST_URI']), '+/=', '._-')) . '.cache';
if (isset($_GET["CLECHE"])) array_map('unlink', glob("$dir/*.*"));

if ($cacheExits = file_exists($file)) exit(die(@include $file)); else require __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php'; ?>
