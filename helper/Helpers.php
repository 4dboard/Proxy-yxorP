<?php /* yxorP */


if (!function_exists('starts_with')) {

    function starts_with($haystack, $needles): bool
    {
        foreach ((array)$needles as $n) {
            if ($n !== '' && stripos($haystack, $n) === 0) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('str_before')) {

    function str_before($subject, $search)
    {
        return $search === '' ? $subject : explode($search, $subject)[0];
    }
}

function is_html($content_type): bool
{
    return clean_content_type($content_type) === 'text/html';
}

function in_arrayi($needle, $haystack): bool
{
    return in_array(strtolower($needle), array_map('strtolower', $haystack), true);
}

function re_match($pattern, $string): bool
{

    $quoted = preg_quote($pattern, '#');
    $translated = strtr($quoted, array(
        '\*' => '.*',
        '\?' => '.'
    ));

    return preg_match("#^" . $translated . "$#i", $string) === 1;
}

function array_merge_custom(): array
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

function str_rot_pass($str, $key, $decrypt = false): string
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

function app_url(): string
{
    return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
}

function render_string($str, $vars = array())
{
    preg_match_all('@{([a-z0-9_]+)}@s', $str, $matches, PREG_SET_ORDER);

    foreach ($matches as $match) {
        extract($vars, EXTR_PREFIX_ALL, "_var");
        $var_val = ${"_var_" . $match[1]};
        $str = str_replace($match[0], $var_val, $str);
    }

    return $str;
}


function add_http($url)
{

    if (!preg_match('#^https?://#i', $url)) {
        $url = 'https://' . $url;
    }

    return $url;
}

function time_ms(): float
{
    return round(microtime(true) * 1000);
}

function base64_url_encode($input): string
{
    return rtrim(strtr(base64_encode($input), '+/', '-_'), '=');
}

function base64_url_decode($input): bool|string
{
    return base64_decode(str_pad(strtr($input, '-_', '+/'), strlen($input) % 4, '='));
}

function proxify_url($url, $base_url = '')
{
    if (empty($url)) {
        return '';
    }

    $url = htmlspecialchars_decode($url);

    if ($base_url) {
        $base_url = add_http($base_url);
        $url = rel2abs($url, $base_url);
    }
    return str_replace($GLOBALS['TARGET_URL'], '', $url);
}

function rel2abs($rel, $base)
{
    if (str_starts_with($rel, "//")) {
        return "http:" . $rel;
    }

    if ($rel === "") {
        return "";
    }

    if (parse_url($rel, PHP_URL_SCHEME) !== '') {
        return $rel;
    }
    if ($rel[0] === '#' || $rel[0] === '?') {
        return $base . $rel;
    }
    extract(parse_url($base));
    @$path = preg_replace('#/[^/]*$#', '', $path);
    if ($rel[0] === '/') {
        $path = '';
    }
    $abs = "$host$path/$rel";
    $re = array(
        '#(/\.?/)#',
        '#/(?!\.\.)[^/]+/\.\./#'
    );
    for ($n = 1; $n > 0; $abs = preg_replace($re, '/', $abs, -1, $n)) {
    }

    return $scheme . '://' . $abs;
}

