<?php namespace yxorP\app\lib\file\ColorExtractor;
class color
{
    public static function fromIntToHex($color, $prependHash = true)
    {
        return ($prependHash ? '#' : '') . sprintf('%06X', $color);
    }

    public static function fromHexToInt($color)
    {
        return hexdec(ltrim($color, '#'));
    }

    public static function fromIntToRgb($color)
    {
        return ['r' => $color >> 16 & 0xFF, 'g' => $color >> 8 & 0xFF, 'b' => $color & 0xFF,];
    }

    public static function fromRgbToInt(array $components)
    {
        return ($components['r'] * 65536) + ($components['g'] * 256) + ($components['b']);
    }
}
