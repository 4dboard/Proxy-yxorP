<?php /* yxorP */


use JetBrains\PhpStorm\Pure;
use yxorP\cache\Cache;
use function yxorP\cache\cache;

/**
 * @property $option
 */
abstract class BaseCache
{


    public array $tmp = array();


    public array $config = array();


    public bool $fallback = false;


    public $instant;

    public function stats($option = array())
    {
        return $this->driver_stats($option);
    }

    public function clean($option = array())
    {
        return $this->driver_clean($option);
    }

    /**
     * @throws cacheCoreException
     */
    public function search($query)
    {
        if (method_exists($this, "driver_search")) {
            return $this->driver_search($query);
        }
        throw new cacheCoreException('Search method is not supported by this driver.');
    }

    public function setMulti($list = array()): void
    {
        foreach ($list as $array) {
            $this->set($array[0], $array[1] ?? 0,
                $array[2] ?? array());
        }
    }

    public function set($keyword, $value = "", $time = 0, $option = array()): bool
    {

        if ((int)$time <= 0) {


            $time = 3600 * 24 * 365 * 5;
        }

        if (Cache::$disabled === true) {
            return false;
        }
        $object = array(
            "value" => $value,
            "write_time" => time(),
            "expired_in" => $time,
            "expired_time" => time() + (int)$time,
        );

        return $this->driver_set($keyword, $object, $time, $option);

    }

    public function getMulti($list = array()): array
    {
        $res = array();
        foreach ($list as $array) {
            $name = $array[0];
            $res[$name] = $this->get($name,
                $array[1] ?? array());
        }
        return $res;
    }

    public function get($keyword, $option = array())
    {


        if (Cache::$disabled === true) {
            return null;
        }

        $object = $this->driver_get($keyword, $option);

        if ($object == null) {
            return null;
        }

        $value = $object['value'] ?? null;
        return isset($option['all_keys']) && $option['all_keys'] ? $object : $value;
    }

    public function getInfoMulti($list = array()): array
    {
        $res = array();
        foreach ($list as $array) {
            $name = $array[0];
            $res[$name] = $this->getInfo($name,
                $array[1] ?? array());
        }
        return $res;
    }

    public function getInfo($keyword, $option = array())
    {
        $object = $this->driver_get($keyword, $option);

        if ($object == null) {
            return null;
        }
        return $object;
    }

    public function deleteMulti($list = array()): void
    {
        foreach ($list as $item) {
            if (is_array($item) && count($item) === 2) {
                $this->delete($item[0], $item[1]);
            }
        }
    }

    public function delete($keyword, $option = array())
    {
        return $this->driver_delete($keyword, $option);
    }

    public function isExistingMulti($list = array()): array
    {
        $res = array();
        foreach ($list as $array) {
            $name = $array[0];
            $res[$name] = $this->isExisting($name);
        }
        return $res;
    }

    public function isExisting($keyword): ?bool
    {
        if (method_exists($this, "driver_isExisting")) {
            return $this->driver_isExisting($keyword);
        }

        $data = $this->get($keyword);
        return $data != null;

    }

    public function incrementMulti($list = array()): array
    {
        $res = array();
        foreach ($list as $array) {
            $name = $array[0];
            $res[$name] = $this->increment($name, $array[1],
                $array[2] ?? array());
        }
        return $res;
    }

    public function increment($keyword, $step = 1, $option = array()): ?bool
    {
        $object = $this->get($keyword, array('all_keys' => true));
        if ($object == null) {
            return false;
        }

        $value = (int)$object['value'] + (int)$step;
        $time = $object['expired_time'] - time();
        $this->set($keyword, $value, $time, $option);
        return true;
    }

    public function decrementMulti($list = array()): array
    {
        $res = array();
        foreach ($list as $array) {
            $name = $array[0];
            $res[$name] = $this->decrement($name, $array[1],
                $array[2] ?? array());
        }
        return $res;
    }

    public function decrement($keyword, $step = 1, $option = array()): ?bool
    {
        $object = $this->get($keyword, array('all_keys' => true));
        if ($object == null) {
            return false;
        }

        $value = (int)$object['value'] - (int)$step;
        $time = $object['expired_time'] - time();
        $this->set($keyword, $value, $time, $option);
        return true;
    }

    public function touchMulti($list = array()): array
    {
        $res = array();
        foreach ($list as $array) {
            $name = $array[0];
            $res[$name] = $this->touch($name, $array[1],
                $array[2] ?? array());
        }
        return $res;
    }

