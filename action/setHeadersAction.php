<?php

/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;

/* Extending the ActionWrapper class. */

class setHeadersAction extends ActionWrapper
{
    /* Setting the headers for the request. */
    public function buildHeaders(): void
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