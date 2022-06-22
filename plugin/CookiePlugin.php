<?php use yxorP\Http\EventWrapper;
use yxorP\Http\ProxyEvent;

class CookiePlugin extends EventWrapper
{
    public const COOKIE_PREFIX = 'pc';

    public function onBeforeRequest(ProxyEvent $event)
    {
        $request = $event['request'];
        $http_cookie = $request->headers->get("cookie");
        $request->headers->remove("cookie");
        $send_cookies = array();
        if (preg_match_all('@pc_(.+?)__(.+?)=([^;]+)@', $http_cookie, $matches, PREG_SET_ORDER)) {
            foreach ($matches as $match) {
                $cookie_name = $match[2];
                $cookie_value = $match[3];
                $cookie_domain = str_replace("_", ".", $match[1]);
                $host = parse_url($request->getUri(), PHP_URL_HOST);
                if (str_contains($host, $cookie_domain)) {
                    $send_cookies[] = $cookie_name . '=' . $cookie_value;
                }
            }
        }
        if ($send_cookies) {
            $request->headers->set('cookie', implode("; ", $send_cookies));
        }
    }

    public function onHeadersReceived(ProxyEvent $event)
    {
        $request = $event['request'];
        $response = $event['response'];
        $set_cookie = $response->headers->get('set-cookie');
        if ($set_cookie) {
            $response->headers->remove('set-cookie');
            foreach ((array)$set_cookie as $line) {
                $cookie = $this->parse_cookie($line, $request->getUri());
                $cookie_name = sprintf("%s_%s__%s", self::COOKIE_PREFIX, str_replace('.', '_', $cookie['domain']), $cookie['name']);
                $event['response']->headers->set('set-cookie', $cookie_name . '=' . $cookie['value'], false);
            }
        }
    }

    private function parse_cookie($line, $url): array
    {
        $host = parse_url($url, PHP_URL_HOST);
        $data = array('name' => '', 'value' => '', 'domain' => $host, 'path' => '/', 'expires' => 0, 'secure' => false, 'httpOnly' => true);
        $line = preg_replace('/^Set-Cookie2?: /i', '', trim($line));
        $pairs = array_filter(array_map('trim', explode(';', $line)));
        foreach ($pairs as $index => $comp) {
            $parts = explode('=', $comp, 2);
            $key = trim($parts[0]);
            if (count($parts) === 1) {
                $data[$key] = true;
            } else {
                $value = trim($parts[1]);
                if ($index === 0) {
                    $data['name'] = $key;
                    $data['value'] = $value;
                } else {
                    $data[$key] = $value;
                }
            }
        }
        return $data;
    }
}