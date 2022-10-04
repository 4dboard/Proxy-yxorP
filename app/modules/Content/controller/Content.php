<?php

namespace Content\Controller;

use App\Controller\App;

class Content extends App
{

    public function index()
    {

        $this->helper('theme')->favicon('content:icon.svg');

        return $this->render('content:views/index.php');
    }

}
