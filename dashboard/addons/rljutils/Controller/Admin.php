<?php

namespace rljUtils\Controller;

class Admin extends \yxorP\AuthController
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
