<?php namespace yxorP\lib\http;

use App;
use Cockpit;
use yxorP;
use yxorP\lib\proxy\client;


/**
 * Importing the `array_map` function from the global namespace. Importing the `array_merge` function from the global namespace.  Importing the `file` function from the global namespace. A class that contains a bunch of functions that are used throughout the application.
 */
class helpers
{


    /**
     * @param $url
     * @param string $width
     * @param string $height
     * @param bool|int $extension
     * @return string A function that takes in a url, width, height, and extension and returns a string.
     * A function that takes in a url, width, height, and extension and returns a string.
     *
     */
    public static function vid_player($url, string $width = '100%', string $height = '100%', bool|int $extension = 0): string
    {
        $html5 = 0;

        /**
         * Checking if the path is set.
         */
        if ($path = parse_url($url, PHP_URL_PATH)) if (($extension = @0 ?: pathinfo($path, PATHINFO_EXTENSION)) === 'mp4' || $extension === 'webm' || $extension === 'ogg') $html5 = true;

        /**
         * Returning the HTML code for the video player.
         */
        return ($html5) ? '<video width="' . $width . '" height="' . $height . '" controls autoplay><source src="' . $url . '" type="video/' . $extension . '">Your browser does not support the video tag.</video>' : '<object id="flowplayer" width="' . $width . '" height="' . $height . '" data="<param name=\"wmode\" value=\"transparent\" /><param name="flashvars" value=\'inc={"clip":"' . rawurlencode($url) . '", "plugins": {"controls": {"autoHide" : 0} }}\' /></object>';
    }

    /**
     * @param $haystack
     * @param $needles
     * @return bool A function that is used to render a video player.
     * A function that is used to render a video player.
     *
     */
    public static function starts_with($haystack, $needles): bool
    {
        /**
         * Checking if the string starts with any of the needles.
         */
        foreach ((array)$needles as $n) if ($n !== CHAR_EMPTY_STRING && stripos($haystack, $n) === 0) return true;
        return 0;
    }


    /**
     * @param string $pattern
     * @param string $string
     * @return bool Checking if the `$needle` is in the `$haystack` array.
     * Checking if the `$needle` is in the `$haystack` array.
     *
     */
    public static function re_match(string $pattern, string $string): bool
    {
        /**
         * Checking if the string contains the translated string.
         */
        return preg_match(REG_SEVEN . strtr(preg_quote($pattern, CHAR_HASH), array(CHAR_SLASH_BACK => REG_FIVE, REG_SIX => CHAR_PERIOD)) . REG_EIGHT, $string) === 1;
    }

    /**
     * @param string $line
     * @return array
     * It's checking if the `$pattern` matches the `$string`.
     *
     */
    public static function array_merge_custom(string $line): array
    {
        /**
         * Creating an empty array.
         */
        $arr = [];

        /**
         * Getting the arguments passed to the function.
         */
        foreach (func_get_args() as $arg) foreach ((array)$arg as $key => $value) $arr[$key] = $value;

        return $arr;
    }

    /**
     * @return void
     * It's returning the application URL.
     *
     */
    public static function render_string($str, $vars = array())
    {
        preg_match_all(REG_THREE, $str, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            /**
             * Extracting the variables from the array $vars and prefixing them with VAR_ */
            extract($vars, EXTR_PREFIX_ALL, VAR_VAR_UNDER);

            /**
             * Assigning the value of the variable whose name is stored in the variable VAR_VAR_UNDER_END to the variable
             * $var_val.  Replacing the variable with the value of the variable.
             */
            $str = str_replace($match[0], ${VAR_VAR_UNDER_END . $match[1]}, $str);
        }
        return $str;
    }

    /**
     * @param string $line
     * @return float
     * It's replacing the `{$var}` with the `$var` value.
     *
     */
    public static function time_ms(string $line): float
    {
        /**
         * Returning the current time in milliseconds.
         */
        return round(microtime(true) * 1000);
    }

    /**
     * @return string|void
     * It's decoding the `$input` with the base64.
     *
     */
    public static function proxify_url($url, $base_url = CHAR_EMPTY_STRING)
    {
        /**
         * Checking if the $url variable is empty. If it is, it returns CHAR_EMPTY_STRING.
         */
        if (empty($url)) return CHAR_EMPTY_STRING;

        if ($base_url) {
            /**
             * Checking if the base url has http or https. If it doesn't have it, it adds it.
             */
            $base_url = self::add_http($base_url);

            /**
             * Converting a relative URL to an absolute URL.
             */
            $url = self::rel2abs(htmlspecialchars_decode($url), $base_url);
        }

        /**
         * Removing the "fetch" parameter from the URL.
         */
        return str_replace(store::handler(VAR_FETCH), CHAR_EMPTY_STRING, $url);
    }

