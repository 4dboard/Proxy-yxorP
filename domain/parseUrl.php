<?php namespace yxorP\domain;

class parseUrl
{
    public static function url($url, $component = -1)
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