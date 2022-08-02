<?php namespace yxorP\app\lib\file\ColorExtractor;

use ArrayIterator;
use Countable;
use InvalidArgumentException;
use IteratorAggregate;

class palette implements Countable, IteratorAggregate
{
    protected $colors;

    protected function __construct()
    {
        $this->colors = [];
    }

    public static function fromFilename($filename, $backgroundColor = null)
    {
        $image = imagecreatefromstring(file_get_contents($filename));
        $palette = self::fromGD($image, $backgroundColor);
        imagedestroy($image);
        return $palette;
    }

    public static function fromGD($image, $backgroundColor = null)
    {
        if (!is_resource($image) || get_resource_type($image) != 'gd') {
            throw new InvalidArgumentException('Image must be a gd resource');
        }
        if ($backgroundColor !== null && (!is_numeric($backgroundColor) || $backgroundColor < 0 || $backgroundColor > 16777215)) {
            throw new InvalidArgumentException(sprintf('"%s" does not represent a valid color', $backgroundColor));
        }
        $palette = new self();
        $areColorsIndexed = !imageistruecolor($image);
        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);
        $palette->colors = [];
        $backgroundColorRed = ($backgroundColor >> 16) & 0xFF;
        $backgroundColorGreen = ($backgroundColor >> 8) & 0xFF;
        $backgroundColorBlue = $backgroundColor & 0xFF;
        for ($x = 0; $x < $imageWidth; ++$x) {
            for ($y = 0; $y < $imageHeight; ++$y) {
                $color = imagecolorat($image, $x, $y);
                if ($areColorsIndexed) {
                    $colorComponents = imagecolorsforindex($image, $color);
                    $color = ($colorComponents['alpha'] * 16777216) + ($colorComponents['red'] * 65536) + ($colorComponents['green'] * 256) + ($colorComponents['blue']);
                }
                if ($alpha = $color >> 24) {
                    if ($backgroundColor === null) {
                        continue;
                    }
                    $alpha /= 127;
                    $color = (int)(($color >> 16 & 0xFF) * (1 - $alpha) + $backgroundColorRed * $alpha) * 65536 + (int)(($color >> 8 & 0xFF) * (1 - $alpha) + $backgroundColorGreen * $alpha) * 256 + (int)(($color & 0xFF) * (1 - $alpha) + $backgroundColorBlue * $alpha);
                }
                isset($palette->colors[$color]) ? $palette->colors[$color] += 1 : $palette->colors[$color] = 1;
            }
        }
        arsort($palette->colors);
        return $palette;
    }

    public function count()
    {
        return count($this->colors);
    }

    public function getIterator()
    {
        return new ArrayIterator($this->colors);
    }

    public function getColorCount($color)
    {
        return $this->colors[$color];
    }

    public function getMostUsedColors($limit = null)
    {
        return array_slice($this->colors, 0, $limit, true);
    }
}