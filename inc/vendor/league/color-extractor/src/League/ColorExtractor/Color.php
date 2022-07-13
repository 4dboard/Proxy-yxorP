<?php

namespace League\ColorExtractor;

use JetBrains\PhpStorm\ArrayShape;

class Color
{
    /**
     * @param int $color
     * @param bool $prependHash = true
     *
     * @return string
     */
    public static function fromIntToHex(int $color, bool $prependHash = true): string
    {
        return ($prependHash ? '#' : '') . sprintf('%06X', $color);
    }

    /**
     * @param string $color
     *
     * @return int
     */
    public static function fromHexToInt(string $color): int
    {
        return hexdec(ltrim($color, '#'));
    }

    /**
     * @param int $color
     *
     * @return array
     */
    #[ArrayShape(['r' => "int", 'g' => "int", 'b' => "int"])] public static function fromIntToRgb(int $color): array
    {
        return [
            'r' => $color >> 16 & 0xFF,
            'g' => $color >> 8 & 0xFF,
            'b' => $color & 0xFF,
        ];
    }

    /**
     * @param array $components
     *
     * @return int
     */
    public static function fromRgbToInt(array $components): float|int
    {
        return ($components['r'] * 65536) + ($components['g'] * 256) + ($components['b']);
    }
}