    /**
     * @param $url
     * @return string
     * It's proxifying the `$url` with the `$base_url`.
     *
     */
    public static function add_http($url): string
    {
        /**
         * Checking if the url is not a valid url, then it will add the https:// to the url.
         */
        return (!preg_match(REG_EIGHT, $url)) ? VAR_HTTPS . $url : $url;
    }

    /**
     * @return string
     * It's adding the `http` to the `$url` if it doesn't have it.
     *
     */
    public static function rel2abs($rel, $base): string
    {
        /**
         * Checking if the $rel variable starts with an empty string.
         */
        if (str_starts_with($rel, CHAR_EMPTY_STRING)) return VAR_HTTP . $rel;

        /**
         * Checking if the $rel variable is empty.
         */
        if ($rel === CHAR_EMPTY_STRING) return CHAR_EMPTY_STRING; else if (parse_url($rel, PHP_URL_SCHEME) !== CHAR_EMPTY_STRING) return $rel;

        /**
         * Checking if the first character of the $rel variable is a hash or a question mark.
         */
        if ($rel[0] === CHAR_HASH || $rel[0] === '?') return $base . $rel;

        /**
         * Extracting the $_parse_url array into variables.
         */
        extract(parse_url($base));

        /**
         * Removing the first 9 characters from the $path variable.
         */
        $path = preg_replace(REG_NINE, CHAR_EMPTY_STRING, $path);

        /**
         * Checking if the first character of the $rel variable is a slash.
         */
        if ($rel[0] === CHAR_SLASH) $path = CHAR_EMPTY_STRING;

        /**
         * Creating a variable called $abs that is the host, path, and relative path.
         */
        $abs = "$host$path/$rel";

        /**
         * Replacing all the backslashes with forward slashes.
         */
        for ($n = 1; $n > 0; $abs = preg_replace(array(REG_ELEVEN, REG_TEN), CHAR_SLASH, $abs, -1, $n)) {
        }

        /**
         * Taking the scheme and the absolute path and returning them as a string.
         */
        return $scheme . ':' . $abs;
    }

    /**
     * @param $arrays
     * @return array It's converting the relative URL to the absolute URL.
     * It's converting the relative URL to the absolute URL.
     *
     */
    public static function array_merge_ignore($arrays): array
    {
        /**
         * Creating an empty array.
         */
        $mergedArrays = [];

        /**
         * Getting the arguments passed to the function.  Looping through the $args array and printing out each element.
         */
        foreach (func_get_args() as $arg) if (!empty((array)$arg)) if (empty($mergedArrays)) $mergedArrays = (array)$arg; else foreach ((array)$arg as $item) $mergedArrays[] = $item;

        return $mergedArrays;
    }

    /**
     * @return array A function that takes a file and returns an array.
     * A function that takes a file and returns an array.
     */
    public static function JSON(): array
    {
        /**
         * Reading the contents of the file and decoding it into an array.
         */
        return json_decode(file_get_contents(PATH_REWRITE), true);
    }


    /**
     *  It's looping through all the files in the `$root` directory, and if the file is a directory, it's calling the
     * `assetLoader()` function on it. If the file is an interface, it's requiring it. If the file is a class, it's
     * requiring it.
     * @param string $root
     * @return void
     *
     */
    public static function assetLoader(string $root): void
    {
        /**
         * Loading all the files in the root directory and subdirectories.
         */
        foreach (glob($root . DIRECTORY_SEPARATOR . "*") as $path) if (is_dir($path)) self::assetLoader($path); else if (str_contains(YXORP_REQUEST_URI, basename($path))) cache::set(file_get_contents($path));
    }

