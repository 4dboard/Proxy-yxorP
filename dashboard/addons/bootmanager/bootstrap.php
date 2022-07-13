<?php
/**
 * Boot Manager for yxorP CMS
 *
 * @see       https://github.com/raffaelj/yxorp_BootManager
 * @see       https://github.com/agentejo/yxorp/
 *
 * @version   0.2.0
 * @author    Raffael Jesche
 * @license   MIT
 */

const YXORP_BOOTMANAGER = 1;

$this->on('yxorp.bootstrap', function () {

    // set "/Bootmanager/addons" to custom modules
    $loadmodules = $this->retrieve('loadmodules');

    $loadmodules['bootmanager'] = __DIR__ . '/addons';
    $this->set('loadmodules', $loadmodules);

    // load config
    $bootManager = array_replace_recursive(
        $this->storage->getKey('yxorp/options', 'bootmanager', []), // ui
        $this->retrieve('config/bootmanager', []) // hard coded via config file
    );

    $bootOrder = [];

    if (YXORP_ADMIN && YXORP_API_REQUEST && isset($bootManager['api'])) {
        $bootOrder = $bootManager['api'];
    }

    if (YXORP_ADMIN && !YXORP_API_REQUEST && isset($bootManager['ui'])) {
        $bootOrder = $bootManager['ui'];
    }

    if (!YXORP_ADMIN && !YXORP_API_REQUEST && isset($bootManager['lib'])) {
        $bootOrder = $bootManager['lib'];
    }

    if (YXORP_CLI && isset($bootManager['cli'])) {
        $bootOrder = $bootManager['cli'];
    }

    // if (empty($bootOrder) && isset($bootManager['global'])) {
    // $bootOrder = $bootManager['global'];
    // }

    $moduleDirs = [
        'core' => YXORP_DIR . '/modules',
        'addons' => YXORP_DIR . '/addons',
    ];

    if ($customAddonDirs = $this->retrieve('loadmodules', null)) {
        $i = 1;
        foreach ($customAddonDirs as $dir) {
            $moduleDirs['custom' . $i++] = $dir;
        }
    }

    $modules = [];

    // get names and real paths
    foreach ($moduleDirs as $type => $dir) {

        if (!file_exists($dir)) continue;

        foreach (new DirectoryIterator($dir) as $module) {

            if ($module->isFile() || $module->isDot()) continue;
            if ($module->getBasename() == 'yxorP') continue; // will always load first

            $modules[$module->getBasename()] = [
                'path' => $module->getRealPath(),
                'type' => $type,
            ];

        }

        // add folders to autoload, if not present already
        if (!in_array($dir, (array)$this['autoload'])) {
            $this['autoload']->append($dir);
        }

    }

    // register modules
    foreach ($bootOrder as $module => $status) {

        if ($status == true && isset($modules[$module]['path'])) {
            $this->registerModule($module, $modules[$module]['path']);
        }

    }

}, 0);

// acl
$this('acl')->addResource('bootmanager', ['manage']);

// admin ui
if (YXORP_ADMIN && !YXORP_API_REQUEST) {
    include_once(__DIR__ . '/admin.php');
}
