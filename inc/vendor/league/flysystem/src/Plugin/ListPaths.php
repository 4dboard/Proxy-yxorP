<?php

namespace League\Flysystem\Plugin;

class ListPaths extends AbstractPlugin
{
    /**
     * Get the method name.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return 'listPaths';
    }

    /**
     * List all paths.
     *
     * @param string $directory
     * @param bool $recursive
     *
     * @return string[] paths
     */
    public function handle(string $directory = '', bool $recursive = false): array
    {
        $result = [];
        $contents = $this->filesystem->listContents($directory, $recursive);

        foreach ($contents as $object) {
            $result[] = $object['path'];
        }

        return $result;
    }
}
