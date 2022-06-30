<?php
/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\http\actionWrapper;
use yxorP\inc\Constants;

/* Extending the actionWrapper class, which is a class that is used to create plugins. */

class twitterPluginAction extends actionWrapper
{
    /* A regular expression that will be used to match the URL. */
    /* A method that is called when the request is completed. */
    protected string $url_pattern = 'twitter.com';

    public function onCompleted(): void
    {
        /* Getting the response object from the constants class. */
        $response = Constants::get('RESPONSE');
        /* Getting the content of the response. */
        /* Removing all the scripts from the HTML. */
        $content = $response->getContent();
        /* Setting the content of the response to the content that we have modified. */
        $content = Html::remove_scripts($content);
        $response->setContent($content);
    }
}