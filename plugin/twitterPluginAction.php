<?php
/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\constants;

/* Extending the ActionWrapper class, which is a class that is used to create plugins. */

class twitterPluginAction extends ActionWrapper
{
    /* A regular expression that will be used to match the URL. */
    /* A method that is called when the request is completed. */
    protected string $url_pattern = 'twitter.com';

    public function onCompleted(): void
    {
        /* Getting the response object from the constants class. */
        $response = constants::get(TOKEN_RESPONSE);
        /* Getting the content of the response. */
        /* Removing all the scripts from the HTML. */
        $content = $response->getContent();
        /* Setting the content of the response to the content that we have modified. */
        $content = Html::remove_scripts($content);
        $response->setContent($content);
    }
}