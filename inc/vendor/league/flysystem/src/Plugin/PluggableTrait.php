<?php

namespace League\Flysystem\Plugin;

use BadMethodCallException;
use League\Flysystem\FilesystemInterface;
use League\Flysystem\PluginInterface;
use LogicException;

trait PluggableTrait
{
    /**
     * @var array
     */
    protected array $plugins = [];

    /**
     * Register a plugin.
     *
     * @param PluginInterface $plugin
     *
     * @return $this
     * @throws LogicException
     *
     */
    public function addPlugin(PluginInterface $plugin): static
    {
        if (!method_exists($plugin, 'handle')) {
            throw new LogicException(get_class($plugin) . ' does not have a handle method.');
        }

        $this->plugins[$plugin->getMethod()] = $plugin;

        return $this;
    }

    /**
     * Plugins pass-through.
     *
     * @param string $method
     * @param array $arguments
     *
     * @return mixed
     * @throws BadMethodCallException
     *
     */
    public function __call($method, array $arguments)
    {
        try {
            return $this->invokePlugin($method, $arguments, $this);
        } catch (PluginNotFoundException $e) {
            throw new BadMethodCallException(
                'Call to undefined method '
                . get_class($this)
                . '::' . $method
            );
        }
    }

    /**
     * Find a specific plugin.
     *
     * @param string $method
     *
     * @return PluginInterface
     * @throws PluginNotFoundException
     *
     */
    protected function findPlugin($method): PluginInterface
    {
        if (!isset($this->plugins[$method])) {
            throw new PluginNotFoundException('Plugin not found for method: ' . $method);
        }

        return $this->plugins[$method];
    }

    /**
     * Invoke a plugin by method name.
     *
     * @param string $method
     * @param array $arguments
     * @param FilesystemInterface $filesystem
     *
     * @return mixed
     * @throws PluginNotFoundException
     *
     */
    protected function invokePlugin($method, array $arguments, FilesystemInterface $filesystem): mixed
    {
        $plugin = $this->findPlugin($method);
        $plugin->setFilesystem($filesystem);
        $callback = [$plugin, 'handle'];

        return call_user_func_array($callback, $arguments);
    }
}
