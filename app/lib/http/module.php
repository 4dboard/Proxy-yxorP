<?php namespace yxorP\app\lib\http;

use Closure;
use function call_user_func_array;
use function is_callable;

class module extends appAware
{
    public ?string $_dir = null;
    public ?string $_bootfile = null;
    protected $apis = [];

    public function bindApp(App $app)
    {
        $this->app = $app;
        foreach ($this->apis as $name => $value) {
            if ($value instanceof Closure) {
                $value = $value->bindTo($this, $this);
            }
            $this->apis[$name] = $value;
        }
    }

    public function __get($name)
    {
        return isset($this->apis[$name]) ? $this->apis[$name] : null;
    }

    public function __set($name, $value)
    {
        $this->extend([$name => $value]);
    }

    public function extend(array $api)
    {
        foreach ($api as $name => $value) {
            if ($value instanceof Closure) {
                $value = $value->bindTo($this, $this);
                $this->apis[$name] = $value;
            } else {
                $this->{$name} = $value;
            }
        }
    }

    public function __isset($name)
    {
        return isset($this->apis[$name]);
    }

    public function __unset($name)
    {
        unset($this->apis[$name]);
    }

    public function __call($name, $arguments)
    {
        if (isset($this->apis[$name]) && is_callable($this->apis[$name])) {
            return call_user_func_array($this->apis[$name], $arguments);
        }
        if (isset($this->apis['__call']) && is_callable($this->apis['__call'])) {
            return call_user_func_array($this->apis['__call'], [$name, $arguments]);
        }
        return null;
    }
}

