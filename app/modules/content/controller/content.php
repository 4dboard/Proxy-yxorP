<?php

namespace Content\Controller;

use App\Controller\app;

class content extends app
{

    public function index()
    {

        $this->helper('theme')->favicon('content:icon.svg');

        return $this->render('content:views/index.php');
    }

}
