<?php use yxorP\Http\EventWrapper;

class HeaderRewritePlugin extends EventWrapper
{
    public function onBeforeRequest(): void
    {
        yxorP::get('REQUEST')->headers->set('accept-encoding', 'identity');
        yxorP::get('REQUEST')->headers->remove('referer');
    }

    public function onHeadersReceived(): void
    {
        $response = yxorP::get('RESPONSE');
        $request_url = yxorP::get('REQUEST')->getUri();
        if ($response->headers->has('location')) {
            $location = $response->headers->get('location');
            $response->headers->set('location', proxify_url($location, $request_url));
        }
        $code = $response->getStatusCode();
        $text = $response->getStatusText();
        if ($code >= 400 && $code <= 600) {
            yxorP::get('BUGSNAG')->notifyException(new RuntimeException("Error accessing resource: $code - $text"));
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