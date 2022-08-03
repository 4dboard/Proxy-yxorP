<?php

namespace yxorP\app\lib\http\helper;

use DirectoryIterator;
use Exception;
use FilesystemIterator;
use yxorP\app\lib\http\App;
use yxorP\app\lib\http\helperAware;
use yxorp\app\lib\http\helpers;
use function call_user_func_array;
use function count;
use function dirname;
use function explode;
use function file_exists;
use function func_get_args;
use function getcwd;
use function is_dir;
use function is_file;
use function is_link;
use function mkdir;
use function rename;
use function strpos;

/**
 * @property App $app
 */
class filesystem extends helperAware
{

    /**
     * @param string $path
     * @return ?string
     */
    public function path(string $path): ?string
    {
        return $this->app->path($path);
    }

    /**
     * @return array
     */
    public function ls(): array
    {
        $pattern = null;

        $args = func_get_args();
        $lst = [];

        switch (count($args)) {
            case 0:
                $dir = getcwd();
                break;
            case 1:
                $dir = (strpos($args[0], ':')) ? $this->app->path($args[0]) : $args[0];
                break;
            case 2:
                $pattern = $args[0];
                $dir = (strpos($args[1], ':')) ? $this->app->path($args[1]) : $args[1];
                break;
            default:
                return $lst;
        }

        if (!$dir || !file_exists($dir)) {
            return $lst;
        }

        $iter = new DirectoryIterator($dir);

        foreach ($iter as $file) {
            if ($file->isDot()) continue;
            if ($pattern && !helpers::fnmatch($pattern, $file->getBasename())) continue;
            $lst[] = $file->isDir() ? clone $file : new FileObject($file->getRealPath());
        }

        return $lst;
    }

    /**
     * @return mixed
     */
    public function read(): mixed
    {

        $args = func_get_args();

        if (!count($args)) return false;

        $args[0] = strpos($args[0], ':') ? $this->app->path($args[0]) : $args[0];

        return $args[0] ? call_user_func_array('file_get_contents', $args) : '';
    }

    /**
     * @return mixed
     */
    public function write(): mixed
    {

        $args = func_get_args();

        if (!count($args)) return false;

        if (str_contains($args[0], ':') && !$this->app->isAbsolutePath($args[0])) {

            list($namespace, $additional) = explode(":", $args[0], 2);

            if (!$this->app->path("{$namespace}:")) return false;

            $args[0] = $this->app->path("{$namespace}:") . $additional;
        }

        // create file path
        if (!file_exists($args[0])) $this->mkdir(dirname($args[0]));

        return call_user_func_array('file_put_contents', $args);
    }

    /**
     * @param string $path
     * @param int $mode
     * @return bool
     */
    public function mkdir(string $path, int $mode = 0755): bool
    {

        if (str_contains($path, ':') && !$this->app->isAbsolutePath($path)) {
            list($namespace, $additional) = explode(':', $path, 2);
            $dir = $this->app->path("{$namespace}:") . $additional;
        } else  $dir = $path;

        if (!is_dir($dir) && !@mkdir($dir, $mode, true)) return false;

        return true;
    }

    /**
     * @param string $path
     * @param string $newpath
     * @param bool|true $overwrite
     * @return bool
     * @throws Exception
     */
    public function rename(string $path, string $newpath, bool $overwrite = true): bool
    {
        $path = $this->app->path($path);

        if (!$overwrite && file_exists($newpath)) return false; elseif (!file_exists($path)) return false;
        else {
            $this->mkdir(dirname($newpath));
            $this->delete($newpath);
            if (!@rename($path, $newpath)) return false;
        }

        return true;
    }

    /**
     * @param string $path
     * @throws Exception
     */
    public function delete(string $path): void
    {

        $path = $this->app->path($path);

        if (is_null($path)) return;

        if (is_file($path) || is_link($path)) {
            $func = DIRECTORY_SEPARATOR === '\\' && is_dir($path) ? 'rmdir' : 'unlink';
            if (!@$func($path)) throw new Exception("Unable to delete: {$path}.");
        } elseif (is_dir($path)) {
            foreach (new FilesystemIterator($path) as $item) $this->delete($item->getRealPath());
            if (!@rmdir($path)) throw new Exception("Unable to delete directory: {$path}.");
        }
    }

}