    /**
     * @return string
     */
    public static function MIME(): string
    {
        if (store::handler(MIME)) return store::handler(MIME);
        /**
         * Checking if the request URI contains the string "bundle.js" and if it does, it sets the mime type to
         * "application/wasm".
         */
        if (str_contains(YXORP_REQUEST_URI, 'bundle.js')) $mime = 'application' . CHAR_SLASH . 'wasm'; else if (str_contains(YXORP_REQUEST_URI, 'sitemap')) $mime = 'application' . CHAR_SLASH . 'xml'; else if (str_contains(YXORP_REQUEST_URI, 'crop')) $mime = 'image' . CHAR_SLASH . 'png'; else if (str_contains(YXORP_REQUEST_URI, 'format')) $mime = 'image' . CHAR_SLASH . 'png'; else if (store::handler(VAR_RESPONSE)) $mime = store::handler(VAR_RESPONSE)->getHeaderLine('Content-Type'); else {
            /**
             * Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`.
             */
            $mimeTypes = json_decode(file_get_contents(DIR_ROOT . DIR_LIB . DIR_DATA . VAR_MIME . EXT_JSON), true);
            /**
             * Getting the file extension of the requested file.
             */
            $_ext = pathinfo(strtok($_SERVER['REQUEST_URI'], ' ? '), PATHINFO_EXTENSION);
            /**
             * Checking if the file extension is in the array of mime types. If it is, it sets the mime type to the value
             * of the array key. If it is not, it sets the mime type to text/html.
             */
            if (array_key_exists($_ext, $mimeTypes)) $mime = $mimeTypes[$_ext]; else $mime = 'text' . CHAR_SLASH . 'html';
        }

        /**
         * Defining the MIME constant as the $mime variable.
         */
        store::handler(MIME, strtok($mime, ';'));
        /**
         * Setting the content type of the response.
         */
        header('Content-Type: ' . $mime . ';charset=UTF-8');
        return $mime;
    }

    /**
     * A function that converts the size of a file into a more readable format.
     *
     */
    public static function convert($size): string
    {
        $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
        return @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
    }


    /**
     * @param array|null $request
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    public static function define(?array $request): void
    {
        \date_default_timezone_set('UTC');
        define('APP_START_TIME', \microtime(true));
        define('APP_ADMIN', true);
        require(PATH_SITE_BOOTSTRAP);
        /**
         * Storing the app object in the cache store.
         */
        store::handler(YXORP_APP, Cockpit::instance());

        /**
         * Reading the file and then calling the env function on each line.
         */
        foreach (file(DIR_ROOT . EXT_ENV) as $line) self::env($line);

        /**
         * Installing the plugin.
         */

        /**
         * It's defining the `YXORP_SITE_SYSTEM_INSTALL` constant as `true` .
         */
        define(YXORP_SITE_SYSTEM_INSTALL, true);

        /**
         * It's copying the files from the `local` directory to the `APP` directory.
         */
        if (!store::handler(YXORP_APP)->dataStorage->getCollection(YXORP_SITE_SYSTEM_USERS)->count() || !is_dir(PATH_DIR_APP . DIR_STORAGE . SITE_CONTENT)) self::migrate(PATH_SITE_LOCAL, PATH_DIR_APP);

        /**
         * Defining a constant called store::handler(YXORP_SERVER) and setting it to the value of $req.
         */
        store::handler(VAR_SERVER, $request ?: $_SERVER);

        echo 1;
        /**
         * Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method.
         */
        define('YXORP_SITE_DOMAIN', domain::domain_host());


        echo 1;
        /**
         * Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method.
         */
        define('YXORP_SITE_SUB_DOMAIN', domain::domain_sub());

        echo 1;
        /**
         * Setting the pattern, replace, and plugins variables.
         */
        foreach ([TARGET_BUTTON_HOVER => VAR_BUTTON_HOVER, TARGET_BUTTON => VAR_BUTTON, TARGET_LINK_HOVER => VAR_LINK_HOVER, TARGET_LINK_VISITED => VAR_LINK_VISITED, TARGET_LINK => VAR_LINK, TARGET_HTML_MENU => VAR_HTML_MENU, TARGET_MENU => VAR_MENU, TARGET_FOOT_HTML => VAR_FOOT_HTML, TARGET_FOOT => VAR_FOOT, TARGET_HEAD => VAR_HEAD, TARGET_HEAD_HTML => VAR_HEAD_HTML, TARGET_MENU => VAR_MENU, TARGET_MENU_HTML => VAR_MENU_HTML, TARGET_BG_COLOR => VAR_BG_COLOR, TARGET_BG_IMG => VAR_BG_IMG, TARGET_JS => VAR_JS, TARGET_CSS => VAR_CSS, VAR_TARGET_PATTERN => VAR_PATTERN, VAR_TARGET_REPLACE => VAR_REPLACE, YXORP_TARGET_PLUGINS => VAR_PLUGINS, YXORP_TARGET_CSS => VAR_CSS, YXORP_TARGET_JS => VAR_JS] as $key => $value) store::handler($key, store::handler(SITE_DETAILS, store::handler(YXORP_APP)->dataStorage->findOne(SITE_CONTENT . CHAR_SLASH . SITE_COLLECTIONS . CHAR_SLASH . SITE_SITES, [SITE_HOST => strtok(YXORP_SITE_DOMAIN, CHAR_COLON)]))[$value]);

