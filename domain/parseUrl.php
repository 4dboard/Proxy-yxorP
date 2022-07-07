<?php namespace yxorP\domain;
/*
 * class Pdp\Uri\Url#6 (8) {
    private $scheme =>
    string(4) "http"
    private $host =>
    class Pdp\Uri\Url\Host#5 (3) {
        private $subdomain =>
        string(3) "www"
        private $registrableDomain =>
        string(15) "pref.okinawa.jp"
        private $publicSuffix =>
        string(10) "okinawa.jp"
    }
    private $port =>
    int(8080)
    private $user =>
    string(4) "user"
    private $pass =>
    string(4) "pass"
    private $path =>
    string(18) "/path/to/page.html"
    private $query =>
    string(12) "query=string"
    private $fragment =>
    string(8) "fragment"
}
 */

class parseUrl
{
    public static function parse($url, $component = -1)
    {
        $enc_url = preg_replace_callback('%([a-zA-Z][a-zA-Z0-9+\-.]*)?(:?//)?([^:/@?&=#\[\]]+)%u', static function ($matches) {
            $encoded = urlencode($matches[3]);
            return sprintf('%s%s%s', $matches[1], $matches[2], $encoded);
        }, $url);
        if ($enc_url === null) {
            return false;
        }
        $parts = parse_url($enc_url, $component);
        if ($parts === false) {
            return $parts;
        }
        if (is_array($parts)) {
            foreach ($parts as $name => &$value) {
                if ($name === 'scheme') {
                    continue;
                }
                $value = urldecode($value);
            }
        } else {
            $parts = urldecode($parts);
        }
        return $parts;
    }
}