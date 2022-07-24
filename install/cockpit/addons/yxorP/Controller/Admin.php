<?php

namespace yxorp\Controller;

use Cockpit\AuthController;

/**
 * @property $app
 */
class Admin extends AuthController
{

    public function index()
    {

        $config = $this->app->module('cockpit')->getConfig();

        return $this->render('yxorp:views/index.php', ['config' => $config]);

    }

    public function saveConfig()
    {

        $config = $this->param('config', 0);

        if ($config) {
            $this->app->storage->setKey('cockpit/options', 'yxorp', $config);
        }

        return $config;

    }

}
