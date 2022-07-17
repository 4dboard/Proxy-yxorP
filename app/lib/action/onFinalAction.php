<?php
/* Importing the wrapper class from the yxorP\app\lib\http namespace. */

use yxorP\app\constants;
use yxorP\app\lib\http\wrapper;

/* Extending the wrapper class, which is a class that allows you to hook into the request lifecycle. */

class onFinalAction extends wrapper
{
    /* A method that is called when the request is completed. */
    public function onFinal(): void
    {
        /* Checking if the cache is valid, and if it is not, it is setting the cache to the response content. Checking if the MIME type is not text/html, application/javascript, text/css, application/xml, or contains text
        or html, and if it is not, it is setting the cache to the response content. */
        //if (MIME !== VAR_TEXT_HTML && MIME !== 'application/javascript' && MIME !== 'text/css' && MIME !== 'application/xml' && !str_contains(MIME, VAR_TEXT) && !str_contains(MIME, VAR_HTML)) echo yP::get(VAR_RESPONSE)->getBody();
    }
}