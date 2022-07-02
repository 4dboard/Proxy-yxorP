<?php namespace yxorP\inc;

use JetBrains\PhpStorm\Pure;
use yxorP\http\cache;
use function array_map;
use function array_merge;
use function file;

/* Importing the `array_map` function from the global namespace. */

/* Importing the `array_merge` function from the global namespace. */

/* Importing the `file` function from the global namespace. */

/* A class that contains a bunch of functions that are used throughout the application. */

class generalHelper
{

    public static function vid_player($url, $width = '100%', $height = '100%', $extension = false): string
    {
        $path = parse_url($url, PHP_URL_PATH);
        $html5 = false;
        if ($path) {
            $extension = @false ?: pathinfo($path, PATHINFO_EXTENSION);
            if ($extension === 'mp4' || $extension === 'webm' || $extension === 'ogg') {
                $html5 = true;
            }
        }
        $video_url = proxify_url($url);
        if ($html5) {
            $html = '<video width="' . $width . '" height="' . $height . '" controls autoplay>
			<source src="' . $video_url . '" type="video/' . $extension . '">
			Your browser does not support the video tag.
		</video>';
        } else {
            $video_url = rawurlencode($video_url);
            $html = '<object id="flowplayer" width="' . $width . '" height="' . $height . '" data="

		<param name="wmode" value="transparent" />
        <param name="flashvars" value=\'inc={"clip":"' . $video_url . '", "plugins": {"controls": {"autoHide" : false} }}\' />

		</object>';
        }
        return $html;
    }

    /* A function that is used to render a video player. */

    public static function starts_with($haystack, $needles): bool
    {
        foreach ((array)$needles as $n) {
            if ($n !== CHAR_EMPTY_STRING && stripos($haystack, $n) === 0) {
                return true;
            }
        }
        return false;
    }

    /* Checking if the `$haystack` starts with the `$needles`. */

    public static function str_before($subject, $search)
    {
        return $search === CHAR_EMPTY_STRING ? $subject : explode($search, $subject)[0];
    }

    /* Returning the part of the string before the `$search` string. */

    public static function is_html($content_type): bool
    {
        return clean_content_type($content_type) === 'text/html';
    }

    /* Checking if the `$content_type` is `text/html`. */

    public static function in_arrayi($needle, $haystack): bool
    {
        return in_array(strtolower($needle), array_map('strtolower', $haystack), true);
    }

    /* Checking if the `$needle` is in the `$haystack` array. */

    public static function re_match($pattern, $string): bool
    {
        $quoted = preg_quote($pattern, CHAR_HASH);
        $translated = strtr($quoted, array('\*' => '.*', '\?' => '.'));
        return preg_match("#^" . $translated . "$#i", $string) === 1;
    }

    /* It's checking if the `$pattern` matches the `$string`. */

    public static function array_merge_custom(): array
    {
        $arr = array();
        $args = func_get_args();
        foreach ($args as $arg) {
            foreach ((array)$arg as $key => $value) {
                $arr[$key] = $value;
            }
        }
        return $arr;
    }

    /* It's merging the arrays. */

