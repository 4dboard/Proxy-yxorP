<?php

/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\wrapper;

/* Extending the wrapper class. */

class onBuildHeadersAction extends wrapper
{
    /* Setting the headers for the request. */
    public function onBuildHeaders(): void
    {
        /* It allows the request to be sent from any origin. */
        header("Access-Control-Allow-Origin: *");
        /* It allows the request to be sent from any origin. */
        header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
        /* It allows the request to be sent from any origin. */
        header('Access-Control-Allow-Credentials: true');
        /* It allows the request to be sent from any origin. */
        header('Access-Control-Allow-Headers: Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials');
    }
}