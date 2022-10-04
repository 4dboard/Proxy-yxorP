<?php

/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */

namespace yxorP\plugin;

use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;


/**
 * Extending the wrapper class.
 */
class proxifyPluginAction extends wrapper
{
    /**
     * It's a private variable that is used to store the base url of the request.
     */
    private string $base_url = CHAR_EMPTY_STRING;

    /**
     * A function that is called before the request is sent to the server.
     *
     */
    public function onBeforeSend(): void
    {
        /**
         * It's getting the request object from the constants class.
         */
        $request = store::handler(VAR_REQUEST);
        /**
         * It's checking if the request has a post parameter called `convertGET`.
         */
        if ($request->post->has('convertGET')) {
            /**
             * It's removing the `convertGET` post parameter.
             */
            $request->post->remove('convertGET');
            /**
             * It's replacing the `$request->get` array with the `$request->post` array.
             */
            $request->get->replace($request->post->all());
            /**
             * It's changing the request method to GET.
             */
            $request->post->clear();
            /**
             * It's preparing the request object.
             */
            $request->setMethod('GET');
            /**
             * It's preparing the request object for the next request.
             */
            $request->prepare();
        }
    }

    /**
     * It's a function that is called after the request is completed.
     *
     */
    public function onComplete(): void
    {
        /**
         * It's getting the base url of the request.
         */
        $this->base_url = store::handler(VAR_REQUEST)->getUri();
        /**
         * It's getting the response object from the constants class.
         */
        $response = store::handler(VAR_RESPONSE);
        /**
         * It's getting the response content.
         */
        $content_type = $this->clean_content_type($response->headers->get(VAR_CONTENT_TYPE));
        $str = $response->getContent();
        /**
         * It's an array that contains the content types that should not be proxified.
         */
        $no_proxify = array('text/javascript', 'application/javascript', 'application/javascript', 'text/plain');
        /**
         * It's checking if the content type is in the `$no_proxify` array. If it is, it's returning.
         * It's removing all the iframes from the response.
         */
        if (in_array($content_type, $no_proxify)) return;
        $str = preg_replace('@<iframe[^>]*>[^<]*</iframe>@is', CHAR_EMPTY_STRING, $str);
        /**
         * It's replacing the `url()` in the CSS with the proxified url.
         * It's replacing the `<head>` tag with the `<head>` tag.
         */
        $str = $this->proxify_head($str);
        /**
         * It's replacing the `src` and `href` attributes in the HTML with the proxified url.
         */
        $str = $this->proxify_css($str);
        $str = preg_replace_callback('@(?:src|href)\s*=\s*(["|\'])(.*?)\1@is', array($this, 'html_attr'), $str);
        /**
         * It's replacing the `srcset` attribute in the HTML with the proxified url.
         */
        $str = preg_replace_callback('/srcset=\"(.*?)\"/i', function ($matches) {
            /**
             * It's getting the `src` attribute from the `srcset` attribute.
             */
            /**
             * It's looping through the `$urls` array.
             */
            $src = $matches[1];
            /**
             * It's splitting the `srcset` attribute into an array.
             */
            $urls = preg_split('/\s*,\s*/', $src);
            /**
             * It's getting the url from the `srcset` attribute.
             */
            foreach ($urls as $part) {
                /**
                 * It's getting the position of the first space in the string.
                 */
                $pos = strpos($part, ' ');
                /**
                 * It's checking if the position of the first space in the string is not equal to `0`.
                 */
                if ($pos !== 0) {
                    /**
                     * It's getting the url from the `srcset` attribute.
                     */
                    $url = substr($part, 0, $pos);
                    /**
                     * It's replacing the `src` attribute with the proxified url.
                     */
                    $src = str_replace($url, helpers::proxify_url($url, $this->base_url), $src);
                }
            }
            /**
             * It's returning the `srcset` attribute with the proxified url.
             */
            return 'srcset="' . $src . '"';
        }, $str);
        $response->setContent(preg_replace_callback('@<form[^>]*action=(["\'])(.*?)\1[^>]*>@i', array($this, 'form_action'), $str));
    }

    /**
     * It's getting the content type of the response.
     *
     */
    public function clean_content_type($content_type): string
        /**
         * It's replacing the `url()` in the CSS with the proxified url.
         *
         * @param str The string to search through.
         *
         * @return array|string|null It's returning the `$str` variable.
         */
    {
        /**
         * It's removing the `;` and everything after it from the `$content_type` variable.
         */
        return trim(preg_replace('@;.*@', CHAR_EMPTY_STRING, $content_type));
    }

