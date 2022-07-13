<?php

namespace Bootmanager\Controller;

class Admin extends \yxorP\AuthController
{

    public function index()
    {
    }

    public function settings()
    {

        if (!$this->module('yxorp')->hasaccess('bootmanager', 'manage')) {
            return $this('admin')->denyRequest();
        }

        $config = $this->getConfig();

        $modules = $this->listModules();

        return $this->render('bootmanager:views/settings.php', compact('config', 'modules'));

    }

    public function getConfig()
    {

        if (!$this->module('yxorp')->hasaccess('bootmanager', 'manage')) {
            return $this('admin')->denyRequest();
        }

        $config = array_replace_recursive(
            [
                'ui' => null,
                'api' => null,
                'cli' => null,
                'lib' => null,
            ],
            $this->app->storage->getKey('yxorp/options', 'bootmanager', []),
            $this->app->retrieve('config/bootmanager', [])
        );

        return $config;

    }

    public function saveConfig($redirect = false)
    {

        if (!$this->module('yxorp')->hasaccess('bootmanager', 'manage')) {
            return $this('admin')->denyRequest();
        }

        $config = $this->param('config', false);

        if ($config) {
            $this->app->storage->setKey('yxorp/options', 'bootmanager', $config);
        }

        // redirect to get the current state of loaded addons and also
        // update nested addons in bundles
        if ($redirect) {
            $this->app->reroute('/bootmanager/getUpdatedValues');
        }

        return $config;

    }

    public function getUpdatedValues()
    {

        if (!$this->module('yxorp')->hasaccess('bootmanager', 'manage')) {
            return $this('admin')->denyRequest();
        }

        $config = $this->getConfig();

        $modules = $this->listModules();

        return compact('config', 'modules');

    }

    public function listModules()
    {

        if (!$this->module('yxorp')->hasaccess('bootmanager', 'manage')) {
            return $this('admin')->denyRequest();
        }

        $active = array_keys(get_object_vars($this->app['modules']));

        $moduleDirs = [
            'core' => YXORP_DIR . '/modules',
            'addons' => YXORP_DIR . '/addons',
        ];

        if ($customAddonDirs = $this->app->retrieve('loadmodules', null)) {
            $i = 1;
            foreach ($customAddonDirs as $key => $dir) {
                if (is_string($key)) $moduleDirs[$key] = $dir;
                else $moduleDirs['loadmodules-' . $i++] = $dir;
            }
        }

        $modules = [];
        $disabled = $this->app->retrieve('modules.disabled', []);

        foreach ($moduleDirs as $type => $dir) {

            if (!file_exists($dir)) continue;

            foreach (new \DirectoryIterator($dir) as $module) {

                if ($module->isFile() || $module->isDot()) continue;

                $label = $module->getBasename();
                $name = strtolower($label);

                if (isset($modules[$name])) {
                    // module exists already - possible reasons:
                    // * the same addon in different module folders
                    // * 2 modules in different folders share the same name
                    // * ...

                    $modules[$name]['danger'] = true;
                    continue;
                }

                $modules[$name] = [
                    'label' => $label,
                    'type' => $type,
                    // 'path' => $module->getRealPath(),
                    'active' => in_array($name, $active),
                    'forced' => ($type == 'core' && !in_array($label, $disabled))
                        || ($type == 'addons' && !in_array($label, $disabled))
                        || (strpos($type, 'loadmodules') === 0 && !in_array($label, $disabled))
                        || ($name == 'yxorp' || $name == 'bootmanager'),
                ];

            }

        }

        return $modules;

    }

    public function getReadme()
    {

        $path = $this->app->path('bootmanager:README.md');

        $content = file_get_contents($path);

        if ($this->app->req_is('ajax')) {
            return $this->app->module('yxorp')->markdown($content);
        }

        $content = $this->app->module('yxorp')->markdown($content);

        return $this->render('bootmanager:views/readme.php', compact('content'));

    }

}
