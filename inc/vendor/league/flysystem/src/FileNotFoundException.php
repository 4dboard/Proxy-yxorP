<?php

namespace League\Flysystem;

use Exception as BaseException;
use JetBrains\PhpStorm\Pure;

class FileNotFoundException extends Exception
{
    /**
     * @var string
     */
    protected string $path;

    /**
     * Constructor.
     *
     * @param string $path
     * @param int $code
     * @param BaseException|null $previous
     */
    #[Pure] public function __construct(string $path, int $code = 0, BaseException $previous = null)
    {
        $this->path = $path;

        parent::__construct('File not found at path: ' . $this->getPath(), $code, $previous);
    }

    /**
     * Get the path which was not found.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}
