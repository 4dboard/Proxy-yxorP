<?php namespace yxorP\app\lib\http;

use JetBrains\PhpStorm\Pure;

class paramStore
{
    private array $data;
    private string|array|object|null $case_sensitive;

    public function __construct($parameters = array(), $case_sensitive = 0)
    {
        $this->data = (array)$parameters;
        $this->case_sensitive = $case_sensitive;
    }

    public function replace(array $data): void
    {
        $this->clear();
        foreach ($data as $key => $value) {
            $this->set($key, $value);
        }
    }

    public function clear(): void
    {
        $this->data = array();
    }

    public function set($key, $value, $replace = true): void
    {
        $key = $this->normalizeKey($key);
        if ($replace || !$this->has($key)) {
            $this->data[$key] = $value;
        } else if (is_array($this->data[$key])) {
            $this->data[$key][] = $value;
        } else {
            $this->data[$key] = array($this->data[$key], $value);
        }
    }

    private function normalizeKey($key)
    {
        return $this->case_sensitive ? $key : strtolower($key);
    }

    #[Pure] public function has($key): bool
    {
        return isset($this->data[$this->normalizeKey($key)]);
    }

    public function remove($key): void
    {
        unset($this->data[$this->normalizeKey($key)]);
    }

    #[Pure] public function get($key, $default = null)
    {
        $key = $this->normalizeKey($key);
        return $this->has($key) ? $this->data[$key] : $default;
    }

    public function all(): array
    {
        return $this->data;
    }

    public function __toString()
    {
        return json_encode($this->data);
    }
}