    public function touch($keyword, $time = 300, $option = array()): ?bool
    {
        $object = $this->get($keyword, array('all_keys' => true));
        if ($object == null) {
            return false;
        }

        $value = $object['value'];
        $time = $object['expired_time'] - time() + $time;
        $this->set($keyword, $value, $time, $option);
        return true;
    }

    public function setup($config_name, $value = ""): void
    {

        if (is_array($config_name)) {
            $this->config = $config_name;
        } else {
            $this->config[$config_name] = $value;
        }

    }


    public function __get($name)
    {
        return $this->get($name);
    }


    /**
     * @throws cacheCoreException
     */
    public function __set($name, $v)
    {
        if (isset($v[1]) && is_numeric($v[1])) {
            return $this->set($name, $v[0], $v[1],
                $v[2] ?? array());
        }

        throw new cacheCoreException("Example ->$name = array('VALUE', 300);", 98);
    }


    public function __call($name, $args)
    {
        return call_user_func_array(array($this->instant, $name), $args);
    }

    /**
     * @throws cacheCoreException
     */
    public function systemInfo()
    {
        $backup_option = $this->option;
        if (count($this->option("system")) == 0) {
            $this->option['system']['driver'] = "files";
            $this->option['system']['drivers'] = array();
            $dir = @opendir(@$GLOBALS['PLUGIN_DIR'] . "/cache/drivers/");
            if (!$dir) {
                throw new cacheCoreException("Can't open file dir ext", 100);
            }

            while ($file = @readdir($dir)) {
                if ($file !== "." && $file !== ".." && str_contains($file, ".php")
                ) {
                    require_once(@$GLOBALS['PLUGIN_DIR'] . "/cache/drivers/" . $file);
                    $namex = str_replace(".php", "", $file);
                    $class = "cache_" . $namex;
                    $this->option['skipError'] = true;
                    $driver = new $class($this->option);
                    $driver->option = $this->option;
                    if ($driver->checkdriver()) {
                        $this->option['system']['drivers'][$namex] = true;
                        $this->option['system']['driver'] = $namex;
                    } else {
                        $this->option['system']['drivers'][$namex] = false;
                    }
                }
            }


            if ($this->option['system']['drivers']['sqlite'] == true) {
                $this->option['system']['driver'] = "sqlite";
            }


        }

        try {
            $example = new cache_example($this->config);
        } catch (Exception $e) {
        }
        $this->option("path", $example->getPath(true));
        $this->option = $backup_option;
        return $this->option;
    }

    public function getPath($create_path = false)
    {
        try {
            return Cache::getPath($create_path, $this->config);
        } catch (cacheCoreException $e) {
        }
    }

    protected function backup()
    {
        return cache(Cache::$config['fallback']);
    }

    protected function required_extension($name): void
    {
        require_once(@$GLOBALS['PLUGIN_DIR'] . "/cache/_extensions/" . $name);
    }

    /**
     * @throws cacheCoreException
     */
    protected function readfile($file): bool|string
    {
        if (function_exists("file_get_contents")) {
            return file_get_contents($file);
        }

        $string = "";

        $file_handle = @fopen($file, 'rb');
        if (!$file_handle) {
            throw new cacheCoreException("Can't Read File", 96);

        }
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            $string .= $line;
        }
        fclose($file_handle);

        return $string;
    }

    protected function encode($data): string
    {
        return serialize($data);
    }

    protected function decode($value)
    {
        $x = @unserialize($value);
        if ($x == false) {
            return $value;
        }

        return $x;
    }

    /**
     * @throws cacheCoreException
     */
    protected function htaccessGen($path = ""): void
    {
        if (($this->option("htaccess") == true) && !file_exists($path . "/.htaccess")) {

            $html = "order deny, allow \r\n
deny from all \r\n
allow from 127.0.0.1";

            $f = @fopen($path . "/.htaccess", 'wb+');
            if (!$f) {
                throw new cacheCoreException("Can't create .htaccess", 97);
            }
            fwrite($f, $html);
            fclose($f);


        }
    }

    #[Pure] protected function isPHPModule(): bool
    {
        return Cache::isPHPModule();
    }

    protected function isExistingDriver($class): bool
    {
        if (file_exists(@$GLOBALS['PLUGIN_DIR'] . "/cache/drivers/" . $class . ".php")) {
            require_once(@$GLOBALS['PLUGIN_DIR'] . "/cache/drivers/" . $class . ".php");
            if (class_exists("cache_" . $class)) {
                return true;
            }
        }

        return false;
    }


    #[Pure] protected function __setChmodAuto()
    {
        return Cache::__setChmodAuto($this->config);
    }
}