<?php

namespace League\Flysystem;

use InvalidArgumentException;
use League\Flysystem\Adapter\CanOverwriteFiles;
use League\Flysystem\Plugin\PluggableTrait;
use League\Flysystem\Util\ContentListingFormatter;

/**
 * @method void        emptyDir(string $dirname)
 * @method array|false getWithMetadata(string $path, string[] $metadata)
 * @method bool        forceCopy(string $path, string $newpath)
 * @method bool        forceRename(string $path, string $newpath)
 * @method array       listFiles(string $path = '', boolean $recursive = false)
 * @method string[]    listPaths(string $path = '', boolean $recursive = false)
 * @method array       listWith(string[] $keys = [], $directory = '', $recursive = false)
 */
class Filesystem implements FilesystemInterface
{
    use PluggableTrait;
    use ConfigAwareTrait;

    /**
     * @var AdapterInterface
     */
    protected AdapterInterface $adapter;

    /**
     * Constructor.
     *
     * @param AdapterInterface $adapter
     * @param array|Config|null $config
     */
    public function __construct(AdapterInterface $adapter, Config|array $config = null)
    {
        $this->adapter = $adapter;
        $this->setConfig($config);
    }

    /**
     * @inheritdoc
     */
    public function write($path, $contents, array $config = []): bool
    {
        $path = Util::normalizePath($path);
        $this->assertAbsent($path);
        $config = $this->prepareConfig($config);

        return (bool)$this->getAdapter()->write($path, $contents, $config);
    }

    /**
     * Assert a file is absent.
     *
     * @param string $path path to file
     *
     * @return void
     * @throws FileExistsException
     *
     */
    public function assertAbsent(string $path)
    {
        if ($this->config->get('disable_asserts', false) === false && $this->has($path)) {
            throw new FileExistsException($path);
        }
    }

    /**
     * @inheritdoc
     */
    public function has($path): bool
    {
        $path = Util::normalizePath($path);

        return strlen($path) === 0 ? false : (bool)$this->getAdapter()->has($path);
    }

    /**
     * Get the Adapter.
     *
     * @return AdapterInterface adapter
     */
    public function getAdapter(): AdapterInterface
    {
        return $this->adapter;
    }

    /**
     * @inheritdoc
     */
    public function writeStream($path, $resource, array $config = []): bool
    {
        if (!is_resource($resource) || get_resource_type($resource) !== 'stream') {
            throw new InvalidArgumentException(__METHOD__ . ' expects argument #2 to be a valid resource.');
        }

        $path = Util::normalizePath($path);
        $this->assertAbsent($path);
        $config = $this->prepareConfig($config);

        Util::rewindStream($resource);

        return (bool)$this->getAdapter()->writeStream($path, $resource, $config);
    }

    /**
     * @inheritdoc
     */
    public function put($path, $contents, array $config = []): bool
    {
        $path = Util::normalizePath($path);
        $config = $this->prepareConfig($config);

        if (!$this->getAdapter() instanceof CanOverwriteFiles && $this->has($path)) {
            return (bool)$this->getAdapter()->update($path, $contents, $config);
        }

        return (bool)$this->getAdapter()->write($path, $contents, $config);
    }

    /**
     * @inheritdoc
     */
    public function putStream($path, $resource, array $config = []): bool
    {
        if (!is_resource($resource) || get_resource_type($resource) !== 'stream') {
            throw new InvalidArgumentException(__METHOD__ . ' expects argument #2 to be a valid resource.');
        }

        $path = Util::normalizePath($path);
        $config = $this->prepareConfig($config);
        Util::rewindStream($resource);

        if (!$this->getAdapter() instanceof CanOverwriteFiles && $this->has($path)) {
            return (bool)$this->getAdapter()->updateStream($path, $resource, $config);
        }

        return (bool)$this->getAdapter()->writeStream($path, $resource, $config);
    }

