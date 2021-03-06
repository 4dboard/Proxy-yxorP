<?php

namespace yxorP\app\modules\system\helper;

use Closure;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Throwable;
use yxorP\app\lib\html\store;
use yxorP\app\lib\http\App;
use yxorP\app\lib\http\helperAware;
use yxorP\app\lib\http\store;

/**
 * @property App $app
 * @property App $app
 * @property App $app
 * @property App $app
 * @property mixed $name
 */
class system extends helperAware
{

    public function try(callable $callback, $rescue = null, $report = true)
    {
        try {
            return $callback();
        } catch (Throwable $e) {
            store::handler(YXORP_APP)->dataStorage->save('system/log', ['message' => $e->getMessage(), 'type' => 'error', 'channel' => $this->name, 'context' => null, 'timestamp' => time(), 'datetime' => date('Y-m-d G:i:s T', time())]);
            return $rescue instanceof Closure ? $rescue($e) : $rescue;
        }
    }

    public function report()
    {
        // to be implemented
    }

    public function flushCache()
    {

        $dirs = ['#cache:', '#tmp:'];
        $fs = $this->app->helper('fs');

        foreach ($dirs as $dir) {

            $path = $this->app->path($dir);
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);

            foreach ($files as $file) {

                if (!$file->isFile() || preg_match('/(\.gitkeep|\.gitignore|index\.html)$/', $file)) continue;

                @unlink($file->getRealPath());
            }

            $fs->removeEmptySubFolders($path);
        }

        $this->app->memory->flush();
        $this->app->trigger('app.system.cache.flush');

        if (function_exists('opcache_reset')) {
            opcache_reset();
        }
    }

}
