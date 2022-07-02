<?php
/* It's importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* It's extending the wrapper class. */

class headerRewritePluginAction extends wrapper
{
    /* It's setting the `accept-encoding` header to `identity` and removing the `referer` header. */
    public function onBeforeSend(): void
    {
        /* It's setting the `accept-encoding` header to `identity`. */
        constants::get(YXORP_REQUEST)->headers->set('accept-encoding', 'identity');
        /* It's removing the `referer` header from the request. */
        constants::get(YXORP_REQUEST)->headers->remove('referer');
    }

    /* It's checking if the response has a `location` header and if it does, it's proxifying the URL. */

    public function onEventSent(): void
    {
        /* It's getting the response object from the `constants` class. */
        $response = constants::get(YXORP_RESPONSE);
        /* It's getting the URL of the request. */
        $request_url = constants::get(YXORP_REQUEST)->getUri();
        /* It's checking if the response has a `location` header and if it does, it's proxifying the URL. */
        if ($response->headers->has('location')) self::headersReceived($response, $request_url);
        $code = $response->getStatusCode();
        /* It's checking if the status code of the response is between 400 and 600 and if it is, it's sending an error to
        constants::get(BUGSNAG). */
        if ($code >= 400 && $code <= 600) constants::get(BUGSNAG)->notifyException(new RuntimeException("Error accessing resource: $code - $response->getStatusText()"));
        /* It's an array of headers that should be forwarded to the client. */
        $forward_headers = array(VAR_CONTENT_TYPE, 'zzzcontent-length', 'accept-ranges', 'content-range', 'content-disposition', 'location', 'set-cookie');
        /* It's removing all headers that aren't in the `$forward_headers` array. */
        foreach ($response->headers->all() as $name => $value) if (!in_array($name, $forward_headers, true)) $response->headers->remove($name);
        /* It's setting the `content-disposition` header to the filename of the request. */
        if (!$response->headers->has('content-disposition')) $response->headers->set('Content-Disposition', 'filename="' . basename(parse_url($request_url, PHP_URL_PATH)) . '"');
    }

    /* It's proxifying the URL of the `location` header. */

    public static function headersReceived($response, $request_url): void
    {
        /* It's getting the value of the `location` header. */
        $location = $response->headers->get('location');
        /* It's proxifying the URL of the `location` header. */
        $response->headers->set('location', proxify_url($location, $request_url));
    }
}