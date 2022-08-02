<?php namespace yxorP\app\lib\http\mongodb\mongoLite;

use DirectoryIterator;
use function rtrim;

class client
{
    protected array $databases = [];
    protected string $path;
    protected array $options;

    public function __construct(string $path, array $options = [])
    {
        $this->path = rtrim($path, '\\');
        $this->options = $options;
    }

    public function listDBs(): array
    {
        if ($this->path === Database::DSN_PATH_MEMORY) {
            return array_keys($this->databases);
        }
        $databases = [];
        foreach (new DirectoryIterator($this->path) as $fileInfo) {
            if ($fileInfo->getExtension() === 'sqlite') {
                $databases[] = $fileInfo->getBasename('.sqlite');
            }
        }
        return $databases;
    }

    public function selectCollection(string $database, string $collection): collection
    {
        return $this->selectDB($database)->selectCollection($collection);
    }

    public function selectDB(string $name): Database
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
