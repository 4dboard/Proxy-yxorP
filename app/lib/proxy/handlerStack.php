<?php namespace yxorP\app\lib\proxy;

use InvalidArgumentException;
use LogicException;
use yxorP\app\lib\psr\http\message\requestInterface;

class handlerStack
{
    private $handler;
    private $stack = [];
    private $cached;

    public function __construct(callable $handler = null)
    {
        $this->handler = $handler;
    }

    public static function create(callable $handler = null)
    {
        $stack = new self($handler ?: choose_handler());
        $stack->push(middleware::httpErrors(), 'http_errors');
        $stack->push(middleware::redirect(), 'allow_redirects');
        $stack->push(middleware::cookies(), 'cookies');
        $stack->push(middleware::prepareBody(), 'prepare_body');
        return $stack;
    }

    public function push(callable $middleware, $name = '')
    {
        $this->stack[] = [$middleware, $name];
        $this->cached = null;
    }

    public function __invoke(requestInterface $request, array $options)
    {
        $handler = $this->resolve();
        return $handler($request, $options);
    }

    public function resolve()
    {
        if (!$this->cached) {
            if (!($prev = $this->handler)) {
                throw new LogicException('No handler has been specified');
            }
            foreach (array_reverse($this->stack) as $fn) {
                $prev = $fn[0]($prev);
            }
            $this->cached = $prev;
        }
        return $this->cached;
    }

    public function __toString()
    {
        $depth = 0;
        $stack = [];
        if ($this->handler) {
            $stack[] = "0) Handler: " . $this->debugCallable($this->handler);
        }
        $result = '';
        foreach (array_reverse($this->stack) as $tuple) {
            $depth++;
            $str = "{$depth}) Name: '{$tuple[1]}', ";
            $str .= "Function: " . $this->debugCallable($tuple[0]);
            $result = "> {$str}\n{$result}";
            $stack[] = $str;
        }
        foreach (array_keys($stack) as $k) {
            $result .= "< {$stack[$k]}\n";
        }
        return $result;
    }

    public function setHandler(callable $handler)
    {
        $this->handler = $handler;
        $this->cached = null;
    }

    public function hasHandler()
    {
        return (bool)$this->handler;
    }

    public function unshift(callable $middleware, $name = null)
    {
        array_unshift($this->stack, [$middleware, $name]);
        $this->cached = null;
    }

    public function before($findName, callable $middleware, $withName = '')
    {
        $this->splice($findName, $withName, $middleware, true);
    }

    public function after($findName, callable $middleware, $withName = '')
    {
        $this->splice($findName, $withName, $middleware, false);
    }

    public function remove($remove)
    {
        $this->cached = null;
        $idx = is_callable($remove) ? 0 : 1;
        $this->stack = array_values(array_filter($this->stack, function ($tuple) use ($idx, $remove) {
            return $tuple[$idx] !== $remove;
        }));
    }

    private function debugCallable($fn)
    {
        if (is_string($fn)) {
            return "callable({$fn})";
        }
        if (is_array($fn)) {
            return is_string($fn[0]) ? "callable({$fn[0]}::{$fn[1]})" : "callable(['" . get_class($fn[0]) . "', '{$fn[1]}'])";
        }
        return 'callable(' . spl_object_hash($fn) . ')';
    }

    private function splice($findName, $withName, callable $middleware, $before)
    {
        $this->cached = null;
        $idx = $this->findByName($findName);
        $tuple = [$middleware, $withName];
        if ($before) {
            if ($idx === 0) {
                array_unshift($this->stack, $tuple);
            } else {
                $replacement = [$tuple, $this->stack[$idx]];
                array_splice($this->stack, $idx, 1, $replacement);
            }
        } elseif ($idx === count($this->stack) - 1) {
            $this->stack[] = $tuple;
        } else {
            $replacement = [$this->stack[$idx], $tuple];
            array_splice($this->stack, $idx, 1, $replacement);
        }
    }

    private function findByName($name)
    {
        foreach ($this->stack as $k => $v) {
            if ($v[1] === $name) {
                return $k;
            }
        }
        throw new InvalidArgumentException("Middleware not found: $name");
    }
}
