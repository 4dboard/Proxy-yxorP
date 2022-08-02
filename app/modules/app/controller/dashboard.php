<?php

namespace yxorP\app\modules\app\Controller;

class dashboard extends app
{

    public function index()
    {

        $this->helper('theme')->pageClass('dashboard-page');

        return $this->render('app:views/dashboard/index.php');
    }
}
