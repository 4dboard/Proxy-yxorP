<?php /* yxorP */

/* yxorP */

namespace yxorP\cache;

use cacheCoreException;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\NoReturn;
use RuntimeException;

require_once($GLOBALS['PLUGIN_DIR'] . "/cache/abstract.php");
require_once($GLOBALS['PLUGIN_DIR'] . "/cache/driver.php");
require_once($GLOBALS['PLUGIN_DIR'] . "/cache/exceptions/cacheCoreException.php");
require_once($GLOBALS['PLUGIN_DIR'] . "/cache/exceptions/cacheDriverException.php");
if (!function_exists("__c")) {

    function __c($storage = "", $option = array())
    {
        return cache($storage, $option);
    }
}

if (!function_exists("cache")) {
    function cache($storage = "auto", $config = array())
    {
        $storage = strtolower($storage);
        if (empty($config)) {
            $config = cache::$config;
        }

        if ($storage === "" || $storage === "auto") {
            $storage = cache::getAutoClass($config);
        }
        $instance = md5(json_encode($config, JSON_THROW_ON_ERROR) . $storage);
        if (!isset(cache_instances::$instances[$instance])) {
            $class = "cache_" . $storage;
            cache::required($storage);
            cache_instances::$instances[$instance] = new $class($config);
        }

        return cache_instances::$instances[$instance];
    }
}

class cache_instances
{

    public static array $instances = array();
}

/**
 * @property $tmp
 */
class cache
{

    public static bool $disabled = false;
    public static array $config = array(
        "storage" => "",
        "default_chmod" => 0777,

        "fallback" => "files",

        "securityKey" => "auto",
        "htaccess" => true,
        "path" => "",

        "memcache" => array(
            array("127.0.0.1", 11211, 1),

        ),

        "redis" => array(
            "host" => "127.0.0.1",
            "port" => "",
            "password" => "",
            "database" => "",
            "timeout" => "",
        ),

        "ssdb" => array(
            "host" => "127.0.0.1",
            "port" => 8888,
            "password" => "",
            "timeout" => "",
        ),

        "extensions" => array(),
    );
    protected static array $tmp = array();
    public mixed $instance;

    public function __construct($storage = "", $config = array())
    {
        if (empty($config)) {
            $config = self::$config;
        }
        $config['storage'] = $storage;

        $storage = strtolower($storage);
        if ($storage === "" || $storage === "auto") {
            $storage = self::getAutoClass($config);
        }

        $this->instance = cache($storage, $config);
    }


    public static function getAutoClass($config): string
    {
        if(extension_loaded('Zend OPcache')){
            $driver = "apc";
        }
        if (extension_loaded('apc') && ini_get('apc.enabled') && !str_contains(PHP_SAPI, "CGI")) {
            $driver = "apc";
        } else if (class_exists("memcached")) {
            $driver = "memcached";
        } elseif (extension_loaded('wincache') && function_exists("wincache_ucache_set")) {
            $driver = "wincache";
        } elseif (extension_loaded('xcache') && function_exists("xcache_get")) {
            $driver = "xcache";
        } else if (function_exists("memcache_connect")) {
            $driver = "memcache";
        } else if (class_exists("Redis")) {
            $driver = "redis";
        } else {
            $driver = "files";
        }

        return $driver;
    }

