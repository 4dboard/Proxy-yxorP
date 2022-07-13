<?php

namespace ColorThief\Image\Adapter;

/**
 * Basic interface for all image adapters.
 */
interface IImageAdapter
{
    /**
     * Loads an image from file.
     *
     * @param string $path
     */
    public function loadFile(string $path);

    /**
     * Loads an image from a binary string representation.
     *
     * @param string $data
     */
    public function loadBinaryString(string $data);

    /**
     * Loads an image resource.
     *
     * @param object $resource
     */
    public function load(object $resource);

    /**
     * Destroys the image.
     */
    public function destroy();

    /**
     * Returns image height.
     *
     * @return int
     */
    public function getHeight(): int;

    /**
     * Returns image width.
     *
     * @return int
     */
    public function getWidth(): int;

    /**
     * Returns the color of the specified pixel.
     *
     * @param int $x
     * @param int $y
     *
     * @return object
     */
    public function getPixelColor(int $x, int $y): object;

    /**
     * Get the raw resource.
     *
     * @return resource
     */
    public function getResource();
}
