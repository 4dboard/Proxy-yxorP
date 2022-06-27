<?php
require(yxorP::get('PLUGIN_DIR') . '/cockpit/bootstrap.php');
yxorP::set('APP', cockpit());
define('COCKPIT_INSTALL', true);
$sqlitesupport = false;
try {
    if (extension_loaded('pdo')) {
        $test = new PDO('sqlite::memory:');
        $sqlitesupport = true;
    }
} catch (Exception $e) {
}
function ensure_writable($path)
{
    $dir = COCKPIT_STORAGE_FOLDER . $path;
    if (!file_exists($dir)) {
        if (!mkdir($dir, 0700, true) && !is_dir($dir)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', $dir));
        }
        if ($path === '/data') {
            if (file_put_contents($dir . '/1.htaccess', 'deny from all') === false) {
                return false;
            }
        }
    }
    return is_writable($dir);
}

$checks = array('Php version >= 7.3.0' => (version_compare(PHP_VERSION, '7.3.0') >= 0), 'Missing PDO extension with Sqlite support' => $sqlitesupport, 'GD extension not available' => extension_loaded('gd'), 'MBString extension not available' => extension_loaded('mbstring'), 'Data folder is not writable: /storage/data' => ensure_writable('/data'), 'Cache folder is not writable: /storage/cache' => ensure_writable('/cache'), 'Temp folder is not writable: /storage/tmp' => ensure_writable('/tmp'), 'Thumbs folder is not writable: /storage/thumbs' => ensure_writable('/thumbs'), 'Uploads folder is not writable: /storage/uploads' => ensure_writable('/uploads'),);
$failed = [];
foreach ($checks as $info => $check) {
    if (!$check) {
        $failed[] = $info;
    }
}
function copyfolder($from, $to, $ext = "*")
{
    if (!is_dir($from)) exit("$from does not exist");
    if (!is_dir($to)) if (!mkdir($to) && !is_dir($to)) exit("Failed to create $to");
    $all = glob("$from$ext", GLOB_MARK);
    if (count($all) > 0) {
        foreach ($all as $a) {
            $ff = basename($a);
            if (is_dir($a)) copyfolder("$from$ff/", "$to$ff/"); else if (!copy($a, "$to$ff")) exit("Error copying $a to $to$ff");
        }
    }
}

if (!count($failed)) {
    try {
        if (!yxorP::get('APP')->storage->getCollection('cockpit/accounts')->count()) {
            copyfolder(yxorP::get('PLUGIN_DIR') . '/inc/storage/', yxorP::get('PLUGIN_DIR') . '/cockpit/storage/');
            $created = time();
            $account = ['user' => yxorP::get('ADMIN_USER'), 'name' => yxorP::get('ADMIN_NAME'), 'email' => yxorP::get('ADMIN_EMAIL'), 'active' => true, 'group' => 'admin', 'password' => yxorP::get('APP')->hash(yxorP::get('ADMIN_PASSWORD')), 'i18n' => yxorP::get('APP')->helper('i18n')->locale, '_created' => $created, '_modified' => $created];
            yxorP::get('APP')->storage->insert("cockpit/accounts", $account);
        }
    } catch (Exception $e) {
    }
}