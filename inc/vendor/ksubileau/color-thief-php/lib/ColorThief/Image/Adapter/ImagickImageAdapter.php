<?php

namespace ColorThief\Image\Adapter;

use Imagick;
use ImagickException;
use InvalidArgumentException;
use RuntimeException;
use stdClass;

class ImagickImageAdapter extends ImageAdapter
{
    /**
     * {@inheritdoc}
     */
    public function loadBinaryString(string $data)
    {
        $resource = new Imagick();
        try {
            $resource->readImageBlob($data);
        } catch (ImagickException $e) {
            throw new InvalidArgumentException('Passed binary string is empty or is not a valid image', 0, $e);
        }
        $this->load($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function load(object $resource)
    {
        if (!($resource instanceof Imagick)) {
            throw new InvalidArgumentException('Passed variable is not an instance of Imagick');
        }

        try {
            if ($resource->getImageColorspace() == Imagick::COLORSPACE_CMYK) {
                // Leave original object unmodified
                $resource = clone $resource;

                if (version_compare(phpversion('imagick'), '3.0.0') < 0) {
                    throw new RuntimeException('Imagick extension version 3.0.0 or later is required for sampling CMYK images');
                }

                // With ImageMagick version 6.7.7, CMYK images converted to RGB color space work as expected,
                // but for later versions (6.9.7 and 7.0.8 have been tested), conversion to SRGB seems to be required
                $imageMagickVersion = $resource->getVersion();
                if ($imageMagickVersion['versionNumber'] > 1655) {
                    try {
                        $resource->transformImageColorspace(Imagick::COLORSPACE_SRGB);
                    } catch (ImagickException $e) {
                    }
                } else {
                    try {
                        $resource->transformImageColorspace(Imagick::COLORSPACE_RGB);
                    } catch (ImagickException $e) {
                    }
                }
            }
        } catch (ImagickException $e) {
        }

        parent::load($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function loadFile(string $path)
    {
        try {
            $resource = new Imagick($path);
        } catch (ImagickException $e) {
            throw new RuntimeException("Image '" . $path . "' is not readable or does not exists.", 0, $e);
        }
        $this->load($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy()
    {
        $this->resource?->clear();
        parent::destroy();
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight(): int
    {
        return $this->resource->getImageHeight();
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth(): int
    {
        return $this->resource->getImageWidth();
    }

    /**
     * {@inheritdoc}
     */
    public function getPixelColor(int $x, int $y): object|stdClass
    {
        $pixel = $this->resource->getImagePixelColor($x, $y);

        // Un-normalized values don't give a full range 0-1 alpha channel
        // So we ask for normalized values, and then we un-normalize it ourselves.
        $colorArray = $pixel->getColor(true);
        $color = new stdClass();
        $color->red = (int)round($colorArray['r'] * 255);
        $color->green = (int)round($colorArray['g'] * 255);
        $color->blue = (int)round($colorArray['b'] * 255);
        $color->alpha = (int)(127 - round($colorArray['a'] * 127));

        return $color;
    }
}
