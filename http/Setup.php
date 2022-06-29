<?php

class Setup
{
    public static function go()
    {

        require(yxorP::get('PLUGIN_DIR') . '/cockpit/bootstrap.php');
        
        yxorP::set('APP', cockpit());

        $sqlitesupport = false;

        if (extension_loaded('pdo')) {
            $test = new PDO('sqlite::memory:');
            $sqlitesupport = true;
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

        if (!yxorP::get('APP')->storage->getCollection('cockpit/accounts')->count()) {
            copyfolder(yxorP::get('PLUGIN_DIR') . '/inc/storage/', yxorP::get('PLUGIN_DIR') . '/cockpit/storage/');
            $created = time();
            $account = ['user' => yxorP::get('ADMIN_USER'), 'name' => yxorP::get('ADMIN_NAME'), 'email' => yxorP::get('ADMIN_EMAIL'), 'active' => true, 'group' => 'admin', 'password' => yxorP::get('APP')->hash(yxorP::get('ADMIN_PASSWORD')), 'i18n' => yxorP::get('APP')->helper('i18n')->locale, '_created' => $created, '_modified' => $created];
            yxorP::get('APP')->storage->insert("cockpit/accounts", $account);
        }
    }
}