    public static function str_rot_pass($str, $key, $decrypt = false): string
    {
        $key_len = strlen($key);
        $result = str_repeat(' ', strlen($str));
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            if ($decrypt) {
                $ascii = ord($str[$i]) - ord($key[$i % $key_len]);
            } else {
                $ascii = ord($str[$i]) + ord($key[$i % $key_len]);
            }
            $result[$i] = chr($ascii);
        }
        return $result;
    }

    /* It's encrypting the `$str` with the `$key`. */

    #[Pure] public static function app_url(): string
    {
        return VAR_HTTPS . constants::get(YXORP_SITE_HOST)->__toString() . constants::get(YXORP_SERVER)[YXORP_PHP_SELF];
    }

    /* It's returning the application URL. */

    public static function render_string($str, $vars = array())
    {
        preg_match_all(REG_THREE, $str, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            extract($vars, EXTR_PREFIX_ALL, "_var");
            $var_val = ${"_var_" . $match[1]};
            $str = str_replace($match[0], $var_val, $str);
        }
        return $str;
    }

    /* It's replacing the `{$var}` with the `$var` value. */

    public static function time_ms(): float
    {
        return round(microtime(true) * 1000);
    }

    /* It's returning the current time in milliseconds. */

    public static function base64_url_encode($input): string
    {
        return rtrim(strtr(base64_encode($input), VAR_PLUS_SLASH, VAR_DASH_LOWER), CHAR_EQUALS);
    }

    /* It's encoding the `$input` with the base64. */

    public static function base64_url_decode($input): bool|string
    {
        return base64_decode(str_pad(strtr($input, VAR_DASH_LOWER, VAR_PLUS_SLASH), strlen($input) % 4, CHAR_EQUALS));
    }

    /* It's decoding the `$input` with the base64. */

    public static function proxify_url($url, $base_url = CHAR_EMPTY_STRING)
    {
        if (empty($url)) {
            return CHAR_EMPTY_STRING;
        }
        $url = htmlspecialchars_decode($url);
        if ($base_url) {
            $base_url = self::add_http($base_url);
            $url = self::rel2abs($url, $base_url);
        }
        return str_replace(constants::get(YXORP_FETCH), CHAR_EMPTY_STRING, $url);
    }

    /* It's proxifying the `$url` with the `$base_url`. */

    public static function add_http($url)
    {
        if (!preg_match('#^https?:#i', $url)) {
            $url = VAR_HTTPS . $url;
        }
        return $url;
    }

    /* It's adding the `http` to the `$url` if it doesn't have it. */

    public static function rel2abs($rel, $base)
    {
        if (str_starts_with($rel, CHAR_EMPTY_STRING)) {
            return "http:" . $rel;
        }
        if ($rel === CHAR_EMPTY_STRING) {
            return CHAR_EMPTY_STRING;
        }
        if (parse_url($rel, PHP_URL_SCHEME) !== CHAR_EMPTY_STRING) {
            return $rel;
        }
        if ($rel[0] === CHAR_HASH || $rel[0] === '?') {
            return $base . $rel;
        }
        $_parse_url = parse_url($base);
        extract($_parse_url);
        $path = preg_replace('#/[^/]*$#', CHAR_EMPTY_STRING, $path);
        if ($rel[0] === CHAR_SLASH) {
            $path = CHAR_EMPTY_STRING;
        }
        $abs = "$host$path/$rel";
        $re = array('#(/\.?/)#', '#/(?!\.\.)[^/]+/\.\./#');
        for ($n = 1; $n > 0; $abs = preg_replace($re, CHAR_SLASH, $abs, -1, $n)) {
        }
        return $scheme . ':' . $abs;
    }

    /* It's converting the relative URL to the absolute URL. */

    public static function array_merge_ignore($arrays): array
    {
        $mergedArrays = [];
        $args = func_get_args();
        foreach ($args as $arg)
            if (!empty((array)$arg))
                if (empty($mergedArrays)) $mergedArrays = (array)$arg; else
                    foreach ((array)$arg as $item) $mergedArrays[] = $item;
        return $mergedArrays;
    }

    /* It's merging the arrays. */

    public static function CSV($filename = CHAR_EMPTY_STRING): array
    {
        $csvArray = array_map('str_getcsv', file($filename));
        return array_merge(...$csvArray);
    }

    /* It's reading the CSV file and returning the array. */

    public static function fileCheck($dir, $inc)
    {
        foreach (scandir($dir) as $x) if (strlen($x) > 3) {
            if (str_contains($x, 'interface')) continue;
            if (is_dir($_loc = $dir . CHAR_SLASH . $x)) return self::fileCheck($_loc, $inc);
            if (str_contains(constants::get(YXORP_PROXY_URL), $x)) return cache::cache()->set(file_get_contents($_loc));
            if ($inc) require_once($_loc);
        }
    }

    /* It's checking if the file exists. */

    public static function extractSubdomains($domain): ?string
    {
        if (str_contains($domain, CHAR_PERIOD)) {
            $subdomains = $domain;
            $domain = self::extractDomain($subdomains);
            return rtrim(strstr($subdomains, $domain, true), CHAR_PERIOD);
        } else  return null;
    }

    /* It's extracting the subdomains from the `$domain`. */

    public static function extractDomain($domain)
    {
        if (str_contains($domain, CHAR_PERIOD)) if (preg_match("/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z.]{2,6})$/i", $domain, $matches)) return $matches['domain']; else   return $domain; else  return $domain;
    }

}