    /**
     * @throws cacheCoreException
     */
    public static function getPath($skip_create_path = false, $config): bool|string
    {
        if (!isset($config['path']) || $config['path'] === '') {
            if (self::isPHPModule()) {
                $tmp_dir = ini_get('upload_tmp_dir') ?: sys_get_temp_dir();
                $path = $tmp_dir;
            } else {
                $path = isset($_SERVER['DOCUMENT_ROOT']) ? rtrim($_SERVER['DOCUMENT_ROOT'], "/") . "/../" : rtrim(__DIR__, "/") . "/";
            }

            if (self::$config['path'] !== "") {
                $path = $config['path'];
            }

        } else {
            $path = $config['path'];
        }

        $securityKey = array_key_exists('securityKey',
            $config) ? $config['securityKey'] : "";
        if ($securityKey === "" || $securityKey === "auto") {
            $securityKey = self::$config['securityKey'];
            if ($securityKey === "auto" || $securityKey === "") {
                $securityKey = isset($_SERVER['HTTP_HOST']) ? preg_replace('/^www./',
                    '', strtolower($_SERVER['HTTP_HOST'])) : "default";
            }
        }
        if ($securityKey !== "") {
            $securityKey .= "/";
        }

        $securityKey = self::cleanFileName($securityKey);

        $full_path = $path . "/" . $securityKey;
        $full_pathx = md5($full_path);
        if ($skip_create_path === false && !isset(self::$tmp[$full_pathx])) {

            if (!@file_exists($full_path) || !@is_writable($full_path)) {
                if (!@file_exists($full_path) && !mkdir($full_path, self::__setChmodAuto($config)) && !is_dir($full_path)) {
                    throw new RuntimeException(sprintf('Directory "%s" was not created', $full_path));
                }
                if (!@is_writable($full_path)) {
                    @chmod($full_path, self::__setChmodAuto($config));
                }
                if (!@file_exists($full_path) || !@is_writable($full_path)) {
                    throw new cacheCoreException("PLEASE CREATE OR CHMOD " . $full_path . " - 0777 OR ANY WRITABLE PERMISSION!", 92);
                }
            }
            self::$tmp[$full_pathx] = true;
            try {
                self::htaccessGen($full_path, array_key_exists('htaccess',
                    $config) ? $config['htaccess'] : false);
            } catch (cacheCoreException $e) {
            }
        }

        return realpath($full_path);

    }

    public static function isPHPModule(): bool
    {
        if (PHP_SAPI === "apache2handler") {
            return true;
        }

        if (str_contains(PHP_SAPI, "handler")) {
            return true;
        }
        return false;
    }

    public static function cleanFileName($filename): array|string|null
    {
        $regex = array(
            '/[?\[\]\/\\\=<>:;,\'\"&#*()|~`!{}]/',
            '/\.$/',
            '/^\./',
        );
        $replace = array('-', '', '');
        return preg_replace($regex, $replace, $filename);
    }

    public static function __setChmodAuto($config)
    {
        if (!isset($config['default_chmod']) || $config['default_chmod'] === "" || is_null($config['default_chmod'])) {
            return 0777;
        }

        return $config['default_chmod'];
    }

    /**
     * @throws cacheCoreException
     */
    protected static function htaccessGen($path, $create = true): void
    {

        if ($create === true) {
            if (!is_writable($path) && !chmod($path, 0777)) {
                throw new cacheCoreException("PLEASE CHMOD " . $path . " - 0777 OR ANY WRITABLE PERMISSION!", 92);
            }

            if (!file_exists($path . "/.htaccess")) {

                $html = "order deny, allow \r\n
deny from all \r\n
allow from 127.0.0.1";

                $f = @fopen($path . "/.htaccess", 'wb+');
                if (!$f) {
                    throw new cacheCoreException("PLEASE CHMOD " . $path . " - 0777 OR ANY WRITABLE PERMISSION!", 92);
                }
                fwrite($f, $html);
                fclose($f);
            }
        }

    }

    public static function setup($name, $value = ""): void
    {
        if (is_array($name)) {
            self::$config = $name;
        } else {
            self::$config[$name] = $value;
        }
    }

    #[NoReturn] public static function debug($something): void
    {
        echo "Starting Debugging ...<br>\r\n ";
        if (is_array($something)) {
            echo "<pre>";
            print_r($something);
            echo "</pre>";
            var_dump($something);
        } else {
            echo $something;
        }
        echo "\r\n<br> Ended";
        exit;
    }

    public static function required($class): void
    {
        require_once($GLOBALS['PLUGIN_DIR'] . "/cache/drivers/" . $class . ".php");
    }

    #[ArrayShape(["os" => "string", "php" => "string", "system" => "string", "unique" => "string"])] protected static function getOS(): array
    {
        return array(
            "os" => PHP_OS,
            "php" => PHP_SAPI,
            "system" => php_uname(),
            "unique" => md5(php_uname() . PHP_OS . PHP_SAPI),
        );
    }


    public function __call($name, $args)
    {
        return call_user_func_array(array($this->instance, $name), $args);
    }
}
