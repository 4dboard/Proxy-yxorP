<?php use yxorP\http\EventWrapper;

class CookiePlugin extends EventWrapper
{
    public const COOKIE_PREFIX = 'pc';

    public function onBeforeRequest(): void
    {
        if (preg_match_all('@pc_(.+?)__(.+?)=([^;]+)@', Constants::get('REQUEST')->headers->get('cookie'),
            $matches, PREG_SET_ORDER)) foreach ($matches as $match) {
            $_cookieDomain = str_replace("_", ".", $match[1]);
            $cookie = ["cookie_domain" => $_cookieDomain, "cookie_name" => $match[2], "cookie_value" => $match[3]];
            $host = parse_url(Constants::get('REQUEST')->getUri(), PHP_URL_HOST);
            if (str_contains($host, $cookie->cookie_domain)) $send_cookies[] = $cookie->cookie_name . '=' . $cookie->cookie_value;
        }
        if ($send_cookies) Constants::get('REQUEST')->headers->set('cookie', implode("; ", $send_cookies));
    }

    public function onHeadersReceived(): void
    {
        $response = Constants::get('RESPONSE');
        $set_cookie = $response->headers->get('set-cookie');
        if ($set_cookie) {
            $response->headers->remove('set-cookie');
            foreach ((array)$set_cookie as $line) {
                $cookie = $this->parse_cookie($line, Constants::get('REQUEST')->getUri());
                $cookie_name = sprintf("%s_%s__%s", self::COOKIE_PREFIX, str_replace('.', '_', $cookie['domain']), $cookie['name']);
                Constants::get('RESPONSE')->headers->set('set-cookie', $cookie_name . '=' . $cookie['value'], false);
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