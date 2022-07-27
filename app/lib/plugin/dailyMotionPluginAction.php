<?php

/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */

namespace yxorP\app\plugin;

use yorxP\debug\Utils\Html;
use yxorP\app\constants;
use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\wrapper;
use const VAR_RESPONSE;

/**
 * Extending the wrapper class.
 */
class dailyMotionPluginAction extends wrapper
{
    /**
     * Defining the URL pattern that the plugin will be applied to.
     */
    protected ?string $url_pattern = 'dailymotion.com';

    /**
     * A method that is called when the request is completed.
     *
     */
    public function onComplete(): void
    {
        /**
         * Getting the response object from the `constants` class.
         */
        $response = store::handler(VAR_RESPONSE);
        /**
         * Getting the content of the response object.
         */
        $content = $response->getContent();
        /**
         * Checking if the content of the response object contains a video URL. If it does, it calls the `completed`
         * method.
         */
        if (preg_match('/"url":"([^"]+mp4[^"]*)"/m', $content, $matches)) self::completed($matches, $content);
        /**
         * It removes all the scripts from the content.
         */
        $content = \Html::remove_scripts($content);
        /**
         * It sets the content of the response object to the `$content` variable.
         */
        $response->setContent($content);
    }

    /**
     * A method that is called when the request is completed.
     *
     */
    public static function completed($matches, $content): void
    {
        /**
         * The `stripslashes` function removes backslashes from a string.
         */
        $video = stripslashes($matches[1]);
        /**
         * Creating a video player with the video URL and the width and height of the player.
         */
        $player = helpers::vid_player($video, 1240, 478);
        /**
         * Replacing the content of the element with the id `player` with the `$player` variable.
         */
        $content = \Html::replace_inner("#player", $player, $content);

    }
}