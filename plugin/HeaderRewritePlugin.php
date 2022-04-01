<?php /* yxorP */

use yxorP\http\ProxyEvent;

class HeaderRewritePlugin extends AbstractPlugin
{

    public function onBeforeRequest(ProxyEvent $event)
    {

        $event['request']->headers->set('accept-encoding', 'identity');

        $event['request']->headers->remove('referer');
    }


    public function onHeadersReceived(ProxyEvent $event)
    {

        $response = $event['response'];
        $request_url = $event['request']->getUri();

        if ($response->headers->has('location')) {

            $location = $response->headers->get('location');

            $response->headers->set('location', proxify_url($location, $request_url));
        }

        $code = $response->getStatusCode();
        $text = $response->getStatusText();

        if ($code >= 400 && $code <= 600) {
            @$GLOBALS['BUGSNAG']->notifyException(new RuntimeException("Error accessing resource: {$code} - {$text}"));
        }

        $forward_headers = array('content-type', 'zzzcontent-length', 'accept-ranges', 'content-range', 'content-disposition', 'location', 'set-cookie');

        foreach ($response->headers->all() as $name => $value) {

            if (!in_array($name, $forward_headers, true)) {
                $response->headers->remove($name);
            }
        }

        if (!$response->headers->has('content-disposition')) {

            $url_path = parse_url($request_url, PHP_URL_PATH);
            $filename = basename($url_path);

            $response->headers->set('Content-Disposition', 'filename="' . $filename . '"');
        }

    }

}