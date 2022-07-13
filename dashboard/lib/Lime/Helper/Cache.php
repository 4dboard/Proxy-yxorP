<?php

namespace Lime\Helper;

use Lime\Helper;
use RecursiveDirectoryIterator;
use function call_user_func;
use function file_exists;
use function file_get_contents;
use function file_put_contents;
use function is_callable;
use function is_string;
use function md5;
use function rtrim;
use function serialize;
use function strtotime;
use function substr;
use function sys_get_temp_dir;
use function time;
use function unlink;
use function unserialize;

class Cache extends Helper
{

    public $prefix = null;
    protected $cachePath = null;


    public function initialize()
    {
        $this->cachePath = rtrim(sys_get_temp_dir(), "/\\") . '/';
        $this->prefix = $this->app['app.name'];
    }

    public function getCachePath()
    {

        return $this->cachePath;
    }

    public function setCachePath($path)
    {
        if ($path) {
            $this->cachePath = rtrim($this->app->path($path), "/\\") . '/';
        }
    }

    public function write($key, $value, $duration = -1)
    {

        $expire = ($duration == -1) ? -1 : (time() + (is_string($duration) ? strtotime($duration) : $duration));

        $safe_var = [
            'expire' => $expire,
            'value' => serialize($value)
        ];

        file_put_contents($this->cachePath . md5($this->prefix . '-' . $key) . ".cache", serialize($safe_var));
    }

    public function read($key, $default = null)
    {

        $var = @file_get_contents($this->cachePath . md5($this->prefix . '-' . $key) . ".cache");

        if (!$var) {
            return $default;
        } else {

            $time = time();
            $var = unserialize($var);

            if (!isset($var['expire'])) {
                return $default;
            }

            if (($var['expire'] < $time) && $var['expire'] != -1) {
                $this->delete($key);
                return is_callable($default) ? call_user_func($default) : $default;
            }

            return unserialize($var['value']);
        }
    }

    public function delete($key)
    {

        $file = $this->cachePath . md5($this->prefix . '-' . $key) . ".cache";

        if (file_exists($file)) {
            @unlink($file);
        }

    }

    public function clear(): mixed
    {

        $iterator = new RecursiveDirectoryIterator($this->cachePath);

        foreach ($iterator as $file) {
            if ($file->isFile() && substr($file, -6) == ".cache") {
                @unlink($this->cachePath . $file->getFilename());
            }
        }
    }
}
