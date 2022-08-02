<?php namespace yxorP\app\lib\http;

use function call_user_func_array;
use function is_callable;


class AppAware
{
    public App $app;
    public mixed $context;

    public function __construct(App $app, mixed $context = null)
    {
        $this->app = $app;
        $this->context = $context;
        $this->initialize();
    }

    protected function initialize()
    {
    }

    public function __call($name, $arguments)
    {
        if (is_callable([$this->app, $name])) {
            return call_user_func_array([$this->app, $name], $arguments);
        }
        return $this;
    }

    public function __invoke($helper)
    {
        return $this->app->helper($helper);
    }

    public function __get($name)
    {
        return $this->app[$name];
    }
}
