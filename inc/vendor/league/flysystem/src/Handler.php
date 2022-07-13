<?php

namespace League\Flysystem;

use BadMethodCallException;

/**
 * @deprecated
 */
abstract class Handler
{
    /**
     * @var string
     */
    protected ?string $path;

    /**
     * @var FilesystemInterface
     */
    protected ?FilesystemInterface $filesystem;

    /**
     * Constructor.
     *
     * @param FilesystemInterface|null $filesystem
     * @param null $path
     */
    public function __construct(FilesystemInterface $filesystem = null, $path = null)
    {
        $this->path = $path;
        $this->filesystem = $filesystem;
    }

    /**
     * Check whether the entree is a directory.
     *
     * @return bool
     */
    public function isDir(): bool
    {
        return $this->getType() === 'dir';
    }

    /**
     * Retrieve the entree type (file|dir).
     *
     * @return string file or dir
     */
    public function getType(): string
    {
        try {
            $metadata = $this->filesystem->getMetadata($this->path);
        } catch (FileNotFoundException $e) {
        }

        return $metadata ? $metadata['type'] : 'dir';
    }

    /**
     * Check whether the entree is a file.
     *
     * @return bool
     */
    public function isFile(): bool
    {
        return $this->getType() === 'file';
    }

    /**
     * Retrieve the Filesystem object.
     *
     * @return FilesystemInterface
     */
    public function getFilesystem(): ?FilesystemInterface
    {
        return $this->filesystem;
    }

    /**
     * Set the Filesystem object.
     *
     * @param FilesystemInterface $filesystem
     *
     * @return $this
     */
    public function setFilesystem(FilesystemInterface $filesystem): static
    {
        $this->filesystem = $filesystem;

        return $this;
    }

    /**
     * Retrieve the entree path.
     *
     * @return string path
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Set the entree path.
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath(string $path): static
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Plugins pass-through.
     *
     * @param string $method
     * @param array $arguments
     *
     * @return mixed
     */
    public function __call(string $method, array $arguments)
    {
        array_unshift($arguments, $this->path);
        $callback = [$this->filesystem, $method];

        try {
            return call_user_func_array($callback, $arguments);
        } catch (BadMethodCallException $e) {
            throw new BadMethodCallException(
                'Call to undefined method '
                . get_called_class()
                . '::' . $method
            );
        }
    }
}
