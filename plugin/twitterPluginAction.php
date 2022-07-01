<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\http\wrapper;
use yxorP\inc\constants;

/* Extending the wrapper class, which is a class that is used to create plugins. */

class twitterPluginAction extends wrapper
{
    /* A regular expression that will be used to match the URL. */
    /* A method that is called when the request is completed. */
    protected string $url_pattern = 'twitter.com';

    public function onCompleted(): void
    {
        /* Getting the response object from the constants class. */
        $response = constants::get(YXORP_RESPONSE);
        /* Getting the content of the response. */
        /* Removing all the scripts from the HTML. */
        $content = $response->getContent();
        /* Setting the content of the response to the content that we have modified. */
        $content = Html::remove_scripts($content);
        $response->setContent($content);
    }
}