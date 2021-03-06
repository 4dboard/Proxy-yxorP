<?php use yxorP\app\lib\file\Flysystem\filesystem;
use yxorP\app\lib\file\Flysystem\mountManager;

class fileStorage
{
    protected array $config = [];
    protected array $storages = [];
    protected mountManager $manager;

    public function __construct(array $config = [])
    {
        $this->manager = new mountManager();
        foreach ($config as $name => $_config) {
            $this->addStorage($name, $_config);
        }
    }

    public function addStorage(string $name, array $config): self
    {
        $this->config[$name] = $config;
        if (isset($config['mount']) && $config['mount']) {
            $this->initStorage($name);
        }
        return $this;
    }

    /**
     * @throws ReflectionException
     */
    protected function initStorage(string $name): filesystem
    {
        static $mountMethod;
        if (!$mountMethod) {
            $mountMethod = new ReflectionMethod('yxorP\app\lib\file\Flysystem\mountManager', 'mountFilesystem');
        }
        $config = $this->config[$name];
        $adapter = new ReflectionClass($config['adapter']);
        $this->storages[$name] = new filesystem($adapter->newInstanceArgs($config['args'] ?: []));
        if (isset($config['mount']) && $config['mount']) {
            $mountMethod->invokeArgs($this->manager, [$name, $this->storages[$name]]);
        }
        return $this->storages[$name];
    }

    public function use(string $name): ?filesystem
    {
        if (!isset($this->storages[$name]) && isset($this->config[$name])) {
            $this->initStorage($name);
        }
        return $this->storages[$name] ?? null;
    }

    public function getURL(string $file): ?string
    {
        $url = null;
        list($prefix, $path) = explode('://', $file, 2);
        if (isset($this->config[$prefix]['url'])) {
            if (!$path) {
                $url = $this->config[$prefix]['url'];
            } elseif ($this->fileExists($file)) {
                $url = rtrim($this->config[$prefix]['url'], '/') . '/' . ltrim($path, '/');
            }
        }
        return $url;
    }

    public function __call($name, $args)
    {
        return call_user_func_array([$this->manager, $name], $args);
    }
}
