<?php namespace yxorP\app\lib\http;

use yxorP\app\lib\parser\domain;
use yxorP\app\lib\parser\rules;
use yxorP\app\yP;
use function array_map;
use function explode;


/* Importing the `array_map` function from the global namespace. Importing the `array_merge` function from the global namespace.  Importing the `file` function from the global namespace. A class that contains a bunch of functions that are used throughout the application. */

class helpers
{


    /**
     * @param $url
     * @param string $width
     * @param string $height
     * @param bool $extension
     * @return string A function that takes in a url, width, height, and extension and returns a string.
     * A function that takes in a url, width, height, and extension and returns a string.
     */
    public static function vid_player($url, $width = '100%', $height = '100%', $extension = false): string
    {
        $html5 = false;

        /* Checking if the path is set. */
        if ($path = parse_url($url, PHP_URL_PATH)) if (($extension = @false ?: pathinfo($path, PATHINFO_EXTENSION)) === 'mp4' || $extension === 'webm' || $extension === 'ogg') $html5 = true;

        /* Returning the HTML code for the video player. */
        return ($html5) ? '<video width="' . $width . '" height="' . $height . '" controls autoplay><source src="' . proxify_url($url) . '" type="video/' . $extension . '">Your browser does not support the video tag.</video>' : '<object id="flowplayer" width="' . $width . '" height="' . $height . '" data="<param name="wmode" value="transparent" /><param name="flashvars" value=\'inc={"clip":"' . rawurlencode(proxify_url($url)) . '", "plugins": {"controls": {"autoHide" : false} }}\' /></object>';
    }

    /**
     * @param $haystack
     * @param $needles
     * @return bool A function that is used to render a video player.
     * A function that is used to render a video player.
     */
    public static function starts_with($haystack, $needles): bool
    {
        /* Checking if the string starts with any of the needles. */
        foreach ((array)$needles as $n) if ($n !== CHAR_EMPTY_STRING && stripos($haystack, $n) === 0) return true;
    }

    /**
     * @return string
     * Checking if the `$haystack` starts with the `$needles`.
     */
    public static function str_before($subject, $search): string
    {
        /* Returning the first part of a string before the first occurrence of a given character. */
        return $search === CHAR_EMPTY_STRING ? $subject : explode($search, $subject)[0];
    }

    /**
     * @param string $line
     * @return bool
     * Returning the part of the string before the `$search` string.
     */
    public static function is_html(string $line)
    {
        /* Checking if the content type is HTML. */
        return clean_content_type($content_type) === VAR_TEXT_HTML;
    }

    /**
     * @return bool
     * Checking if the `$content_type` is `text/html`.
     */
    public static function in_arrayi()
    {
        /* Checking if the `$content_type` is `text/html`. */
        return in_array(strtolower($needle), array_map(VAR_STRTOLOWER, $haystack), true);
    }

    /**
     * @param string $pattern
     * @param string $string
     * @return bool Checking if the `$needle` is in the `$haystack` array.
     * Checking if the `$needle` is in the `$haystack` array.
     */
    public static function re_match(string $pattern, string $string): bool
    {
        /* Checking if the string contains the translated string. */
        return preg_match(REG_SEVEN . strtr(preg_quote($pattern, CHAR_HASH), array(CHAR_SLASH_BACK => REG_FIVE, REG_SIX => CHAR_PERIOD)) . REG_EIGHT, $string) === 1;
    }

    /**
     * @param string $line
     * @return array
     * It's checking if the `$pattern` matches the `$string`.
     */
    public static function array_merge_custom(string $line)
    {
        /* Creating an empty array. */
        $arr = [];

        /* Getting the arguments passed to the function. */
        foreach (func_get_args() as $arg) foreach ((array)$arg as $key => $value) $arr[$key] = $value;

        return $arr;
    }

    /**
     * @return string
     * It's merging the arrays.
     */
    public static function str_rot_pass()
    {
        /* Creating a string of spaces that is the same length as the string passed in. */
        $result = str_repeat(' ', strlen($str));

        /* Looping through the string and checking each character. Taking the ASCII value of the character at the current position in the string and adding it to the ASCII value of the character at the current position in the key. */
        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) $result[$i] = chr(($decrypt) ? ord($str[$i]) - ord($key[$i % $key_len = strlen($key)]) : ord($str[$i]) + ord($key[$i % $key_len]));

