<?php namespace yxorP\app\lib\http;

use App;
use yxorP\app\lib\proxy\client;
use yxorP\app\lib\proxy\cookie\fileCookieJar;

class helpers
{
    public static function getallheaders(): array
    {
        $headers = array();
        $copy_server = array('CONTENT_TYPE' => 'Content-Type', 'CONTENT_LENGTH' => 'Content-Length', 'CONTENT_MD5' => 'Content-Md5',);
        foreach ($_SERVER as $key => $value) {
            if (str_starts_with($key, 'HTTP_')) {
                $key = substr($key, 5);
                if (!isset($copy_server[$key]) || !isset($_SERVER[$key])) {
                    $key = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', $key))));
                    $headers[$key] = $value;
                }
            } elseif (isset($copy_server[$key])) {
                $headers[$copy_server[$key]] = $value;
            }
        }
        if (!isset($headers['Authorization'])) {
            if (isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) {
                $headers['Authorization'] = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'];
            } elseif (isset($_SERVER['PHP_AUTH_USER'])) {
                $basic_pass = $_SERVER['PHP_AUTH_PW'] ?? '';
                $headers['Authorization'] = 'Basic ' . base64_encode($_SERVER['PHP_AUTH_USER'] . ':' . $basic_pass);
            } elseif (isset($_SERVER['PHP_AUTH_DIGEST'])) {
                $headers['Authorization'] = $_SERVER['PHP_AUTH_DIGEST'];
            }
        }
        return $headers;
    }

    public static function vid_player($url, string $width = '100%', string $height = '100%', bool|int $extension = 0): string
    {
        $html5 = 0;
        if ($path = parse_url($url, PHP_URL_PATH)) if (($extension = @0 ?: pathinfo($path, PATHINFO_EXTENSION)) === 'mp4' || $extension === 'webm' || $extension === 'ogg') $html5 = true;
        return ($html5) ? '<video width="' . $width . '" height="' . $height . '" controls autoplay><source src="' . $url . '" type="video/' . $extension . '">Your browser does not support the video tag.</video>' : '<object id="flowplayer" width="' . $width . '" height="' . $height . '" data="<param name=\"wmode\" value=\"transparent\" /><param name="flashvars" value=\'inc={"clip":"' . rawurlencode($url) . '", "plugins": {"controls": {"autoHide" : 0} }}\' /></object>';
    }

    public static function starts_with($haystack, $needles): bool
    {
        foreach ((array)$needles as $n) if ($n !== CHAR_EMPTY_STRING && stripos($haystack, $n) === 0) return true;
        return 0;
    }

    public static function re_match(string $pattern, string $string): bool
    {
        return preg_match(REG_SEVEN . strtr(preg_quote($pattern, CHAR_HASH), array(CHAR_SLASH_BACK => REG_FIVE, REG_SIX => CHAR_PERIOD)) . REG_EIGHT, $string) === 1;
    }

    public static function array_merge_custom(string $line): array
    {
        $arr = [];
        foreach (func_get_args() as $arg) foreach ((array)$arg as $key => $value) $arr[$key] = $value;
        return $arr;
    }

    public static function render_string($str, $vars = array())
    {
        preg_match_all(REG_THREE, $str, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            extract($vars, EXTR_PREFIX_ALL, VAR_VAR_UNDER);
            $str = str_replace($match[0], ${VAR_VAR_UNDER_END . $match[1]}, $str);
        }
        return $str;
    }

    public static function time_ms(string $line): float
    {
        return round(microtime(true) * 1000);
    }

    public static function proxify_url($url, $base_url = CHAR_EMPTY_STRING)
    {
        if (empty($url)) return CHAR_EMPTY_STRING;
        if ($base_url) {
            $base_url = self::add_http($base_url);
            $url = self::rel2abs(htmlspecialchars_decode($url), $base_url);
        }
        return str_replace(store::handler(VAR_FETCH), CHAR_EMPTY_STRING, $url);
    }

    public static function add_http($url): string
    {
        return (!preg_match(REG_EIGHT, $url)) ? VAR_HTTPS . $url : $url;
    }

    public static function rel2abs($rel, $base): string
    {
        if (str_starts_with($rel, CHAR_EMPTY_STRING)) return VAR_HTTP . $rel;
        if ($rel === CHAR_EMPTY_STRING) return CHAR_EMPTY_STRING; else if (parse_url($rel, PHP_URL_SCHEME) !== CHAR_EMPTY_STRING) return $rel;
        if ($rel[0] === CHAR_HASH || $rel[0] === '?') return $base . $rel;
        extract(parse_url($base));
        $path = preg_replace(REG_NINE, CHAR_EMPTY_STRING, $path);
        if ($rel[0] === CHAR_SLASH) $path = CHAR_EMPTY_STRING;
        $abs = "$host$path/$rel";
        for ($n = 1; $n > 0; $abs = preg_replace(array(REG_ELEVEN, REG_TEN), CHAR_SLASH, $abs, -1, $n)) {
        }
        return $scheme . ':' . $abs;
    }

