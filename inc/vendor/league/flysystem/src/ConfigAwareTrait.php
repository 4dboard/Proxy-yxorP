<?php

namespace League\Flysystem;

/**
 * @internal
 */
trait ConfigAwareTrait
{
    /**
     * @var Config
     */
    protected Config $config;

    /**
     * Get the Config.
     *
     * @return Config config object
     */
    public function getConfig(): Config
    {
        return $this->config;
    }

    /**
     * Set the config.
     *
     * @param Config|array|null $config
     */
    protected function setConfig($config)
    {
        $this->config = $config ? Util::ensureConfig($config) : new Config;
    }

    /**
     * Convert a config array to a Config object with the correct fallback.
     *
     * @param array $config
     *
     * @return Config
     */
    protected function prepareConfig(array $config): Config
    {
        $config = new Config($config);
        $config->setFallback($this->getConfig());

        return $config;
    }
}
