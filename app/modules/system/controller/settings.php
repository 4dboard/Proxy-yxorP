<?php

namespace yxorp\app\modules\system\Controller;

use App\Controller\app;

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
