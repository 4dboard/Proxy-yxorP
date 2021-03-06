<?php namespace yxorP\app\lib\data\json\stream;
class collectionWriter
{
    protected $resource;
    protected int $key = 0;

    public function __construct(string $path)
    {
        file_put_contents($path, '');
        $this->resource = fopen($path, 'wb');
        fwrite($this->resource, '[');
    }

    public function push($item): void
    {
        if ($this->key !== 0) {
            fwrite($this->resource, ',');
        }
        fwrite($this->resource, json_encode($item));
        $this->key++;
    }

    public function __destruct()
    {
        $this->close();
    }

    public function close(): void
    {
        if (is_resource($this->resource)) {
            fwrite($this->resource, ']');
            fclose($this->resource);
        }
    }
}