    /**
     * @inheritdoc
     */
    public function readAndDelete($path)
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);
        $contents = $this->read($path);

        if ($contents === false) {
            return false;
        }

        $this->delete($path);

        return $contents;
    }

    /**
     * Assert a file is present.
     *
     * @param string $path path to file
     *
     * @return void
     * @throws FileNotFoundException
     *
     */
    public function assertPresent(string $path)
    {
        if ($this->config->get('disable_asserts', false) === false && !$this->has($path)) {
            throw new FileNotFoundException($path);
        }
    }

    /**
     * @inheritdoc
     */
    public function read($path)
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);

        if (!($object = $this->getAdapter()->read($path))) {
            return false;
        }

        return $object['contents'];
    }

    /**
     * @inheritdoc
     */
    public function delete($path): bool
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);

        return $this->getAdapter()->delete($path);
    }

    /**
     * @inheritdoc
     */
    public function update($path, $contents, array $config = []): bool
    {
        $path = Util::normalizePath($path);
        $config = $this->prepareConfig($config);

        $this->assertPresent($path);

        return (bool)$this->getAdapter()->update($path, $contents, $config);
    }

    /**
     * @inheritdoc
     */
    public function updateStream($path, $resource, array $config = []): bool
    {
        if (!is_resource($resource) || get_resource_type($resource) !== 'stream') {
            throw new InvalidArgumentException(__METHOD__ . ' expects argument #2 to be a valid resource.');
        }

        $path = Util::normalizePath($path);
        $config = $this->prepareConfig($config);
        $this->assertPresent($path);
        Util::rewindStream($resource);

        return (bool)$this->getAdapter()->updateStream($path, $resource, $config);
    }

    /**
     * @inheritdoc
     */
    public function readStream($path)
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);

        if (!$object = $this->getAdapter()->readStream($path)) {
            return false;
        }

        return $object['stream'];
    }

    /**
     * @inheritdoc
     */
    public function rename($path, $newpath): bool
    {
        $path = Util::normalizePath($path);
        $newpath = Util::normalizePath($newpath);
        $this->assertPresent($path);
        $this->assertAbsent($newpath);

        return $this->getAdapter()->rename($path, $newpath);
    }

    /**
     * @inheritdoc
     */
    public function copy($path, $newpath): bool
    {
        $path = Util::normalizePath($path);
        $newpath = Util::normalizePath($newpath);
        $this->assertPresent($path);
        $this->assertAbsent($newpath);

        return $this->getAdapter()->copy($path, $newpath);
    }

    /**
     * @inheritdoc
     */
    public function deleteDir($dirname): bool
    {
        $dirname = Util::normalizePath($dirname);

        if ($dirname === '') {
            throw new RootViolationException('Root directories can not be deleted.');
        }

        return $this->getAdapter()->deleteDir($dirname);
    }

    /**
     * @inheritdoc
     */
    public function createDir($dirname, array $config = []): bool
    {
        $dirname = Util::normalizePath($dirname);
        $config = $this->prepareConfig($config);

        return (bool)$this->getAdapter()->createDir($dirname, $config);
    }

    /**
     * @inheritdoc
     */
    public function listContents($directory = '', $recursive = false): array
    {
        $directory = Util::normalizePath($directory);
        $contents = $this->getAdapter()->listContents($directory, $recursive);

        return (new ContentListingFormatter($directory, $recursive, $this->config->get('case_sensitive', true)))
            ->formatListing($contents);
    }

    /**
     * @inheritdoc
     */
    public function getMimetype($path)
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);

        if ((!$object = $this->getAdapter()->getMimetype($path)) || !array_key_exists('mimetype', $object)) {
            return false;
        }

        return $object['mimetype'];
    }

    /**
     * @inheritdoc
     */
    public function getTimestamp($path): bool|int
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);

        if ((!$object = $this->getAdapter()->getTimestamp($path)) || !array_key_exists('timestamp', $object)) {
            return false;
        }

        return (int)$object['timestamp'];
    }

    /**
     * @inheritdoc
     */
    public function getVisibility($path)
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);

        if ((!$object = $this->getAdapter()->getVisibility($path)) || !array_key_exists('visibility', $object)) {
            return false;
        }

        return $object['visibility'];
    }

    /**
     * @inheritdoc
     */
    public function getSize($path): bool|int
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);

        if ((!$object = $this->getAdapter()->getSize($path)) || !array_key_exists('size', $object)) {
            return false;
        }

        return (int)$object['size'];
    }

    /**
     * @inheritdoc
     */
    public function setVisibility($path, $visibility): bool
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);

        return (bool)$this->getAdapter()->setVisibility($path, $visibility);
    }

    /**
     * @inheritdoc
     */
    public function get($path, Handler $handler = null): File|Handler|Directory|null
    {
        $path = Util::normalizePath($path);

        if (!$handler) {
            try {
                $metadata = $this->getMetadata($path);
            } catch (FileNotFoundException $e) {
            }
            $handler = ($metadata && $metadata['type'] === 'file') ? new File($this, $path) : new Directory($this, $path);
        }

        $handler->setPath($path);
        $handler->setFilesystem($this);

        return $handler;
    }

    /**
     * @inheritdoc
     */
    public function getMetadata($path): bool|array
    {
        $path = Util::normalizePath($path);
        $this->assertPresent($path);

        return $this->getAdapter()->getMetadata($path);
    }
}