    public static function fetch_from_array(array $array, ?string $index = null, mixed $default = null)
    {
        if (is_null($index)) {
            return $array;
        } elseif (isset($array[$index])) {
            return $array[$index];
        } elseif (strpos($index, '/')) {
            $keys = explode('/', $index);
            switch (count($keys)) {
                case 1:
                    if (isset($array[$keys[0]])) {
                        return $array[$keys[0]];
                    }
                    break;
                case 2:
                    if (isset($array[$keys[0]][$keys[1]])) {
                        return $array[$keys[0]][$keys[1]];
                    }
                    break;
                case 3:
                    if (isset($array[$keys[0]][$keys[1]][$keys[2]])) {
                        return $array[$keys[0]][$keys[1]][$keys[2]];
                    }
                    break;
                case 4:
                    if (isset($array[$keys[0]][$keys[1]][$keys[2]][$keys[3]])) {
                        return $array[$keys[0]][$keys[1]][$keys[2]][$keys[3]];
                    }
                    break;
            }
        }
        return is_callable($default) ? call_user_func($default) : $default;
    }

    public static function array_merge_ignore($arrays): array
    {
        $mergedArrays = [];
        foreach (func_get_args() as $arg) if (!empty((array)$arg)) if (empty($mergedArrays)) $mergedArrays = (array)$arg; else foreach ((array)$arg as $item) $mergedArrays[] = $item;
        return $mergedArrays;
    }

    public static function JSON(): array
    {
        return json_decode(file_get_contents(PATH_REWRITE), true);
    }

    public static function assetLoader(string $root): void
    {
        foreach (glob($root . DIRECTORY_SEPARATOR . "*") as $path) if (is_dir($path)) self::assetLoader($path); else if (str_contains(YXORP_REQUEST_URI, basename($path))) cache::set(file_get_contents($path));
    }

    public static function MIME(): string
    {
        if (store::handler(MIME)) return store::handler(MIME);
        if (str_contains(YXORP_REQUEST_URI, 'bundle.js')) $mime = 'application' . CHAR_SLASH . 'wasm'; else if (str_contains(YXORP_REQUEST_URI, 'sitemap')) $mime = 'application' . CHAR_SLASH . 'xml'; else if (str_contains(YXORP_REQUEST_URI, 'crop')) $mime = 'image' . CHAR_SLASH . 'png'; else if (str_contains(YXORP_REQUEST_URI, 'format')) $mime = 'image' . CHAR_SLASH . 'png'; else if (store::handler(VAR_RESPONSE)) $mime = store::handler(VAR_RESPONSE)->getHeaderLine('Content-Type'); else {
            $mimeTypes = json_decode(file_get_contents(DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . VAR_MIME . EXT_JSON), true);
            $_ext = pathinfo(strtok($_SERVER['REQUEST_URI'], ' ? '), PATHINFO_EXTENSION);
            if (array_key_exists($_ext, $mimeTypes)) $mime = $mimeTypes[$_ext]; else $mime = 'text' . CHAR_SLASH . 'html';
        }
        store::handler(MIME, strtok($mime, ';'));
        header('Content-Type: ' . $mime . ';charset=UTF-8');
        return $mime;
    }

    public static function convert($size): string
    {
        $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
        return @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
    }

