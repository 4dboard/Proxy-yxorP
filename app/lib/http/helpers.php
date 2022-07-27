<?php namespace yxorP\app\lib\http;

use Bugsnag\Client;
use GuzzleHttp\Cookie\FileCookieJar;
use yxorP\app\lib\parser\resolvedDomainNameInterface;
use yxorP\app\lib\parser\rules;
use function explode;


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
        return ($html5) ? '<video width="' . $width . '" height="' . $height . '" controls autoplay><source src="' . proxify_url($url) . '" type="video/' . $extension . '">Your browser does not support the video tag.</video>' : '<object id="flowplayer" width="' . $width . '" height="' . $height . '" data="<param name="wmode" value="transparent" /><param name="flashvars" value=\'inc={"clip":"' . rawurlencode(proxify_url($url)) . '", "plugins": {"controls": {"autoHide" : 0} }}\' /></object>';
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
     * @return string
     * Checking if the `$haystack` starts with the `$needles`.
     *
     */
    public static function str_before($subject, $search): string
    {
        /**
         * Returning the first part of a string before the first occurrence of a given character.
         */
        return $search === CHAR_EMPTY_STRING ? $subject : explode($search, $subject)[0];
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
        return str_replace(store::store(VAR_FETCH), CHAR_EMPTY_STRING, $url);
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
     * @param $file
     * @return array A function that takes a file and returns an array.
     * A function that takes a file and returns an array.
     *
     */
    public static function JSON(): array
    {
        /**
         * Reading the contents of the file and decoding it into an array.
         */
        return json_decode(file_get_contents(PATH_REWRITE), true);
    }

    /**
     * @return void
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     *
     */
    public static function cockpit_find(): mixed
    {
        return store::tmp(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . COCKPIT_SITES, [COCKPIT_HOST => YXORP_SITE_DOMAIN]);
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
        foreach (glob($root . DIRECTORY_SEPARATOR . "*") as $path) if (is_dir($path)) self::assetLoader($path); else if (str_contains(YXORP_REQUEST_URI, basename($path))) {
            self::setMimeType();
            cache::set(file_get_contents($path));
        }
    }

    /**
     *
     */
    public static function setMimeType(): void
    {

        /**
         * Checking if the request URI contains the string "bundle.js" and if it does, it sets the mime type to
         * "application/wasm".
         */
        if (str_contains(YXORP_REQUEST_URI, 'bundle.js')) $mime = 'application' . CHAR_SLASH . 'wasm'; else if (str_contains(YXORP_REQUEST_URI, 'sitemap')) $mime = 'application' . CHAR_SLASH . 'xml'; else if (str_contains(YXORP_REQUEST_URI, 'crop')) $mime = 'image' . CHAR_SLASH . 'png'; else if (str_contains(YXORP_REQUEST_URI, 'format')) $mime = 'image' . CHAR_SLASH . 'png'; else if (store::store(VAR_RESPONSE)) $mime = store::store(VAR_RESPONSE)->getHeaderLine('Content-Type'); else {
            /**
             * Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`.
             */
            $mimeTypes = json_decode(file_get_contents(DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . VAR_MIME . EXT_JSON), true);
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
        define('MIME', strtok($mime, ';'));
        /**
         * Setting the content type of the response.
         */
        header('Content-Type: ' . $mime . ';charset=UTF-8');
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
     * Defining a static method called mime.
     *
     */
    public static function replace($content): string
    {
        store::store(YXORP_REWRITE, null, 'yxorP\app\lib\http\helpers::JSON');
        /**
         * Importing the `generalHelper` class from the `yxorP\app\lib\http` namespace. Importing the `minify` class from the `yxorP\app\lib\minify` namespace.   Extending the `wrapper` class.
         */
        return preg_replace_callback_array(['~\<x(.*?)x\>~is' => function ($m) {
            return '<x' . str_replace(array_keys(store::store(YXORP_REWRITE)), array_values(store::store(YXORP_REWRITE)), $m[1]) . 'x>';
        }], $content) ?: $content;
    }

    /**
     * @param array|null $req
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    public static function define(?array $request): void
    {
        /**
         * It's defining a constant called `DIR_ROOT` and setting it to the value of `$root` with a `DIRECTORY_SEPARATOR`
         * appended to it.
         * It's defining a constant called `PATH_COCKPIT_BOOTSTRAP` and setting it to the value of `DIR_ROOT` with a
         * `DIR_APP` and `DIR_LIB` and `DIR_COCKPIT` and `FILE_COCKPIT_BOOTSTRAP` appended to it.
         */
        define('PATH_COCKPIT_BOOTSTRAP', DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT . FILE_COCKPIT_BOOTSTRAP);
        /**
         * It's defining a constant called `PATH_GUZZLE` and setting it to the value of `DIR_ROOT` with a `DIR_APP` and
         * `DIR_VENDOR` and `FILE_GUZZLE` appended to it.
         */
        define('PATH_GUZZLE', DIR_ROOT . DIR_APP . DIR_VENDOR . FILE_GUZZLE);
        /**
         * It's defining a constant called `PATH_BUGSNAG` and setting it to the value of `DIR_ROOT` with a `DIR_APP` and
         * `DIR_VENDOR` and `FILE_BUGSNAG` appended to it.
         */
        define('PATH_BUGSNAG', DIR_ROOT . DIR_APP . DIR_VENDOR . FILE_BUGSNAG);
        /**
         * It's defining a constant called `PATH_COOKIE_JAR` and setting it to the value of `DIR_ROOT` with a `DIR_APP` and
         * `DIR_LIB` and `DIR_DATA` and `FILE_COOKIE_JAR` appended to it.
         */
        define('PATH_COOKIE_JAR', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_COOKIE_JAR);
        /**
         * It's defining a constant called `PATH_DIR_COCKPIT` and setting it to the value of `DIR_ROOT` with a `DIR_APP`
         * and `DIR_LIB` and `DIR_COCKPIT` appended to it.
         */
        define('PATH_DIR_COCKPIT', DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT);
        /**
         * It's defining a constant called `PATH_COCKPIT_LOCAL` and setting it to the value of `DIR_ROOT` with a
         * `DIR_INSTALL` and `DIR_COCKPIT` appended to it.
         */
        define('PATH_COCKPIT_LOCAL', DIR_ROOT . DIR_INSTALL . DIR_COCKPIT);
        /**
         * It's defining a constant called `PATH_COCKPIT_INDEX` and setting it to the value of `DIR_ROOT` with a `DIR_APP`
         * and `DIR_LIB` and `DIR_COCKPIT` and `FILE_INDEX` appended to it.
         */
        define('PATH_COCKPIT_INDEX', DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT . FILE_INDEX);
        /**
         * It's defining a constant called `PATH_REWRITE` and setting it to the value of `DIR_ROOT` with a `DIR_APP` and
         * `DIR_LIB` and `DIR_DATA` and `FILE_REWRITE` appended to it.
         */
        define('PATH_REWRITE', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_REWRITE);
        /**
         * It's defining a constant called `PATH_INC_WRAPPER` and setting it to the value of `DIR_ROOT` with a `DIR_APP`
         * and  `DIR_LIB` and `FILE_WRAPPER` appended to it.
         */
        define('PATH_INC_WRAPPER', DIR_ROOT . DIR_APP . DIR_LIB . FILE_WRAPPER);
        /**
         * Defining a constant.
         */
        define('PATH_TLDS_ALPHA_BY_DOMAIN', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_TLDS_ALPHA_BY_DOMAIN);
        /**
         * Defining a constant called PATH_PUBLIC_SUFFIX_LIST. The value of the constant is the directory root, the
         * application directory, the library directory, the data directory, and the public suffix list file.
         */
        define('PATH_PUBLIC_SUFFIX_LIST', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_PUBLIC_SUFFIX_LIST);
        /**
         * Defining a constant called PATH_FILE_MIME_TYPES. The value of the constant is the directory root, the
         * application directory, the library directory, the data directory, and the file mime types.
         */
        define('PATH_FILE_MIME_TYPES', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_MIME_TYPES);

        /**
         * Setting the localisation of the server to the request.
         */
        helpers::localise($request);

    }

    /**
     * @param array|null $req
     * @return void
     * It's checking if the file exists.
     *
     */
    public static function localise(?array $request): void
    {

        /**
         * Loading the cockpit.php file.
         */
        self::loadCockpit();

        /**
         * Reading the file and then calling the env function on each line.
         */
        foreach (file(DIR_ROOT . EXT_ENV) as $line) self::env($line);

        self::install();

        /**
         * Defining a constant called store::store(YXORP_SERVER) and setting it to the value of $req.
         */
        store::tmp(VAR_SERVER, $request ?: $_SERVER);

        /**
         * Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method.
         */
        define('YXORP_SITE_DOMAIN', domain::domain_host());


        /**
         * Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method.
         */
        define('YXORP_SITE_SUB_DOMAIN', domain::domain_sub());


        /**
         * Setting the `TARGET` variable to the result of the `findOne` method.
         */
        store::store(SITE_DETAILS, null, 'yxorP\app\lib\http\helpers::cockpit_find');

        /**
         * Setting the pattern, replace, and plugins variables.
         */
        foreach ([VAR_TARGET_PATTERN => VAR_PATTERN, VAR_TARGET_REPLACE => VAR_REPLACE, YXORP_TARGET_PLUGINS => VAR_PLUGINS] as $key => $value)
            store::store($key, store::store(SITE_DETAILS)[$value]);

        /**
         * Setting the `TARGET_URL` variable to the value of the `target` key in the `TARGET` array.
         */
        define('YXORP_TARGET_URL', (store::store(SITE_DETAILS))[COCKPIT_TARGET]);


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

        define('YXORP_GUZZLE_URL', VAR_FETCH . YXORP_REQUEST_URI);

        define('YXORP_DIR_FULL', DIR_ROOT . DIR_APP . DIR_OVERRIDE . str_replace('\\', '', store::store(SITE_DETAILS)[VAR_FILES]));

        /**
         * Setting the value of the constant YXORP_REQUEST_URI_FULL to the value of the constant YXORP_HTTP_HOST plus the
         * value of the constant YXORP_REQUEST_URI.
         */
        define('YXORP_REQUEST_URI_FULL', YXORP_HTTP_HOST . YXORP_REQUEST_URI);

        /**
         * Setting the global variables for the application.
         */
        foreach ([YXORP_GLOBAL_REPLACE => store::store(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_REPLACE]) ? (store::store(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_REPLACE]))[VAR_VALUE] : null, YXORP_GLOBAL_PATTERN => store::store(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_PATTERN]) ? (store::store(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_PATTERN]))[VAR_VALUE] : null] as $key => $value) store::store($key, $value);

        /**
         * Loading the Guzzle Snag class.
         */
        helpers::loadGuzzleSnag();

    }

    /**
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     *
     */
    public static function loadCockpit(): void
    {
        /**
         * Requiring the COCKPIT library.
         */
        require PATH_COCKPIT_BOOTSTRAP;
        /**
         * Storing the cockpit object in the tmp store.
         */
        store::tmp(YXORP_COCKPIT_APP, cockpit());
    }

    /**
     * @return void
     * A function that takes a string as a parameter and returns nothing.
     *
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
        store::store(($name . EXT_ENV), $value);
    }

    /**
     * @return void
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     *
     */
    public static function install(): void
    {
        /**
         * It's defining the `YXORP_COCKPIT_INSTALL` constant as `true` .
         */
        define(YXORP_COCKPIT_INSTALL, true);

        /**
         * It's copying the files from the `local` directory to the `COCKPIT` directory.
         */
        if (!is_dir(PATH_DIR_COCKPIT . DIR_STORAGE . COCKPIT_COLLECTIONS)) self::migrate(PATH_COCKPIT_LOCAL, PATH_DIR_COCKPIT);
        /**
         * It's inserting a new user into the `COCKPIT_accounts` collection.
         */
        if (!store::store(YXORP_COCKPIT_APP)->storage->getCollection(COCKPIT_ACCOUNTS)->count()) store::store(YXORP_COCKPIT_APP)->storage->insert(COCKPIT_ACCOUNTS, [VAR_USER => store::store(ENV_ADMIN_USER), VAR_NAME => store::store(ENV_ADMIN_NAME), VAR_EMAIL => store::store(ENV_ADMIN_EMAIL), VAR_ACTIVE => true, VAR_GROUP => VAR_COCKPIT, VAR_PASSWORD => store::store(YXORP_COCKPIT_APP)->hash(store::store(ENV_ADMIN_PASSWORD)), VAR_I18N => store::store(YXORP_COCKPIT_APP)->helper(VAR_I18N)->locale, VAR_CREATED => time(), VAR_MODIFIED => time()]);
    }

    /**
     * "It's copying the files from the `local` directory to the `COCKPIT` directory."
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

    /**
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     *
     */
    public static function loadGuzzleSnag(): void
    {

        /**
         * It's requiring the Guzzle library.
         */
        require PATH_GUZZLE;

        /**
         * It's requiring the Bugsnag library.
         */
        require PATH_BUGSNAG;

        /**
         * It's setting the token to the snag key.
         */
        store::tmp(VAR_BUGSNAG, Client::make(store::store(ENV_BUGSNAG_KEY)));

        /**
         * Setting the token GUZZLE to a new instance of the \yxorP\app\lib\proxy class.
         */
        store::tmp(VAR_GUZZLE, new \GuzzleHttp\Client([VAR_COOKIES => new FileCookieJar(PATH_COOKIE_JAR, TRUE), VAR_ALLOW_REDIRECTS => true, VAR_HTTP_ERRORS => true, VAR_DECODE_CONTENT => true, VAR_VERIFY => false, VAR_COOKIES => true, VAR_IDN_CONVERSION => true]));

    }


}