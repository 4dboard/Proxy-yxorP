<?php

/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\http\actionWrapper;
use yxorP\inc\constants;
use yxorP\inc\generalHelper;

/* Extending the actionWrapper class. */

class dailyMotionPluginAction extends actionWrapper
{
    /* Defining the URL pattern that the plugin will be applied to. */
    protected string $url_pattern = 'dailymotion.com';

    /* A method that is called when the request is completed. */

    public static function completed($matches, $content): void
    {
        /* The `stripslashes` function removes backslashes from a string. */
        $video = stripslashes($matches[1]);
        /* Creating a video player with the video URL and the width and height of the player. */
        $player = generalHelper::vid_player($video, 1240, 478);
        /* Replacing the content of the element with the id `player` with the `$player` variable. */
        $content = Html::replace_inner("#player", $player, $content);

    }

    /* A method that is called when the request is completed. */

    public function onCompleted(): void
    {
        /* Getting the response object from the `constants` class. */
        $response = constants::get(TOKEN_RESPONSE);
        /* Getting the content of the response object. */
        $content = $response->getContent();
        /* Checking if the content of the response object contains a video URL. If it does, it calls the `completed`
        method. */
        if (preg_match('/"url":"([^"]+mp4[^"]*)"/m', $content, $matches)) self::completed($matches, $content);
        /* It removes all the scripts from the content. */
        $content = Html::remove_scripts($content);
        /* It sets the content of the response object to the `$content` variable. */
        $response->setContent($content);
    }
}