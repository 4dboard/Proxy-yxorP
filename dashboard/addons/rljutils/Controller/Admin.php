<?php

namespace rljUtils\Controller;

use yxorP\AuthController;

/**
 * @property \Lime\App $app
 * @property \Lime\App $app
 */
class Admin extends AuthController
{

    public function index()
    {

        $config = $this->app->module('rljutils')->getConfig();

        return $this->render('rljutils:views/index.php', ['config' => $config]);

    }

    public function saveConfig()
    {

        $config = $this->param('config', false);

        if ($config) {
            $this->app->storage->setKey('yxorp/options', 'rljutils', $config);
        }

        return $config;

    }

}