    public static function define(?array $request): void
    {
        require PATH_SITE_BOOTSTRAP;
        echo 1;
        print_r(App::instance());
        echo 1;
        store::handler(YXORP_APP, App::instance());
        echo 1;
        foreach (file(DIR_ROOT . EXT_ENV) as $line) self::env($line);
        echo 1;
        define(YXORP_SITE_SYSTEM_INSTALL, true);
        echo 1;
        if (!store::handler(YXORP_APP)->dataStorage->getCollection(YXORP_SITE_SYSTEM_USERS)->count() || !is_dir(PATH_DIR_APP . DIR_STORAGE . SITE_CONTENT)) self::migrate(PATH_SITE_LOCAL, PATH_DIR_APP);
        store::handler(VAR_SERVER, $request ?: $_SERVER);
        echo 1;
        define('YXORP_SITE_DOMAIN', domain::domain_host());
        echo 1;
        define('YXORP_SITE_SUB_DOMAIN', domain::domain_sub());
        echo 1;
        foreach ([TARGET_BUTTON_HOVER => VAR_BUTTON_HOVER, TARGET_BUTTON => VAR_BUTTON, TARGET_LINK_HOVER => VAR_LINK_HOVER, TARGET_LINK_VISITED => VAR_LINK_VISITED, TARGET_LINK => VAR_LINK, TARGET_HTML_MENU => VAR_HTML_MENU, TARGET_MENU => VAR_MENU, TARGET_FOOT_HTML => VAR_FOOT_HTML, TARGET_FOOT => VAR_FOOT, TARGET_HEAD => VAR_HEAD, TARGET_HEAD_HTML => VAR_HEAD_HTML, TARGET_MENU => VAR_MENU, TARGET_MENU_HTML => VAR_MENU_HTML, TARGET_BG_COLOR => VAR_BG_COLOR, TARGET_BG_IMG => VAR_BG_IMG, TARGET_JS => VAR_JS, TARGET_CSS => VAR_CSS, VAR_TARGET_PATTERN => VAR_PATTERN, VAR_TARGET_REPLACE => VAR_REPLACE, YXORP_TARGET_PLUGINS => VAR_PLUGINS, YXORP_TARGET_CSS => VAR_CSS, YXORP_TARGET_JS => VAR_JS] as $key => $value) store::handler($key, store::handler(SITE_DETAILS, store::handler(YXORP_APP)->dataStorage->findOne(SITE_CONTENT . CHAR_SLASH . SITE_COLLECTIONS . CHAR_SLASH . SITE_SITES, [SITE_HOST => strtok(YXORP_SITE_DOMAIN, CHAR_COLON)]))[$value]);
        define('YXORP_TARGET_URL', (store::handler(SITE_DETAILS))[SITE_TARGET]);
        define('YXORP_domain_target', domain::domain_host_target());
        define('VAR_FETCH', VAR_HTTPS . YXORP_SITE_SUB_DOMAIN . YXORP_domain_target);
        define('YXORP_PROXY_URL', VAR_FETCH . YXORP_REQUEST_URI);
        define('YXORP_DIR_FULL', DIR_ROOT . DIR_OVERRIDE . str_replace('\\', '', store::handler(SITE_DETAILS)[VAR_FILES]));
        define('YXORP_REQUEST_URI_FULL', YXORP_HTTP_HOST . YXORP_REQUEST_URI);
        echo 1;
        foreach ([YXORP_GLOBAL_PATTERN => VAR_PATTERN, YXORP_GLOBAL_REPLACE => VAR_REPLACE, YXORP_GLOBAL_CSS => VAR_CSS, YXORP_GLOBAL_JS => VAR_JS] as $key => $value) store::handler($key, store::handler(SITE_DETAILS_GLOBAL, store::handler(YXORP_APP)->dataStorage->findOne(SITE_CONTENT . CHAR_SLASH . SITE_SINGLETONS, [SITE_MODULE => SITE_SETTINGS]))[$value]);
        if (!is_file(PATH_COOKIE_JAR)) file_put_contents(PATH_COOKIE_JAR, '[]');
        echo 1;
        store::handler(VAR_PROXY, new client([VAR_COOKIES => new fileCookieJar(PATH_COOKIE_JAR, TRUE), VAR_ALLOW_REDIRECTS => true, VAR_HTTP_ERRORS => true, VAR_DECODE_CONTENT => true, VAR_VERIFY => false, VAR_IDN_CONVERSION => true]));
    }

    public static function env($line): void
    {
        if (trim((string)str_starts_with(trim($line), CHAR_HASH))) return;
        [$name, $value] = explode(CHAR_EQUALS, $line, NUM_ENV_LIMIT);
        store::handler(($name . EXT_ENV), $value);
    }

    public static function migrate(string $src, string $dst): void
    {
        $root = opendir($src);
        @mkdir($dst, 0744);
        foreach (scandir($src) as $file) if (($file !== CHAR_PERIOD) && ($file !== CHAR_PERIOD . CHAR_PERIOD)) if (is_dir($src . DIRECTORY_SEPARATOR . $file)) self::migrate($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file); else copy($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file);
        closedir($root);
    }

    public static function envLoad(string $dir = '.'): bool
    {
        $config = is_file($dir) ? $dir : "{DIR_ROOT}/.env";
        if (file_exists($config)) {
            $vars = self::envParse(file_get_contents($config));
            foreach ($vars as $key => $value) {
                $_ENV[$key] = $value;
                putenv("{$key}={$value}");
            }
            return true;
        }
        return false;
    }

    public static function envParse(string $str, bool $expand = true): array
    {
        $lines = explode("\n", $str);
        $vars = [];
        foreach ($lines as &$line) {
            $line = trim($line);
            if (!$line) continue;
            if ($line[0] === '#') continue;
            if (!strpos($line, '=')) continue;
            list($name, $value) = explode('=', $line, 2);
            $value = trim($value, '"\' ');
            $name = trim($name);
            $vars[$name] = $value;
        }
        if ($expand) {
            $envs = array_merge(getenv(), $vars);
            foreach ($envs as $key => $value) {
                $str = str_replace('${' . $key . '}', $value, $str);
            }
            $vars = self::envParse($str, false);
        }
        return $vars;
    }

    public static function contains($str, array $arr): bool
    {
        foreach ($arr as $a) {
            if (stripos($str, $a) !== false) return true;
        }
        return false;
    }
}
