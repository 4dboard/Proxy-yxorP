<?php
/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yxorP\Controller;

use yxorP\AuthController;

class Settings extends AuthController
{


    public function index()
    {
        return $this->render('yxorp:views/settings/index.php');
    }

    public function info()
    {

        if (!$this->module('yxorp')->hasaccess('yxorp', 'info')) {
            return $this->helper('admin')->denyRequest();
        }

        $info = [];

        $info['app'] = $this->app->helper('admin')->data['yxorp'];

        $info['system'] = php_uname();
        $info['phpversion'] = phpversion();
        $info['sapi_name'] = php_sapi_name();
        $info['extensions'] = get_loaded_extensions();
        $info['mailer'] = $this->app->retrieve('config/mailer', false);

        $info['jobs_queue'] = [
            'running' => $this->app->helper('jobs')->isRunnerActive(),
            'cntjobs' => $this->app->helper('jobs')->countJobs()
        ];

        $update = $this->getUptdateInfo();

        return $this->render('yxorp:views/settings/info.php', compact('info', 'update'));
    }

    public function edit($createconfig = false)
    {

        if (!$this->module('yxorp')->isSuperAdmin()) {
            return false;
        }

        if ($createconfig && !$this->app->path(YXORP_CONFIG_PATH)) {

            if ($this->app->helper('fs')->mkdir(dirname(YXORP_CONFIG_PATH))) {
                $this->app->helper('fs')->write(YXORP_CONFIG_PATH, "# yxorP settings\n");
            }
        }

        $configexists = $this->app->path(YXORP_CONFIG_PATH);

        return $this->render('yxorp:views/settings/edit.php', compact('configexists'));
    }

    public function update(): bool
    {

        if (!$this->module('yxorp')->isSuperAdmin()) {
            return false;
        }

        $update = $this->getUptdateInfo();

        $this->app->trigger('yxorp.update.before', [$update]);
        $ret = $this->app->helper('updater')->update($update['zipfile'], $update['target'], $update['options']);
        $this->app->trigger('yxorp.update.after', [$update]);

        return $ret;
    }

    protected function getUptdateInfo(): \ArrayObject
    {

        return new \ArrayObject(array_merge([
            'package.json' => 'https://raw.githubusercontent.com/agentejo/yxorp/master/package.json',
            'zipfile' => 'https://github.com/agentejo/yxorp/archive/master.zip',
            'target' => YXORP_DIR,
            'options' => ['zipRoot' => 'yxorp-master']
        ], $this->app->retrieve('config/update', [])));
    }
}
