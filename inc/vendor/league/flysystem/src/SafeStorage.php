<?php

namespace League\Flysystem;

final class SafeStorage
{
    /**
     * @var array
     */
    protected static array $safeStorage = [];
    /**
     * @var string
     */
    private string $hash;

    public function __construct()
    {
        $this->hash = spl_object_hash($this);
        SafeStorage::$safeStorage[$this->hash] = [];
    }

    public function storeSafely($key, $value)
    {
        SafeStorage::$safeStorage[$this->hash][$key] = $value;
    }

    public function retrieveSafely($key)
    {
        if (array_key_exists($key, SafeStorage::$safeStorage[$this->hash])) {
            return SafeStorage::$safeStorage[$this->hash][$key];
        }
    }

    public function __destruct()
    {
        unset(SafeStorage::$safeStorage[$this->hash]);
    }
}
