<?php

namespace ColorThief\Image\Adapter;

use InvalidArgumentException;
use RuntimeException;

class GDImageAdapter extends ImageAdapter
{
    /**
     * {@inheritdoc}
     */
    public function load(object $resource)
    {
        if (!is_resource($resource) || get_resource_type($resource) != 'gd') {
            throw new InvalidArgumentException('Passed variable is not a valid GD resource');
        }

        parent::load($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function loadBinaryString(string $data)
    {
        $this->resource = @imagecreatefromstring($data);
        if ($this->resource === false) {
            throw new InvalidArgumentException('Passed binary string is empty or is not a valid image');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadFile(string $path)
    {
        list(, , $type) = @getimagesize($path);

        $resource = match ($type) {
            IMAGETYPE_GIF => @imagecreatefromgif($path),
            IMAGETYPE_JPEG => @imagecreatefromjpeg($path),
            IMAGETYPE_PNG => @imagecreatefrompng($path),
            default => throw new RuntimeException("Image '{$path}' is not readable or does not exists."),
        };

        if ($resource === false) {
            throw new RuntimeException("Image '{$path}' is not readable or does not exists.");
        }

        $this->resource = $resource;
    }

    /**
     * {@inheritdoc}
     */
    public function destroy()
    {
        if ($this->resource) {
            imagedestroy($this->resource);
        }
        parent::destroy();
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight(): bool|int
    {
        return imagesy($this->resource);
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth(): bool|int
    {
        return imagesx($this->resource);
    }

    /**
     * {@inheritdoc}
     */
    public function getPixelColor(int $x, int $y): object
    {
        $rgba = imagecolorat($this->resource, $x, $y);
        $color = imagecolorsforindex($this->resource, $rgba);

        return (object)$color;
    }
}
