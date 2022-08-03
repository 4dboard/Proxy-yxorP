<?php

namespace yxorP\app\lib\http\helper;

use SplFileObject;
use function call_user_func_array;
use function filesize;

/**
 * Use custom FileObject to prevent "too many files open" error
 */
class FileObject
{

    protected string $path;
    protected $fileObject;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function getSize(): int
    {
        return filesize($this->path);
    }

    public function __call($method, $args)
    {
        if (!isset($this->fileObject)) $this->fileObject = new SplFileObject($this->path);
        return call_user_func_array([$this->fileObject, $method], $args);
    }
}