    /**
     * It's replacing the `<head>` tag with the `<head>` tag.
     */
    private function proxify_head($str): array|string|null
    {
        /**
         * It's replacing the `content` attribute in the `<meta>` tag with the proxified url.
         */
        $str = preg_replace_callback('/content=(["\'])\d+\s*;\s*url=(.*?)\1/is', array($this, 'meta_refresh'), $str);
        /**
         * It's replacing the `url()` in the CSS with the proxified url.
         * It's removing the `integrity` attribute from the `<head>` tag.
         */
        return preg_replace('/[^<(.*?)]integrity=([\'"])(.*?)([\'"])/is', CHAR_EMPTY_STRING, $str);
    }

    /**
     * It's replacing the `url()` in the CSS with the proxified url.
     */
    private function proxify_css($str): array|string|null
    {
        $str = preg_replace_callback('@[^a-z]url\s*\((?:\'|"|)(.*?)(?:\'|"|)\)@im', array($this, 'css_url'), $str);
        /**
         * It's replacing the `@import` in the CSS with the proxified url.
         */
        return preg_replace_callback('/@import ([\'"])(.*?)\1/i', array($this, 'css_import'), $str);
    }

    /**
     * It's replacing the `url()` in the CSS with the proxified url.
     */
    private function css_url($matches): array|string
    {
        /**
         * It's getting the url from the `$matches` array.
         */
        $url = trim($matches[1]);
        /**
         * It's checking if the url starts with `data:`. If it does, it's returning the `$matches[0]` variable.
         */
        if (helpers::starts_with($url, 'data:')) return $matches[0];
        /**
         * It's replacing the `url()` in the CSS with the proxified url.
         */
        return str_replace($matches[1], helpers::proxify_url($matches[1], $this->base_url), $matches[0]);
    }

    /**
     * It's replacing the `@import` in the CSS with the proxified url.
     */
    private function css_import($matches): array|string
    {
        /**
         * It's replacing the `url()` in the CSS with the proxified url.
         */
        return str_replace($matches[2], helpers::proxify_url($matches[2], $this->base_url), $matches[0]);
    }

    /**
     * It's replacing the `src` and `href` attributes in the HTML with the proxified url.
     */
    private function html_attr($matches): array|string
    {
        /**
         * It's getting the url from the `$matches` array.
         */
        $url = trim($matches[2]);
        /**
         * It's an array that contains the schemes that should not be proxified.
         */
        $schemes = array('data:', 'magnet:', 'about:', 'javascript:', 'mailto:', 'tel:', 'ios-app:', 'android-app:');
        /**
         * It's checking if the url starts with `data:`, `magnet:`, `about:`, `javascript:`, `mailto:`, `tel:`, `ios-app:`
         * or `android-app:`. If it does, it's returning the `$matches[0]` variable.
         */
        if (helpers::starts_with($url, $schemes)) return $matches[0];
        /**
         * It's replacing the `url()` in the CSS with the proxified url.
         */
        return str_replace($url, helpers::proxify_url($url, $this->base_url), $matches[0]);
    }

    /**
     * It's replacing the `action` attribute in the `<form>` tag with the proxified url.
     */
    private function form_action($matches): array|string
    {
        /**
         * It's checking if the `$matches[2]` variable is empty. If it is, it's setting the `$matches[2]` variable to the
         * `$this->base_url` variable.
         */
        if (!$matches[2]) $matches[2] = $this->base_url;
        /**
         * It's replacing the `action` attribute in the `<form>` tag with the proxified url.
         */
        $new_action = helpers::proxify_url($matches[2], $this->base_url);
        /**
         * It's checking if the `<form>` tag has a `method` attribute with the value `post`.
         */
        $form_post = preg_match('@method=(["\'])post\1@i', $matches[0]) === 1;
        /**
         * It's replacing the `action` attribute in the `<form>` tag with the proxified url.
         */
        $result = str_replace($matches[2], $new_action, $matches[0]);
        /**
         * It's checking if the `<form>` tag has a `method` attribute with the value `post`.
         */
        if (!$form_post) {
            /**
             * It's replacing the `<form` string with the `<form method="POST"` string.
             */
            $result = str_replace("<form", '<form method="POST"', $result);
            /**
             * It's adding a hidden input to the form.
             */
            $result .= '<input type="hidden" name="convertGET" value="1">';
        }
        /**
         * It's returning the `$result` variable.
         */
        return $result;
    }

    /**
     * It's replacing the `content` attribute in the `<meta>` tag with the proxified url.
     */
    private function meta_refresh($matches): array|string
    {
        /**
         * It's getting the url from the `$matches` array.
         */
        $url = $matches[2];

        /**
         * It's replacing the `url()` in the CSS with the proxified url.
         */
        return str_replace($url, helpers::proxify_url($url, $this->base_url), $matches[0]);
    }
}
