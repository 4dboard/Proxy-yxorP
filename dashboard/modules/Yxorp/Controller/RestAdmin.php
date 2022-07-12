<?php
/**
 * This file is part of the Yxorp project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yxorp\Controller;

class RestAdmin extends \Yxorp\AuthController {

    public function __construct($app) {

        parent::__construct($app);

        if (!$this->module('yxorp')->hasaccess('yxorp', 'rest')) {
            return $this->helper('admin')->denyRequest();
        }
    }


    public function index() {

        $keys = $this->app->module('yxorp')->loadApiKeys();

        return $this->render('yxorp:views/restadmin/index.php', compact('keys'));
    }


    public function save() {
        
        $data = $this->param('data', false);

        if (!$data) {
            return false;
        }

        return ['success' => $this->app->module('yxorp')->saveApiKeys($data)];
    }

}
