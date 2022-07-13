<?php namespace MongoLite;
class Client
{
    protected $databases = [];
    protected $path;
    protected $options;

    public function __construct($path, $options = [])
    {
        $this->path = \rtrim($path, '\\');
        $this->options = $options;
    }

    public function listDBs()
    {
        if ($this->path === Database::DSN_PATH_MEMORY) {
            return array_keys($this->databases);
        }
        $databases = [];
        foreach (new \DirectoryIterator($this->path) as $fileInfo) {
            if ($fileInfo->getExtension() === 'sqlite') {
                $databases[] = $fileInfo->getBasename('.sqlite');
            }
        }
        return $databases;
    }

    public function selectCollection($database, $collection)
    {
        return $this->selectDB($database)->selectCollection($collection);
    }

    public function selectDB($name)
    {
        if (!isset($this->databases[$name])) {
            $this->databases[$name] = new Database($this->path === Database::DSN_PATH_MEMORY ? $this->path : sprintf('%s/%s.sqlite', $this->path, $name), $this->options);
        }
        return $this->databases[$name];
    }

    public function __get($database)
    {
        return $this->selectDB($database);
    }
}