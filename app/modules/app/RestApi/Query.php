<?php

namespace yxorP\app\modules\app\RestApi;

use yxorP\app\lib\http\App;
use yxorP\app\lib\http\appAware;
use yxorP\app\lib\http\appAware;
use function call_user_func;
use function is_callable;

/**
 * @property App $app
 * @property App $app
 * @property App $app
 * @property App $app
 * @property App $app
 */
class query extends appAware
{

    protected array $endpoints = [];
    protected bool $initialized = false;

    public function process(string $path, string $method = 'GET', ?string $apiKey = null)
    {

        if (!$this->initialized) {
            $this->init();
        }

        $handler = false;
        $params = [];
        $idx = $method;

        foreach ($this->endpoints as $pattern => $endpoint) {

            if ((isset($endpoint[$method]) || isset($endpoint['*'])) && $this->isPathMatching($path, $pattern, $params)) {
                $idx = isset($endpoint[$method]) ? $method : '*';
                $handler = $endpoint[$idx];
                break;
            }
        }

        if ($handler && is_callable($handler)) return call_user_func($handler, $params, $this->app);

        // custom file based route
        // normalize path
        if (str_contains($path, '../')) $path = implode('/', array_filter(explode('/', $path), fn($s) => trim($s, '.')));

        if ($file = $this->app->path('#config:api/' . trim($path, '/') . '.php')) {

            $handler = (function () use ($file) {
                return include($file);
            })->bindTo($this->app, $this->app);

            return $handler();
        }

        return false;
    }

    public function init()
    {

        if ($this->initialized) return;

        $this->app->trigger('restApi.config', [$this]);
        $this->initialized = true;
    }

    protected function isPathMatching($path, $pattern, &$params = null): bool
    {

        $params = [];

        if ($path === $pattern) return true;

        $regex = $this->getRegex($pattern);

        if (preg_match($regex, $path, $matches)) {

            $params = array_intersect_key(
                $matches, array_flip(
                    array_filter(array_keys($matches), 'is_string')
                )
            );

            return true;
        }

        return false;
    }

    protected function getRegex($pattern): bool|string
    {

        if (preg_match('/[^-:\/_{}()a-zA-Z\d]/', $pattern)) return false; // Invalid pattern

        // Turn "(/)" into "/?"
        $pattern = preg_replace('#\(/\)#', '/?', $pattern);

        // Create capture group for ":parameter"
        $allowedParamChars = '[a-zA-Z0-9\_\-]+';
        $pattern = preg_replace(
            '/:(' . $allowedParamChars . ')/',   # Replace ":parameter"
            '(?<$1>' . $allowedParamChars . ')', # with "(?<parameter>[a-zA-Z0-9\_\-]+)"
            $pattern
        );

        // Create capture group for '{parameter}'
        $pattern = preg_replace(
            '/{(' . $allowedParamChars . ')}/',    # Replace "{parameter}"
            '(?<$1>' . $allowedParamChars . ')', # with "(?<parameter>[a-zA-Z0-9\_\-]+)"
            $pattern
        );

        // Add start and end matching
        return "@^" . $pattern . "$@D";
    }

    public function addEndPoint(string $path, array $methods = [])
    {

        $this->endpoints[$path] = $methods;
    }
}