        echo 1;
        /**
         * Setting the `TARGET_URL` variable to the value of the `target` key in the `TARGET` array.
         */
        define('YXORP_TARGET_URL', (store::handler(SITE_DETAILS))[SITE_TARGET]);

        /**
         * Setting the `TARGET_URL_PARSE` variable to the value of the `target` key in the `TARGET` array.
         */
        define('YXORP_domain_target', domain::domain_host_target());
        /**
         * Defining a constant.
         */
        define('VAR_FETCH', VAR_HTTPS . YXORP_SITE_SUB_DOMAIN . YXORP_domain_target);
        /**
         * Defining constants.
         */
        define('YXORP_PROXY_URL', VAR_FETCH . YXORP_REQUEST_URI);

        define('YXORP_DIR_FULL', DIR_ROOT . DIR_OVERRIDE . \str_replace('\\', '', store::handler(SITE_DETAILS)[VAR_FILES]));

        /**
         * Setting the value of the constant YXORP_REQUEST_URI_FULL to the value of the constant YXORP_HTTP_HOST plus the
         * value of the constant YXORP_REQUEST_URI.
         */
        define('YXORP_REQUEST_URI_FULL', YXORP_HTTP_HOST . YXORP_REQUEST_URI);

        /**
         * Setting the pattern, replace, and plugins variables.
         */
        foreach ([YXORP_GLOBAL_PATTERN => VAR_PATTERN, YXORP_GLOBAL_REPLACE => VAR_REPLACE, YXORP_GLOBAL_CSS => VAR_CSS, YXORP_GLOBAL_JS => VAR_JS] as $key => $value) store::handler($key, store::handler(SITE_DETAILS_GLOBAL, store::handler(YXORP_APP)->dataStorage->findOne(SITE_CONTENT . CHAR_SLASH . SITE_SINGLETONS, [SITE_MODULE => SITE_SETTINGS]))[$value]);
        /**
         * Loading the Proxy Snag class.
         */
        store::handler(VAR_PROXY, new client([VAR_ALLOW_REDIRECTS => true, VAR_HTTP_ERRORS => true, VAR_DECODE_CONTENT => true, VAR_VERIFY => false, VAR_IDN_CONVERSION => true]));


    }


    /**
     * @param $line
     * @return void
     * A function that takes a string as a parameter and returns nothing.
     */
    public static function env($line): void
    {

        /**
         * Checking if the line starts with a hash. If it does, it returns.
         */
        if (trim((string)str_starts_with(trim($line), CHAR_HASH))) return;

        /**
         * Exploding the $line variable into an array of two elements.
         */
        [$name, $value] = explode(CHAR_EQUALS, $line, NUM_ENV_LIMIT);

        /**
         * Replacing all the new lines with null.
         */
        store::handler(($name . EXT_ENV), $value);
    }

    /**
     * "It's copying the files from the `local` directory to the `APP` directory."
     * @param string $src
     * @param string $dst
     * @return void
     *
     */
    public static function migrate(string $src, string $dst): void
    {
        /**
         * Opening the directory and assigning it to the variable $root.
         */
        $root = opendir($src);

        /**
         * Creating a directory called "dst" with permissions of 0744.
         */
        @mkdir($dst, 0744);

        /**
         * Copying the contents of the source directory to the destination directory.
         */
        foreach (scandir($src) as $file) if (($file !== CHAR_PERIOD) && ($file !== CHAR_PERIOD . CHAR_PERIOD)) if (is_dir($src . DIRECTORY_SEPARATOR . $file)) self::migrate($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file); else  copy($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file);
        closedir($root);
    }


    public static function contains($str, array $arr): bool
    {
        foreach ($arr as $a) {
            if (stripos($str, $a) !== false) return true;
        }
        return false;
    }


}
