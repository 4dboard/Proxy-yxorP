<?php

namespace yxorp\app\modules\system\Helper;

use const yxorP\app\lib\lime\helper;

class api extends \

helper
{

    protected
    array $keys = [];

    public
    function getKey(string $key)
    {
        return $this->keys[$key] ?? null;
    }

    public
    function keys(): array
    {
        return array_keys($this->keys);
    }

    protected
    function initialize()
    {

        $this->keys = $this->app['debug'] ? $this->cache(false) : $this->app->memory->get('app.api.keys', function () {
            return $this->cache();
        });
    }

    public
    function cache(bool $persistent = true): array
    {

        $cache = [];
        $keys = $this->app->dataStorage->find('system/api_keys')->toArray();

        foreach ($keys as $key) {
            $cache[$key['key']] = $key;
        }

        if ($persistent) {
            $this->app->memory->set('app.api.keys', $cache);
        }

        return $cache;
    }
}
