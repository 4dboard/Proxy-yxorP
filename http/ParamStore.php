<?php namespace yxorP\Http;

use JetBrains\PhpStorm\Pure;

class ParamStore
{
    private array $data;
    private mixed $case_sensitive;

    public function __construct($parameters = array(), $case_sensitive = false)
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

    #[Pure] public function has($key): bool
    {
        return isset($this->data[$this->normalizeKey($key)]);
    }

    public function remove($key): void
    {
        unset($this->data[$this->normalizeKey($key)]);
    }

    public function all(): array
    {
        return $this->data;
    }

    private function normalizeKey($key)
    {
        return $this->case_sensitive ? $key : strtolower($key);
    }
}