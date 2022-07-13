<?php

namespace League\Flysystem;

class Config
{
    /**
     * @var array
     */
    protected array $settings = [];

    /**
     * @var Config|null
     */
    protected ?Config $fallback;

    /**
     * Constructor.
     *
     * @param array $settings
     */
    public function __construct(array $settings = [])
    {
        $this->settings = $settings;
    }

    /**
     * Get a setting.
     *
     * @param string $key
     * @param mixed|null $default
     *
     * @return mixed config setting or default when not found
     */
    public function get(string $key, mixed $default = null): mixed
    {
        if (!array_key_exists($key, $this->settings)) {
            return $this->getDefault($key, $default);
        }

        return $this->settings[$key];
    }

    /**
     * Try to retrieve a default setting from a config fallback.
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed config setting or default when not found
     */
    protected function getDefault(string $key, mixed $default): mixed
    {
        if (!$this->fallback) {
            return $default;
        }

        return $this->fallback->get($key, $default);
    }

    /**
     * Check if an item exists by key.
     *
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool
    {
        if (array_key_exists($key, $this->settings)) {
            return true;
        }

        return $this->fallback instanceof Config
            ? $this->fallback->has($key)
            : false;
    }

    /**
     * Set a setting.
     *
     * @param string $key
     * @param mixed $value
     *
     * @return $this
     */
    public function set(string $key, mixed $value): static
    {
        $this->settings[$key] = $value;

        return $this;
    }

    /**
     * Set the fallback.
     *
     * @param Config $fallback
     *
     * @return $this
     */
    public function setFallback(Config $fallback): static
    {
        $this->fallback = $fallback;

        return $this;
    }
}
