<?php

namespace Content\Controller;

use yxorP\app\modules\app\controller\app;

class content extends app
{

    public function index()
    {

        $this->helper('theme')->favicon('content:icon.svg');

        return $this->render('content:views/index.php');
    }

}
