<?php

namespace yxorP\app\modules\system\controller;

use yxorP\app\modules\app\controller\app;

/**
 * @property \yxorP\app\lib\http\App $app
 */
class settings extends app
{

    public function index()
    {
        return $this->render('system:views/settings.php');
    }

    public function info()
    {

        if (!$this->isAllowed('app/system/info')) {
            return $this->stop(401);
        }

        $addons = array_filter(array_keys($this->app['modules']->getArrayCopy()), fn($name) => !in_array($name, ['app', 'assets', 'content', 'system']));

        return $this->render('system:views/info.php', compact('addons'));
    }
}