        return $result;
    }

    /**
     * @return void
     * It's returning the application URL.
     */
    public static function render_string($str, $vars = array())
    {
        preg_match_all(REG_THREE, $str, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            /* Extracting the variables from the array $vars and prefixing them with VAR_ */
            extract($vars, EXTR_PREFIX_ALL, VAR_VAR_UNDER);

            /* Assigning the value of the variable whose name is stored in the variable VAR_VAR_UNDER_END to the variable
            $var_val.  Replacing the variable with the value of the variable. */
            $str = str_replace($match[0], ${VAR_VAR_UNDER_END . $match[1]}, $str);
        }
        return $str;
    }

    /**
     * @param string $line
     * @return float
     * It's replacing the `{$var}` with the `$var` value.
     */
    public static function time_ms(string $line)
    {
        /* Returning the current time in milliseconds. */
        return round(microtime(true) * 1000);
    }

    /**
     * @param string $line
     * @return string
     * It's returning the current time in milliseconds.
     */
    public static function base64_url_encode(string $line)
    {
        /* Encoding a string using base64 and then replacing the characters +/= with ._- */
        return rtrim(strtr(base64_encode($input), '+/=', '._-'));
    }

    /**
     * @param string $line
     * @return false|string
     * It's encoding the `$input` with the base64.
     */
    public static function base64_url_decode(string $line)
    {
        /* Decoding a base64 string. */
        return base64_decode(strtr($input, '._-', '+/='));
    }

    /**
     * @return void
     * It's decoding the `$input` with the base64.
     */
    public static function proxify_url($url, $base_url = CHAR_EMPTY_STRING)
    {
        /* Checking if the $url variable is empty. If it is, it returns CHAR_EMPTY_STRING. */
        if (empty($url)) return CHAR_EMPTY_STRING;

        if ($base_url) {
            /* Checking if the base url has http or https. If it doesn't have it, it adds it. */
            $base_url = self::add_http($base_url);

            /* Converting a relative URL to an absolute URL. */
            $url = self::rel2abs(htmlspecialchars_decode($url), $base_url);
        }

        /* Removing the "fetch" parameter from the URL. */
        return str_replace(yP::get(VAR_FETCH), CHAR_EMPTY_STRING, $url);
    }

    /**
     * @param $url
     * @return string
     * It's proxifying the `$url` with the `$base_url`.
     */
    public static function add_http($url): string
    {
        /* Checking if the url is not a valid url, then it will add the https:// to the url. */
        return (!preg_match(REG_EIGHT, $url)) ? VAR_HTTPS . $url : $url;
    }

    /**
     * @return string
     * It's adding the `http` to the `$url` if it doesn't have it.
     */
    public static function rel2abs($rel, $base): string
    {
        /* Checking if the $rel variable starts with an empty string. */
        if (str_starts_with($rel, CHAR_EMPTY_STRING)) return VAR_HTTP . $rel;

        /* Checking if the $rel variable is empty. */
        if ($rel === CHAR_EMPTY_STRING) return CHAR_EMPTY_STRING; else if (parse_url($rel, PHP_URL_SCHEME) !== CHAR_EMPTY_STRING) return $rel;

        /* Checking if the first character of the $rel variable is a hash or a question mark. */
        if ($rel[0] === CHAR_HASH || $rel[0] === '?') return $base . $rel;

        /* Extracting the $_parse_url array into variables. */
        extract(parse_url($base));

        /* Removing the first 9 characters from the $path variable. */
        $path = preg_replace(REG_NINE, CHAR_EMPTY_STRING, $path);

        /* Checking if the first character of the $rel variable is a slash. */
        if ($rel[0] === CHAR_SLASH) $path = CHAR_EMPTY_STRING;

        /* Creating a variable called $abs that is the host, path, and relative path. */
        $abs = "$host$path/$rel";

        /* Replacing all the backslashes with forward slashes. */
        for ($n = 1; $n > 0; $abs = preg_replace(array(REG_ELEVEN, REG_TEN), CHAR_SLASH, $abs, -1, $n)) {
        }

        /* Taking the scheme and the absolute path and returning them as a string. */
        return $scheme . ':' . $abs;
    }

    /**
     * @param $arrays
     * @return array It's converting the relative URL to the absolute URL.
     * It's converting the relative URL to the absolute URL.
     */
    public static function array_merge_ignore($arrays): array
    {
        /* Creating an empty array. */
        $mergedArrays = [];

        /* Getting the arguments passed to the function.  Looping through the $args array and printing out each element. */
        foreach (func_get_args() as $arg) if (!empty((array)$arg)) if (empty($mergedArrays)) $mergedArrays = (array)$arg; else foreach ((array)$arg as $item) $mergedArrays[] = $item;

        return $mergedArrays;
    }

    /**
     * @param string $line
     * @return string
     * Extracting the subdomain from a domain.
     */
    public static function extractSubdomains(string $line)
    {
        /* Checking if the domain is set and if it contains a period. */
        if ($domain && str_contains($domain, CHAR_PERIOD)) {

            /* Setting the variable $subdomains to the value of $domain.   Extracting the domain from the subdomains.  Returning the subdomain of a domain. */
            return rtrim(strstr($subdomains, self::extractDomain($domain), true), CHAR_PERIOD);

        } else  return null;
    }

    /**
     * @param $domain
     * @return void
     * It's merging the arrays.
     */
    public static function extractDomain($domain)
    {
        /* Checking if the domain is valid. */
        if ($domain && str_contains($domain, CHAR_PERIOD)) if (preg_match(REG_TWELVE, $domain, $matches)) return $matches[VAR_DOMAIN]; else   return $domain; else  return $domain;
    }

    /**
     * @param string $line
     * @return void
     * A function that takes a string as a parameter and returns nothing.
     */
    public static function env(string $line): void
    {
        /* Checking if the line starts with a hash. If it does, it returns. */
        if (trim((string)str_starts_with(trim($line), CHAR_HASH))) return;

        /* Exploding the $line variable into an array of two elements. */
        [$name, $value] = explode(CHAR_EQUALS, $line, NUM_ENV_LIMIT);

        /* Replacing all the new lines with null. */
        yP::set($name . EXT_ENV, str_replace("\r\n", CHAR_EMPTY_STRING, $value));
    }


    /**
     * @param array $req
     * @return void
     * It's checking if the file exists.
     */
    public static function localise(array $req): void
    {
        helpers::install();

        /* Defining a constant called yP::get(YXORP_SERVER) and setting it to the value of $req. */
        yP::tmp(VAR_SERVER, $req);

        /* Checking if the site url contains a period. If it does, it returns false. */
        define('YXORP_IS_LOCALHOST', !str_contains(YXORP_HTTP_HOST, CHAR_PERIOD));

        /* Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method. */
        if (!CACHED_CONTEXT) yP::set(SITE_DOMAIN, !YXORP_IS_LOCALHOST ? (self::publicSuffix(YXORP_HTTP_HOST ?: yP::get(ENV_DEFAULT_SITE))) : YXORP_HTTP_HOST);

        /* Defining the constants YXORP_SITE_DOMAIN and YXORP_SITE_SUB_DOMAIN. */
        foreach (['YXORP_SITE_DOMAIN' => !YXORP_IS_LOCALHOST ? yP::get(SITE_DOMAIN)->registrableDomain()->toString() ?: yP::get(SITE_DOMAIN)->domain()->toString() : YXORP_HTTP_HOST, 'YXORP_SITE_SUB_DOMAIN' => !YXORP_IS_LOCALHOST ? (yP::get(SITE_DOMAIN)->subDomain()->toString() ? yP::get(SITE_DOMAIN)->subDomain()->toString() . CHAR_PERIOD : null) : null] as $key => $value) define($key, $value);

        /* Setting the `TARGET` variable to the result of the `findOne` method. */
        if (!CACHED_CONTEXT) yP::set(SITE_DETAILS, yP::get(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . COCKPIT_SITES, [COCKPIT_HOST => YXORP_SITE_DOMAIN]));

        /* Setting the pattern, replace, and plugins variables. */
        if (!CACHED_CONTEXT) foreach ([VAR_TARGET_PATTERN => VAR_PATTERN, VAR_TARGET_REPLACE => VAR_REPLACE, YXORP_TARGET_PLUGINS => VAR_PLUGINS] as $key => $value)
            yP::set($key, yP::get(SITE_DETAILS)[$value]);

        /* Setting the `TARGET_URL` variable to the value of the `target` key in the `TARGET` array. */
        define('YXORP_TARGET_URL', (yP::get(SITE_DETAILS))[COCKPIT_TARGET]);


        /* Setting the `TARGET_URL_PARSE` variable to the value of the `target` key in the `TARGET` array. */
        if (!CACHED_CONTEXT) yP::set(TARGET_DOMAIN, self::publicSuffix(YXORP_TARGET_URL ?: yP::get(ENV_DEFAULT_TARGET)));

        /* Checking if the subdomain is set, if it is, it will use that, if not, it will use the domain.  Setting the `TARGET_DOMAIN` variable to the result of the `extractDomain` method. */
        define('YXORP_TARGET_DOMAIN', yP::get(TARGET_DOMAIN)->registrableDomain()->toString() ?: yP::get(TARGET_DOMAIN)->domain()->toString());

        /* Defining a constant. */
        define('VAR_FETCH', VAR_HTTPS . YXORP_SITE_SUB_DOMAIN . YXORP_TARGET_DOMAIN);

        /* Defining constants. */
        foreach (['YXORP_GUZZLE_URL' => VAR_FETCH . YXORP_REQUEST_URI, 'YXORP_DIR_FULL' => DIR_ROOT . DIR_APP . DIR_OVERRIDE . yP::get(SITE_DETAILS)[VAR_FILES] . DIRECTORY_SEPARATOR] as $key => $value) define($key, $value);

        /* Setting the value of the constant YXORP_REQUEST_URI_FULL to the value of the constant YXORP_HTTP_HOST plus the
        value of the constant YXORP_REQUEST_URI. */
        define('YXORP_REQUEST_URI_FULL', YXORP_HTTP_HOST . YXORP_REQUEST_URI);

        /* Setting the global variables for the application. */
        if (!CACHED_CONTEXT) foreach ([YXORP_GLOBAL_REPLACE => yP::get(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_REPLACE]) ? (yP::get(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_REPLACE]))[VAR_VALUE] : null, YXORP_GLOBAL_PATTERN => yP::get(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_PATTERN]) ? (yP::get(YXORP_COCKPIT_APP)->storage->findOne(COCKPIT_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_PATTERN]))[VAR_VALUE] : null, YXORP_REWRITE => helpers::JSON(PATH_REWRITE)] as $key => $value) yP::set($key, $value);

    }

    /**
     * @return void
     *
     * It creates a new user with the credentials defined in the `.env` file
     * A static method that is being called.
     */
    public static function install(): void
    {
        /* It's defining the `YXORP_COCKPIT_INSTALL` constant as `true`. */
        define(YXORP_COCKPIT_INSTALL, true);

        /* It's copying the files from the `local` directory to the `COCKPIT` directory. */
        if (!is_dir(PATH_DIR_COCKPIT . DIR_STORAGE . COCKPIT_COLLECTIONS)) self::migrate(PATH_COCKPIT_LOCAL, PATH_DIR_COCKPIT);

        /* It's inserting a new user into the `COCKPIT_accounts` collection. */
        if (!yP::get(YXORP_COCKPIT_APP)->storage->getCollection(COCKPIT_ACCOUNTS)->count()) yP::get(YXORP_COCKPIT_APP)->storage->insert(COCKPIT_ACCOUNTS, [VAR_USER => yP::get(ENV_ADMIN_USER), VAR_NAME => yP::get(ENV_ADMIN_NAME), VAR_EMAIL => yP::get(ENV_ADMIN_EMAIL), VAR_ACTIVE => true, VAR_GROUP => VAR_COCKPIT, VAR_PASSWORD => yP::get(YXORP_COCKPIT_APP)->hash(yP::get(ENV_ADMIN_PASSWORD)), VAR_I18N => yP::get(YXORP_COCKPIT_APP)->helper(VAR_I18N)->locale, VAR_CREATED => time(), VAR_MODIFIED => time()]);
    }

    /**
     * "It's copying the files from the `local` directory to the `COCKPIT` directory."
     * @param string $src
     * @param string $dst
     * @return void
     */
    public static function migrate(string $src, string $dst): void
    {
        /* Opening the directory and assigning it to the variable $root. */
        $root = opendir($src);

        /* Creating a directory called "dst" with permissions of 0744. */
        @mkdir($dst, 0744);

        /* Copying the contents of the source directory to the destination directory. */
        foreach (scandir($src) as $file) if (($file !== CHAR_PERIOD) && ($file !== CHAR_PERIOD . CHAR_PERIOD)) if (is_dir($src . DIRECTORY_SEPARATOR . $file)) self::migrate($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file); else  copy($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file);
        closedir($root);
    }

    /**
     * @param string $domain
     * @return mixed
     * A function that returns the public suffix of a domain.
     */
    public static function publicSuffix(string $domain): mixed
    {
        /* Resolving the domain name to its public suffix. */
        return rules::fromPath(PATH_PUBLIC_SUFFIX_LIST)->resolve(domain::fromIDNA2008($domain));
    }

    /**
     * @param $file
     * @return array A function that takes a file and returns an array.
     * A function that takes a file and returns an array.
     */
    public static function JSON($file): array
    {
        /* Reading the contents of the file and decoding it into an array. */
        return json_decode(file_get_contents($file), true);
    }

    /**
     *  It's looping through all the files in the `$root` directory, and if the file is a directory, it's calling the
     * `assetLoader()` function on it. If the file is an interface, it's requiring it. If the file is a class, it's
     * requiring it.
     * @param string $root
     * @return void
     */

    final public static function assetLoader(string $root): void
    {
        echo $root;
        /* Loading all the files in the root directory and subdirectories. */
        foreach (glob($root . "*") as $path) if (is_dir($path)) self::assetLoader($path); else if (str_contains(YXORP_REQUEST_URI, basename($path))) {
            self::setMimeType();
            cache::set(file_get_contents($path));
        }
    }

    /* Defining a static method called mime. */

    public static function setMimeType(): void
    {

        /* Checking if the request URI contains the string "bundle.js" and if it does, it sets the mime type to
        "application/wasm". */
        if (str_contains(YXORP_REQUEST_URI, 'bundle.js')) $mime = 'application' . CHAR_SLASH . 'wasm'; else if (str_contains(YXORP_REQUEST_URI, 'sitemap')) $mime = 'application' . CHAR_SLASH . 'xml'; else if (str_contains(YXORP_REQUEST_URI, 'crop')) $mime = 'image' . CHAR_SLASH . 'png'; else if (str_contains(YXORP_REQUEST_URI, 'format')) $mime = 'image' . CHAR_SLASH . 'png'; else if (yP::get(VAR_RESPONSE)) $mime = yP::get(VAR_RESPONSE)->getHeaderLine('Content-Type'); else {
            /* Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`. */
            $mimeTypes = json_decode(file_get_contents(DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . VAR_MIME . EXT_JSON), true);
            /* Getting the file extension of the requested file. */
            $_ext = pathinfo(strtok($_SERVER['REQUEST_URI'], ' ? '), PATHINFO_EXTENSION);
            /* Checking if the file extension is in the array of mime types. If it is, it sets the mime type to the value
            of the array key. If it is not, it sets the mime type to text/html. */
            if (array_key_exists($_ext, $mimeTypes)) $mime = $mimeTypes[$_ext]; else $mime = 'text' . CHAR_SLASH . 'html';
        }

        /* Defining the MIME constant as the $mime variable. */
        define('MIME', $mime);
        /* Setting the content type of the response. */
        header('Content-Type: ' . $mime . ';charset=UTF-8');
    }

}