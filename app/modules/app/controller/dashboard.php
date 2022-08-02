<?php

namespace yxorP\app\modules\app\controller;

class dashboard extends app
{

    public function index()
    {

        $this->helper('theme')->pageClass('dashboard-page');

        return $this->render('app:views/dashboard/index.php');
    }
}
