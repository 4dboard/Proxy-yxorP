<?php

namespace Content\Controller;

use App\Controller\app;
use ArrayObject;

class Content extends app
{

    public function index()
    {

        $this->helper('theme')->favicon('content:icon.svg');

        return $this->render('content:views/index.php');
    }

}
