<?php
/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */

namespace yxorP\plugin;

use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

/**
 * Extending the wrapper class.
 */
class youtubePluginAction extends wrapper
{
    /**
     * A regex pattern that will be used to match the url of the request.
     */
    protected ?string $url_pattern = 'youtube.com';

    /**
     * Setting the cookie and user-agent of the request.
     *
     */
    public function onBeforeSend(): void
    {
        /**
         * Setting the cookie of the request.
         */
        store::handler(VAR_REQUEST)->headers->set('Cookie', 'PREF=f6=8');
        /**
         * Setting the user-agent of the request.
         */
        store::handler(VAR_REQUEST)->headers->set('User-Agent', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http:www.google.com/bot.html)');
    }

    /**
     * A function that is called when the request is completed.
     *
     */
    public function onComplete(): void
    {
        /**
         * Getting the response object from the `constants` class.
         */
        $response = store::handler(VAR_RESPONSE);
        /**
         * Getting the url of the request.
         */
        $url = store::handler(VAR_REQUEST)->getUrl();
        /**
         * Getting the content of the response.
         */
        $output = $response->getContent();
        /**
         * Checking if the url is not a watch page, results page, feed page, channel page, oembed page or css page.
         */
        if (!preg_match('/(watch|results|feed|channel|ombed|css)/i', $url)) {
            /**
             * Redirecting the request to the trending page.
             */
            /**
             * Returning the function.
             */
            $response->headers->set('location', "https:www.youtube.com/feed/trending", $url);
            return;
        }
        /**
         * Replacing the `data-thumb` attribute with the `src` attribute.
         */
        $output = preg_replace_callback('/<img[^>]+data-thumb="(.*?)"[^>]*/is', static function ($matches) {
            /**
             * Proxifying the url of the image.
             */
            $has_src = str_contains($matches[0], 'src="');
            $thumb_url = $matches[1];
            /**
             * Checking if the `src` attribute is present in the `<img>` tag.
             */
            if (/**
             * Removing the `data-thumb` attribute from the `<img>` tag.
             */
            $has_src) {
                /**
                 * Replacing the `src` attribute with the proxified url of the image.
                 */
                $matches[0] = str_replace('data-thumb', 'remove-this', $matches[0]);
                return preg_replace('/src="(.*?)"/i', 'src_replaced="1" src="' . $thumb_url . '"', $matches[0]);
            }
            /**
             * Replacing the `data-thumb` attribute with the `src` attribute.
             */
            return preg_replace('/data-thumb="(.*?)"/i', 'src_added="1" src="' . $thumb_url . '"', $matches[0]);
            /**
             * Removing the header of the page.
             */
            /**
             * Creating a new instance of the YouTubeDownloader class.
             */
        }, preg_replace('@masthead-positioner">@', 'masthead-positioner" style="position:static;">', $output, 1));

        /**
         * Setting the content of the response to the `$output` variable.
         * Removing all the `<script>` tags from the page.
         */
        $response->setContent($output);
    }
}
