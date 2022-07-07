<?php

namespace yxorP\parse {

    use function is_array;
    use function parse_url;
    use function preg_replace_callback;
    use function sprintf;
    use function urldecode;
    use function urlencode;

    class pdpParse
    {
        function pdp_parse_url($url, $component = -1)
        {
            $enc_url = preg_replace_callback(
                '%([a-zA-Z][a-zA-Z0-9+\-.]*)?(:?//)?([^:/@?&=#\[\]]+)%u',
                static function ($matches) {
                    $encoded = urlencode($matches[3]);

                    return sprintf('%s%s%s', $matches[1], $matches[2], $encoded);
                },
                $url
            );

            if ($enc_url === null) {
                return false;
            }

            /** @var array|false|string $parts */
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
}
