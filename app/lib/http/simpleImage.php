<?php namespace claviska;

use Exception;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\file\ColorExtractor\color;
use yxorP\app\lib\file\ColorExtractor\colorExtractor;
use yxorP\app\lib\file\ColorExtractor\palette;

/**
 * @property bool[] $flags
 */
class simpleImage
{
    const ERR_FILE_NOT_FOUND = 1, ERR_FONT_FILE = 2, ERR_FREETYPE_NOT_ENABLED = 3, ERR_GD_NOT_ENABLED = 4, ERR_INVALID_COLOR = 5, ERR_INVALID_DATA_URI = 6, ERR_INVALID_IMAGE = 7, ERR_LIB_NOT_LOADED = 8, ERR_UNSUPPORTED_FORMAT = 9, ERR_WEBP_NOT_ENABLED = 10, ERR_WRITE = 11, ERR_INVALID_FLAG = 12;
    protected $image;
    protected $mimeType;
    protected $exif;

    /**
     * @throws Exception
     */
    public function __construct($image = '', $flags = [])
    {
        if (extension_loaded('gd')) {
            ini_set('gd.jpeg_ignore_warning', 1);
        } else {
            throw new Exception('Required extension GD is not loaded.', self::ERR_GD_NOT_ENABLED);
        }
        $this->flags = ["sslVerify" => true];
        foreach ($flags as $flag => $value) {
            $this->setFlag($flag, $value);
        }
        if (preg_match('/^data:(.*?);/', $image)) {
            $this->fromDataUri($image);
        } elseif ($image) {
            $this->fromFile($image);
        }
    }

    /**
     * @throws Exception
     */
    public function setFlag($flag, $value)
    {
        if (!in_array($flag, array_keys($this->flags))) {
            throw new Exception('Invalid flag.', self::ERR_INVALID_FLAG);
        }
        $this->flags[$flag] = $value;
    }

    /**
     * @throws Exception
     */
    public function fromDataUri($uri): static
    {
        preg_match('/^data:(.*?);/', $uri, $matches);
        if (!count($matches)) {
            throw new Exception('Invalid data URI.', self::ERR_INVALID_DATA_URI);
        }
        $this->mimeType = $matches[1];
        if (!preg_match('/^image\/(gif|jpeg|png)$/', $this->mimeType)) {
            throw new Exception('Unsupported format: ' . $this->mimeType, self::ERR_UNSUPPORTED_FORMAT);
        }
        $uri = base64_decode(preg_replace('/^data:(.*?);base64,/', '', $uri));
        $this->image = imagecreatefromstring($uri);
        if (!$this->image) {
            throw new Exception("Invalid image data.", self::ERR_INVALID_IMAGE);
        }
        return $this;
    }

    /**
     * @throws Exception
     */
    public function fromFile($file): static
    {
        $sslVerify = $this->getFlag("sslVerify");
        $opts = ["ssl" => ["verify_peer" => $sslVerify, "verify_peer_name" => $sslVerify]];
        $file = @file_get_contents($file, false, stream_context_create($opts));
        if ($file === false) {
            throw new Exception("File not found: false", self::ERR_FILE_NOT_FOUND);
        }
        $this->image = imagecreatefromstring($file);
        $info = @getimagesizefromstring($file);
        if ($info === false) {
            throw new Exception("Invalid image file: $file", self::ERR_INVALID_IMAGE);
        }
        $this->mimeType = $info['mime'];
        if (!$this->image) {
            throw new Exception("Unsupported format: " . $this->mimeType, self::ERR_UNSUPPORTED_FORMAT);
        }
        switch ($this->mimeType) {
            case 'image/gif':
                $width = imagesx($this->image);
                $height = imagesx($this->image);
                $gif = imagecreatetruecolor((int)$width, (int)$height);
                $alpha = imagecolorallocatealpha($gif, 0, 0, 0, 127);
                imagecolortransparent($gif, $alpha);
                imagefill($gif, 0, 0, $alpha);
                imagecopy($this->image, $gif, 0, 0, 0, 0, $width, $height);
                imagedestroy($gif);
                break;
            case 'image/jpeg':
                if (function_exists('exif_read_data')) {
                    $this->exif = @exif_read_data("data://image/jpeg;base64," . base64_encode($file));
                }
                break;
        }
        imagepalettetotruecolor($this->image);
        return $this;
    }

    public function getFlag($flag): ?bool
    {
        return in_array($flag, array_keys($this->flags)) ? $this->flags[$flag] : null;
    }

    public static function darkenColor($color, $amount): array
    {
        return self::adjustColor($color, -$amount, -$amount, -$amount, 0);
    }

    /**
     * @throws Exception
     */
    #[ArrayShape(['red' => "int", 'green' => "int", 'blue' => "int", 'alpha' => "mixed"])] public static function adjustColor($color, $red, $green, $blue, $alpha): array
    {
        $color = self::normalizeColor($color);
        return self::normalizeColor(['red' => $color['red'] + $red, 'green' => $color['green'] + $green, 'blue' => $color['blue'] + $blue, 'alpha' => $color['alpha'] + $alpha]);
    }

    /**
     * @throws Exception
     */
    #[ArrayShape(['red' => "int", 'green' => "int", 'blue' => "int", 'alpha' => "mixed"])] public static function normalizeColor($color): array
    {
        $cssColors = ['aliceblue' => '#f0f8ff', 'antiquewhite' => '#faebd7', 'aqua' => '#00ffff', 'aquamarine' => '#7fffd4', 'azure' => '#f0ffff', 'beige' => '#f5f5dc', 'bisque' => '#ffe4c4', 'black' => '#000000', 'blanchedalmond' => '#ffebcd', 'blue' => '#0000ff', 'blueviolet' => '#8a2be2', 'brown' => '#a52a2a', 'burlywood' => '#deb887', 'cadetblue' => '#5f9ea0', 'chartreuse' => '#7fff00', 'chocolate' => '#d2691e', 'coral' => '#ff7f50', 'cornflowerblue' => '#6495ed', 'cornsilk' => '#fff8dc', 'crimson' => '#dc143c', 'cyan' => '#00ffff', 'darkblue' => '#00008b', 'darkcyan' => '#008b8b', 'darkgoldenrod' => '#b8860b', 'darkgray' => '#a9a9a9', 'darkgrey' => '#a9a9a9', 'darkgreen' => '#006400', 'darkkhaki' => '#bdb76b', 'darkmagenta' => '#8b008b', 'darkolivegreen' => '#556b2f', 'darkorange' => '#ff8c00', 'darkorchid' => '#9932cc', 'darkred' => '#8b0000', 'darksalmon' => '#e9967a', 'darkseagreen' => '#8fbc8f', 'darkslateblue' => '#483d8b', 'darkslategray' => '#2f4f4f', 'darkslategrey' => '#2f4f4f', 'darkturquoise' => '#00ced1', 'darkviolet' => '#9400d3', 'deeppink' => '#ff1493', 'deepskyblue' => '#00bfff', 'dimgray' => '#696969', 'dimgrey' => '#696969', 'dodgerblue' => '#1e90ff', 'firebrick' => '#b22222', 'floralwhite' => '#fffaf0', 'forestgreen' => '#228b22', 'fuchsia' => '#ff00ff', 'gainsboro' => '#dcdcdc', 'ghostwhite' => '#f8f8ff', 'gold' => '#ffd700', 'goldenrod' => '#daa520', 'gray' => '#808080', 'grey' => '#808080', 'green' => '#008000', 'greenyellow' => '#adff2f', 'honeydew' => '#f0fff0', 'hotpink' => '#ff69b4', 'indianred ' => '#cd5c5c', 'indigo ' => '#4b0082', 'ivory' => '#fffff0', 'khaki' => '#f0e68c', 'lavender' => '#e6e6fa', 'lavenderblush' => '#fff0f5', 'lawngreen' => '#7cfc00', 'lemonchiffon' => '#fffacd', 'lightblue' => '#add8e6', 'lightcoral' => '#f08080', 'lightcyan' => '#e0ffff', 'lightgoldenrodyellow' => '#fafad2', 'lightgray' => '#d3d3d3', 'lightgrey' => '#d3d3d3', 'lightgreen' => '#90ee90', 'lightpink' => '#ffb6c1', 'lightsalmon' => '#ffa07a', 'lightseagreen' => '#20b2aa', 'lightskyblue' => '#87cefa', 'lightslategray' => '#778899', 'lightslategrey' => '#778899', 'lightsteelblue' => '#b0c4de', 'lightyellow' => '#ffffe0', 'lime' => '#00ff00', 'limegreen' => '#32cd32', 'linen' => '#faf0e6', 'magenta' => '#ff00ff', 'maroon' => '#800000', 'mediumaquamarine' => '#66cdaa', 'mediumblue' => '#0000cd', 'mediumorchid' => '#ba55d3', 'mediumpurple' => '#9370db', 'mediumseagreen' => '#3cb371', 'mediumslateblue' => '#7b68ee', 'mediumspringgreen' => '#00fa9a', 'mediumturquoise' => '#48d1cc', 'mediumvioletred' => '#c71585', 'midnightblue' => '#191970', 'mintcream' => '#f5fffa', 'mistyrose' => '#ffe4e1', 'moccasin' => '#ffe4b5', 'navajowhite' => '#ffdead', 'navy' => '#000080', 'oldlace' => '#fdf5e6', 'olive' => '#808000', 'olivedrab' => '#6b8e23', 'orange' => '#ffa500', 'orangered' => '#ff4500', 'orchid' => '#da70d6', 'palegoldenrod' => '#eee8aa', 'palegreen' => '#98fb98', 'paleturquoise' => '#afeeee', 'palevioletred' => '#db7093', 'papayawhip' => '#ffefd5', 'peachpuff' => '#ffdab9', 'peru' => '#cd853f', 'pink' => '#ffc0cb', 'plum' => '#dda0dd', 'powderblue' => '#b0e0e6', 'purple' => '#800080', 'rebeccapurple' => '#663399', 'red' => '#ff0000', 'rosybrown' => '#bc8f8f', 'royalblue' => '#4169e1', 'saddlebrown' => '#8b4513', 'salmon' => '#fa8072', 'sandybrown' => '#f4a460', 'seagreen' => '#2e8b57', 'seashell' => '#fff5ee', 'sienna' => '#a0522d', 'silver' => '#c0c0c0', 'skyblue' => '#87ceeb', 'slateblue' => '#6a5acd', 'slategray' => '#708090', 'slategrey' => '#708090', 'snow' => '#fffafa', 'springgreen' => '#00ff7f', 'steelblue' => '#4682b4', 'tan' => '#d2b48c', 'teal' => '#008080', 'thistle' => '#d8bfd8', 'tomato' => '#ff6347', 'turquoise' => '#40e0d0', 'violet' => '#ee82ee', 'wheat' => '#f5deb3', 'white' => '#ffffff', 'whitesmoke' => '#f5f5f5', 'yellow' => '#ffff00', 'yellowgreen' => '#9acd32'];
        if (is_string($color) && strstr($color, '|')) {
            $color = explode('|', $color);
            $alpha = (float)$color[1];
            $color = trim($color[0]);
        } else {
            $alpha = 1;
        }
        if (is_string($color) && array_key_exists(strtolower($color), $cssColors)) {
            $color = $cssColors[strtolower($color)];
        }
        if ($color === 'transparent') {
            $color = ['red' => 0, 'green' => 0, 'blue' => 0, 'alpha' => 0];
        }
        if (is_string($color)) {
            $hex = preg_replace('/^#/', '', $color);
            if (strlen($hex) === 3) {
                list($red, $green, $blue) = [$hex[0] . $hex[0], $hex[1] . $hex[1], $hex[2] . $hex[2]];
            } elseif (strlen($hex) === 6) {
                list($red, $green, $blue) = [$hex[0] . $hex[1], $hex[2] . $hex[3], $hex[4] . $hex[5]];
            } else {
                throw new Exception("Invalid color value: $color", self::ERR_INVALID_COLOR);
            }
            $color = ['red' => hexdec($red), 'green' => hexdec($green), 'blue' => hexdec($blue), 'alpha' => $alpha];
        }
        if (is_array($color)) {
            $color['red'] = $color['red'] ?? 0;
            $color['green'] = $color['green'] ?? 0;
            $color['blue'] = $color['blue'] ?? 0;
            $color['alpha'] = $color['alpha'] ?? 1;
            return ['red' => (int)self::keepWithin((int)$color['red'], 0, 255), 'green' => (int)self::keepWithin((int)$color['green'], 0, 255), 'blue' => (int)self::keepWithin((int)$color['blue'], 0, 255), 'alpha' => self::keepWithin($color['alpha'], 0, 1)];
        }
        throw new Exception("Invalid color value: $color", self::ERR_INVALID_COLOR);
    }

    protected static function keepWithin($value, $min, $max)
    {
        if ($value < $min) return $min;
        if ($value > $max) return $max;
        return $value;
    }

    public static function lightenColor($color, $amount): array
    {
        return self::adjustColor($color, $amount, $amount, $amount, 0);
    }

    public function __destruct()
    {
        $type_check = (gettype($this->image) == "object" && get_class($this->image) == "GdImage");
        if (is_resource($this->image) && $type_check) {
            imagedestroy($this->image);
        }
    }

    /**
     * @throws Exception
     */
    public function fromString($string): static
    {
        return $this->fromFile('data://;base64,' . base64_encode($string));
    }

    /**
     * @throws Exception
     */
    public function toDataUri($mimeType = null, $quality = 100): string
    {
        $image = $this->generate($mimeType, $quality);
        return 'data:' . $image['mimeType'] . ';base64,' . base64_encode($image['data']);
    }

    /**
     * @throws Exception
     */
    #[ArrayShape(['data' => "false|string", 'mimeType' => "mixed"])] protected function generate($mimeType = null, $quality = 100): array
    {
        $mimeType = $mimeType ?: $this->mimeType;
        if ($quality === null) $quality = 100;
        $quality = self::keepWithin((int)$quality, 0, 100);
        ob_start();
        switch ($mimeType) {
            case 'image/gif':
                imagesavealpha($this->image, true);
                imagegif($this->image);
                break;
            case 'image/jpeg':
                imageinterlace($this->image, true);
                imagejpeg($this->image, null, $quality);
                break;
            case 'image/png':
                imagesavealpha($this->image, true);
                imagepng($this->image);
                break;
            case 'image/webp':
                if (!function_exists('imagewebp')) {
                    throw new Exception('WEBP support is not enabled in your version of PHP.', self::ERR_WEBP_NOT_ENABLED);
                }
                imagesavealpha($this->image, true);
                imagewebp($this->image, null, $quality);
                break;
            case 'image/bmp':
            case 'image/x-ms-bmp':
            case 'image/x-windows-bmp':
                if (!function_exists('imagebmp')) {
                    throw new Exception('BMP support is not available in your version of PHP.', self::ERR_UNSUPPORTED_FORMAT);
                }
                imageinterlace($this->image, true);
                imagebmp($this->image, null, $quality);
                break;
            default:
                throw new Exception('Unsupported format: ' . $mimeType, self::ERR_UNSUPPORTED_FORMAT);
        }
        $data = ob_get_contents();
        ob_end_clean();
        return ['data' => $data, 'mimeType' => $mimeType];
    }

    /**
     * @throws Exception
     */
    public function toDownload($filename, $mimeType = null, $quality = 100): static
    {
        $image = $this->generate($mimeType, $quality);
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Content-Description: File Transfer');
        header('Content-Length: ' . strlen($image['data']));
        header('Content-Transfer-Encoding: Binary');
        header('Content-Type: application/octet-stream');
        header("Content-Disposition: attachment; filename=\"$filename\"");
        echo $image['data'];
        return $this;
    }

    /**
     * @throws Exception
     */
    public function toFile($file, $mimeType = null, $quality = 100): static
    {
        $image = $this->generate($mimeType, $quality);
        if (!file_put_contents($file, $image['data'])) {
            throw new Exception("Failed to write image to file: $file", self::ERR_WRITE);
        }
        return $this;
    }

    /**
     * @throws Exception
     */
    public function toScreen($mimeType = null, $quality = 100): static
    {
        $image = $this->generate($mimeType, $quality);
        header('Content-Type: ' . $image['mimeType']);
        echo $image['data'];
        return $this;
    }

    /**
     * @throws Exception
     */
    public function toString($mimeType = null, $quality = 100)
    {
        return $this->generate($mimeType, $quality)['data'];
    }

    public function getMimeType()
    {
        return $this->mimeType;
    }

    public function getResolution(): bool|array
    {
        return imageresolution($this->image);
    }

    public function autoOrient(): static
    {
        $exif = $this->getExif();
        if (!$exif || !isset($exif['Orientation'])) {
            return $this;
        }
        switch ($exif['Orientation']) {
            case 1:
                break;
            case 2:
                $this->flip('x');
                break;
            case 3:
                $this->rotate(180);
                break;
            case 4:
                $this->flip('y');
                break;
            case 5:
                $this->flip('y')->rotate(90);
                break;
            case 6:
                $this->rotate(90);
                break;
            case 7:
                $this->flip('x')->rotate(90);
                break;
            case 8:
                $this->rotate(-90);
                break;
        }
        return $this;
    }

    public function getExif()
    {
        return $this->exif ?? null;
    }

    public function flip($direction): static
    {
        switch ($direction) {
            case 'x':
                imageflip($this->image, IMG_FLIP_HORIZONTAL);
                break;
            case 'y':
                imageflip($this->image, IMG_FLIP_VERTICAL);
                break;
            case 'both':
                imageflip($this->image, IMG_FLIP_BOTH);
                break;
        }
        return $this;
    }

    public function rotate($angle, $backgroundColor = 'transparent'): static
    {
        $backgroundColor = $this->allocateColor($backgroundColor);
        $this->image = imagerotate($this->image, -(self::keepWithin($angle, -360, 360)), $backgroundColor);
        imagecolortransparent($this->image, imagecolorallocatealpha($this->image, 0, 0, 0, 127));
        return $this;
    }

    /**
     * @throws Exception
     */
    protected function allocateColor($color): bool|int
    {
        $color = self::normalizeColor($color);
        $index = imagecolorexactalpha($this->image, $color['red'], $color['green'], $color['blue'], (int)(127 - ($color['alpha'] * 127)));
        if ($index > -1) {
            return $index;
        }
        return imagecolorallocatealpha($this->image, $color['red'], $color['green'], $color['blue'], 127 - ($color['alpha'] * 127));
    }

    public function bestFit($maxWidth, $maxHeight): static
    {
        if ($this->getWidth() <= $maxWidth && $this->getHeight() <= $maxHeight) {
            return $this;
        }
        if ($this->getOrientation() === 'portrait') {
            $height = $maxHeight;
            $width = $maxHeight * $this->getAspectRatio();
        } else {
            $width = $maxWidth;
            $height = $maxWidth / $this->getAspectRatio();
        }
        if ($width > $maxWidth) {
            $width = $maxWidth;
            $height = $width / $this->getAspectRatio();
        }
        if ($height > $maxHeight) {
            $height = $maxHeight;
            $width = $height * $this->getAspectRatio();
        }
        return $this->resize($width, $height);
    }

    public function getWidth(): int
    {
        return (int)imagesx($this->image);
    }

    public function getHeight(): int
    {
        return (int)imagesy($this->image);
    }

    #[Pure] public function getOrientation(): string
    {
        $width = $this->getWidth();
        $height = $this->getHeight();
        if ($width > $height) return 'landscape';
        if ($width < $height) return 'portrait';
        return 'square';
    }

    #[Pure] public function getAspectRatio(): float|int
    {
        return $this->getWidth() / $this->getHeight();
    }

    public function resize($width = null, $height = null): static
    {
        if (!$width && !$height) {
            return $this;
        }
        if ($width && !$height) {
            $height = $width / $this->getAspectRatio();
        }
        if (!$width && $height) {
            $width = $height * $this->getAspectRatio();
        }
        if ($this->getWidth() === $width && $this->getHeight() === $height) {
            return $this;
        }
        $newImage = imagecreatetruecolor((int)$width, (int)$height);
        $transparentColor = imagecolorallocatealpha($newImage, 0, 0, 0, 127);
        imagecolortransparent($newImage, $transparentColor);
        imagefill($newImage, 0, 0, $transparentColor);
        imagecopyresampled($newImage, $this->image, 0, 0, 0, 0, (int)$width, (int)$height, $this->getWidth(), $this->getHeight());
        $this->image = $newImage;
        return $this;
    }

    /**
     * @throws Exception
     */
    function duotone($lightColor, $darkColor): static
    {
        $lightColor = self::normalizeColor($lightColor);
        $darkColor = self::normalizeColor($darkColor);
        $redAvg = $lightColor['red'] - $darkColor['red'];
        $greenAvg = $lightColor['green'] - $darkColor['green'];
        $blueAvg = $lightColor['blue'] - $darkColor['blue'];
        $pixels = [];
        for ($i = 0; $i <= 255; $i++) {
            $grayAvg = $i / 255;
            $pixels['red'][$i] = $darkColor['red'] + $grayAvg * $redAvg;
            $pixels['green'][$i] = $darkColor['green'] + $grayAvg * $greenAvg;
            $pixels['blue'][$i] = $darkColor['blue'] + $grayAvg * $blueAvg;
        }
        for ($x = 0; $x < $this->getWidth(); $x++) {
            for ($y = 0; $y < $this->getHeight(); $y++) {
                $rgb = $this->getColorAt($x, $y);
                $gray = min(255, round(0.299 * $rgb['red'] + 0.114 * $rgb['blue'] + 0.587 * $rgb['green']));
                $this->dot($x, $y, ['red' => $pixels['red'][$gray], 'green' => $pixels['green'][$gray], 'blue' => $pixels['blue'][$gray]]);
            }
        }
        return $this;
    }

    #[Pure] public function getColorAt($x, $y): bool|array
    {
        if ($x < 0 || $x > $this->getWidth() || $y < 0 || $y > $this->getHeight()) {
            return false;
        }
        $color = imagecolorat($this->image, $x, $y);
        $rgba = imagecolorsforindex($this->image, $color);
        $rgba['alpha'] = 127 - ($color >> 24) & 0xFF;
        return $rgba;
    }

    public function dot($x, $y, $color): static
    {
        $color = $this->allocateColor($color);
        imagesetpixel($this->image, $x, $y, $color);
        return $this;
    }

    public function fitToHeight($height): static
    {
        return $this->resize(null, $height);
    }

    public function fitToWidth($width): static
    {
        return $this->resize($width);
    }

    public function maxColors($max, $dither = true): static
    {
        imagetruecolortopalette($this->image, $dither, max(1, $max));
        return $this;
    }

    public function resolution($res_x, $res_y = null): static
    {
        if (is_null($res_y)) {
            imageresolution($this->image, $res_x);
        } else {
            imageresolution($this->image, $res_x, $res_y);
        }
        return $this;
    }

    /**
     * @throws Exception
     */
    public function textBox($text, $options): static
    {
        $maxWidth = $this->getWidth();
        $options = array_merge(['fontFile' => null, 'size' => 12, 'color' => 'black', 'anchor' => 'center', 'xOffset' => 0, 'yOffset' => 0, 'shadow' => null, 'calculateOffsetFromEdge' => false, 'width' => $maxWidth, 'align' => 'left', 'leading' => 0, 'opacity' => 1], $options);
        $fontFile = $options['fontFile'];
        $fontSize = $fontSizePx = $options['size'];
        $fontSize = ($fontSize / 96) * 72;
        $color = $options['color'];
        $anchor = $options['anchor'];
        $xOffset = $options['xOffset'];
        $yOffset = $options['yOffset'];
        $shadow = $options['shadow'];
        $calculateOffsetFromEdge = $options['calculateOffsetFromEdge'];
        $angle = 0;
        $maxWidth = $options['width'];
        $leading = $options['leading'];
        $leading = self::keepWithin($leading, ($fontSizePx * -1), $leading);
        $opacity = $options['opacity'];
        $align = $options['align'];
        if ($align == 'right') {
            $align = 'top right';
        } elseif ($align == 'center') {
            $align = 'top';
        } elseif ($align == 'justify') {
            $align = 'justify';
        } else {
            $align = 'top left';
        }
        list($lines, $isLastLine, $lastLineHeight) = self::textSeparateLines($text, $fontFile, $fontSize, $maxWidth);
        $maxHeight = (count($lines) - 1) * ($fontSizePx * 1.2 + $leading) + $lastLineHeight;
        $imageText = new simpleImage();
        $imageText->fromNew($maxWidth, $maxHeight);
        if ($align <> 'justify') {
            foreach ($lines as $key => $line) {
                if ($align == 'top') $line = trim($line);
                $imageText->text($line, array('fontFile' => $fontFile, 'size' => $fontSizePx, 'color' => $color, 'anchor' => $align, 'xOffset' => 0, 'yOffset' => $key * ($fontSizePx * 1.2 + $leading), 'shadow' => $shadow, 'calculateOffsetFromEdge' => true));
            }
        } else {
            foreach ($lines as $keyLine => $line) {
                $spaces = 0;
                if (preg_match("/^\s+/", $line, $match)) {
                    $spaces = strlen($match[0]);
                    $line = ltrim($line);
                }
                $words = preg_split("/\s+/", $line);
                $words[0] = str_repeat(' ', $spaces) . $words[0];
                $wordsSize = array();
                foreach ($words as $key => $word) {
                    $wordBox = imagettfbbox($fontSize, 0, $fontFile, $word);
                    $wordWidth = abs($wordBox[4] - $wordBox[0]);
                    $wordsSize[$key] = $wordWidth;
                }
                $wordsSizeTotal = array_sum($wordsSize);
                $countWords = count($words);
                $wordSpacing = 0;
                if ($countWords > 1) {
                    $wordSpacing = ($maxWidth - $wordsSizeTotal) / ($countWords - 1);
                    $wordSpacing = round($wordSpacing, 3);
                }
                $xOffsetJustify = 0;
                foreach ($words as $key => $word) {
                    if ($isLastLine[$keyLine] == true) {
                        if ($key < (count($words) - 1)) continue;
                        $word = $line;
                    }
                    $imageText->text($word, array('fontFile' => $fontFile, 'size' => $fontSizePx, 'color' => $color, 'anchor' => 'top left', 'xOffset' => $xOffsetJustify, 'yOffset' => $keyLine * ($fontSizePx * 1.2 + $leading), 'shadow' => $shadow, 'calculateOffsetFromEdge' => true,));
                    $xOffsetJustify += $wordsSize[$key] + $wordSpacing;
                }
            }
        }
        $this->overlay($imageText, $anchor, $opacity, $xOffset, $yOffset, $calculateOffsetFromEdge);
        return $this;
    }

    private function textSeparateLines($text, $fontFile, $fontSize, $maxWidth): array
    {
        $words = self::textSeparateWords($text);
        $countWords = count($words) - 1;
        $lines[0] = '';
        $lineKey = 0;
        $isLastLine = [];
        for ($i = 0; $i < $countWords; $i++) {
            $word = $words[$i];
            $isLastLine[$lineKey] = false;
            if ($word === PHP_EOL) {
                $isLastLine[$lineKey] = true;
                $lineKey++;
                $lines[$lineKey] = '';
                continue;
            }
            $lineBox = imagettfbbox($fontSize, 0, $fontFile, $lines[$lineKey] . $word);
            if (abs($lineBox[4] - $lineBox[0]) < $maxWidth) {
                $lines[$lineKey] .= $word . ' ';
            } else {
                $lineKey++;
                $lines[$lineKey] = $word . ' ';
            }
        }
        $isLastLine[$lineKey] = true;
        $lines = array_map('rtrim', $lines);
        $boxFull = imagettfbbox($fontSize, 0, $fontFile, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
        $lineBox = imagettfbbox($fontSize, 0, $fontFile, $lines[$lineKey]);
        $lastLineHeight = abs($lineBox[1]) + abs($boxFull[5]);
        return array($lines, $isLastLine, $lastLineHeight);
    }

    private function textSeparateWords($text): array
    {
        $text = preg_replace('/(\r\n|\n|\r)/', PHP_EOL, $text);
        $text = explode(PHP_EOL, $text);
        $newText = array();
        foreach ($text as $key => $line) {
            $newText = array_merge($newText, explode(' ', $line), [PHP_EOL]);
        }
        return $newText;
    }

    public function fromNew($width, $height, $color = 'transparent'): static
    {
        $this->image = imagecreatetruecolor((int)$width, (int)$height);
        $this->mimeType = 'image/png';
        $this->fill($color);
        return $this;
    }

    public function fill($color): static
    {
        $this->rectangle(0, 0, $this->getWidth(), $this->getHeight(), 'white', 'filled');
        $color = $this->allocateColor($color);
        imagefill($this->image, 0, 0, $color);
        return $this;
    }

    public function rectangle($x1, $y1, $x2, $y2, $color, $thickness = 1): static
    {
        $color = $this->allocateColor($color);
        if ($thickness === 'filled') {
            imagesetthickness($this->image, 1);
            imagefilledrectangle($this->image, $x1, $y1, $x2, $y2, $color);
        } else {
            imagesetthickness($this->image, $thickness);
            imagerectangle($this->image, $x1, $y1, $x2, $y2, $color);
        }
        return $this;
    }

    /**
     * @throws Exception
     */
    public function text($text, $options, &$boundary = null): static
    {
        if (!function_exists('imagettftext')) {
            throw new Exception('Freetype support is not enabled in your version of PHP.', self::ERR_FREETYPE_NOT_ENABLED);
        }
        $options = array_merge(['fontFile' => null, 'size' => 12, 'color' => 'black', 'anchor' => 'center', 'xOffset' => 0, 'yOffset' => 0, 'shadow' => null, 'calculateOffsetFromEdge' => false, 'baselineAlign' => true], $options);
        $fontFile = $options['fontFile'];
        $size = ($options['size'] / 96) * 72;
        $color = $this->allocateColor($options['color']);
        $anchor = $options['anchor'];
        $xOffset = $options['xOffset'];
        $yOffset = $options['yOffset'];
        $calculateOffsetFromEdge = $options['calculateOffsetFromEdge'];
        $baselineAlign = $options['baselineAlign'];
        $angle = 0;
        $boxText = imagettfbbox($size, $angle, $fontFile, $text);
        if (!$boxText) throw new Exception("Unable to load font file: $fontFile", self::ERR_FONT_FILE);
        $boxWidth = abs($boxText[4] - $boxText[0]);
        $boxHeight = abs($boxText[5] - $boxText[1]);
        if ($calculateOffsetFromEdge == true) {
            if (str_contains($anchor, 'bottom')) $yOffset *= -1;
            if (str_contains($anchor, 'right')) $xOffset *= -1;
        }
        if ($baselineAlign == true) {
            $boxFull = imagettfbbox($size, $angle, $fontFile, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
            if (str_contains($anchor, 'bottom')) {
                $yOffset -= $boxFull[1];
            } elseif (str_contains($anchor, 'top')) {
                $yOffset += abs($boxFull[5]) - $boxHeight;
            } else {
                $boxFullHeight = abs($boxFull[1]) + abs($boxFull[5]);
                $yOffset += ($boxFullHeight / 2) - ($boxHeight / 2) - abs($boxFull[1]);
            }
        } else {
            $yOffset -= $boxText[1];
        }
        $xOffset -= $boxText[0];
        switch ($anchor) {
            case 'top left':
                $x = $xOffset;
                $y = $yOffset + $boxHeight;
                break;
            case 'top right':
                $x = $this->getWidth() - $boxWidth + $xOffset;
                $y = $yOffset + $boxHeight;
                break;
            case 'top':
                $x = ($this->getWidth() / 2) - ($boxWidth / 2) + $xOffset;
                $y = $yOffset + $boxHeight;
                break;
            case 'bottom left':
                $x = $xOffset;
                $y = $this->getHeight() + $yOffset;
                break;
            case 'bottom right':
                $x = $this->getWidth() - $boxWidth + $xOffset;
                $y = $this->getHeight() + $yOffset;
                break;
            case 'bottom':
                $x = ($this->getWidth() / 2) - ($boxWidth / 2) + $xOffset;
                $y = $this->getHeight() + $yOffset;
                break;
            case 'left':
                $x = $xOffset;
                $y = ($this->getHeight() / 2) - (($boxHeight / 2) - $boxHeight) + $yOffset;
                break;
            case 'right';
                $x = $this->getWidth() - $boxWidth + $xOffset;
                $y = ($this->getHeight() / 2) - (($boxHeight / 2) - $boxHeight) + $yOffset;
                break;
            default:
                $x = ($this->getWidth() / 2) - ($boxWidth / 2) + $xOffset;
                $y = ($this->getHeight() / 2) - (($boxHeight / 2) - $boxHeight) + $yOffset;
                break;
        }
        $x = (int)round($x);
        $y = (int)round($y);
        $boundary = ['x1' => $x + $boxText[0], 'y1' => $y + $boxText[1] - $boxHeight, 'x2' => $x + $boxWidth + $boxText[0], 'y2' => $y + $boxText[1], 'width' => $boxWidth, 'height' => $boxHeight];
        if (is_array($options['shadow'])) {
            imagettftext($this->image, $size, $angle, $x + $options['shadow']['x'], $y + $options['shadow']['y'], $this->allocateColor($options['shadow']['color']), $fontFile, $text);
        }
        imagettftext($this->image, $size, $angle, $x, $y, $color, $fontFile, $text);
        return $this;
    }

    /**
     * @throws Exception
     */
    public function overlay($overlay, $anchor = 'center', $opacity = 1, $xOffset = 0, $yOffset = 0, $calculateOffsetFromEdge = false): static
    {
        if (!($overlay instanceof simpleImage)) $overlay = new simpleImage($overlay);
        $opacity = self::keepWithin($opacity, 0, 1) * 100;
        $spaceX = $this->getWidth() - $overlay->getWidth();
        $spaceY = $this->getHeight() - $overlay->getHeight();
        $x = ($spaceX / 2) + ($calculateOffsetFromEdge ? 0 : $xOffset);
        $y = ($spaceY / 2) + ($calculateOffsetFromEdge ? 0 : $yOffset);
        if (str_contains($anchor, 'top')) {
            $y = $yOffset;
        } elseif (str_contains($anchor, 'bottom')) {
            $y = $spaceY + ($calculateOffsetFromEdge ? -$yOffset : $yOffset);
        }
        if (str_contains($anchor, 'left')) {
            $x = $xOffset;
        } elseif (str_contains($anchor, 'right')) {
            $x = $spaceX + ($calculateOffsetFromEdge ? -$xOffset : $xOffset);
        }
        self::imageCopyMergeAlpha($this->image, $overlay->image, $x, $y, 0, 0, $overlay->getWidth(), $overlay->getHeight(), $opacity);
        return $this;
    }

    protected static function imageCopyMergeAlpha($dstIm, $srcIm, $dstX, $dstY, $srcX, $srcY, $srcW, $srcH, $pct): bool
    {
        if ($pct < 100) {
            imagealphablending($srcIm, false);
            imagefilter($srcIm, IMG_FILTER_COLORIZE, 0, 0, 0, 127 * ((100 - $pct) / 100));
        }
        imagecopy($dstIm, $srcIm, (int)$dstX, (int)$dstY, (int)$srcX, (int)$srcY, (int)$srcW, (int)$srcH);
        return true;
    }

    public function thumbnail($width, $height, $anchor = 'center'): static
    {
        $currentRatio = $this->getHeight() / $this->getWidth();
        $targetRatio = $height / $width;
        if ($targetRatio > $currentRatio) {
            $this->resize(null, $height);
        } else {
            $this->resize($width);
        }
        switch ($anchor) {
            case 'top':
                $x1 = floor(($this->getWidth() / 2) - ($width / 2));
                $x2 = $width + $x1;
                $y1 = 0;
                $y2 = $height;
                break;
            case 'bottom':
                $x1 = floor(($this->getWidth() / 2) - ($width / 2));
                $x2 = $width + $x1;
                $y1 = $this->getHeight() - $height;
                $y2 = $this->getHeight();
                break;
            case 'left':
                $x1 = 0;
                $x2 = $width;
                $y1 = floor(($this->getHeight() / 2) - ($height / 2));
                $y2 = $height + $y1;
                break;
            case 'right':
                $x1 = $this->getWidth() - $width;
                $x2 = $this->getWidth();
                $y1 = floor(($this->getHeight() / 2) - ($height / 2));
                $y2 = $height + $y1;
                break;
            case 'top left':
                $x1 = 0;
                $x2 = $width;
                $y1 = 0;
                $y2 = $height;
                break;
            case 'top right':
                $x1 = $this->getWidth() - $width;
                $x2 = $this->getWidth();
                $y1 = 0;
                $y2 = $height;
                break;
            case 'bottom left':
                $x1 = 0;
                $x2 = $width;
                $y1 = $this->getHeight() - $height;
                $y2 = $this->getHeight();
                break;
            case 'bottom right':
                $x1 = $this->getWidth() - $width;
                $x2 = $this->getWidth();
                $y1 = $this->getHeight() - $height;
                $y2 = $this->getHeight();
                break;
            default:
                $x1 = floor(($this->getWidth() / 2) - ($width / 2));
                $x2 = $width + $x1;
                $y1 = floor(($this->getHeight() / 2) - ($height / 2));
                $y2 = $height + $y1;
                break;
        }
        return $this->crop($x1, $y1, $x2, $y2);
    }

    public function crop($x1, $y1, $x2, $y2): static
    {
        $x1 = self::keepWithin($x1, 0, $this->getWidth());
        $x2 = self::keepWithin($x2, 0, $this->getWidth());
        $y1 = self::keepWithin($y1, 0, $this->getHeight());
        $y2 = self::keepWithin($y2, 0, $this->getHeight());
        $dstW = abs($x2 - $x1);
        $dstH = abs($y2 - $y1);
        $newImage = imagecreatetruecolor((int)$dstW, (int)$dstH);
        $transparentColor = imagecolorallocatealpha($newImage, 0, 0, 0, 127);
        imagecolortransparent($newImage, $transparentColor);
        imagefill($newImage, 0, 0, $transparentColor);
        imagecopyresampled($newImage, $this->image, 0, 0, min($x1, $x2), min($y1, $y2), (int)$dstW, (int)$dstH, (int)$dstW, (int)$dstH);
        $this->image = $newImage;
        return $this;
    }

    public function border($color, $thickness = 1): static
    {
        $x1 = -1;
        $y1 = 0;
        $x2 = $this->getWidth();
        $y2 = $this->getHeight() - 1;
        $color = $this->allocateColor($color);
        imagesetthickness($this->image, $thickness * 2);
        imagerectangle($this->image, $x1, $y1, $x2, $y2, $color);
        return $this;
    }

    /**
     * @throws Exception
     */
    public function ellipse($x, $y, $width, $height, $color, $thickness = 1): static
    {
        $tempColor = $this->allocateColor($color);
        imagesetthickness($this->image, 1);
        if ($thickness === 'filled') {
            imagefilledellipse($this->image, $x, $y, $width, $height, $tempColor);
        } else if ($thickness === 1) {
            imageellipse($this->image, $x, $y, $width, $height, $tempColor);
        } else {
            $tempImage = new simpleImage();
            $tempImage->fromNew($this->getWidth(), $this->getHeight());
            $tempColor = $tempImage->allocateColor($color);
            imagefilledellipse($tempImage->image, $x, $y, $width + $thickness, $height + $thickness, $tempColor);
            $tempColor = (self::normalizeColor($color)['red'] == 255) ? 'blue' : 'red';
            $tempColor = $tempImage->allocateColor($tempColor);
            imagefilledellipse($tempImage->image, $x, $y, $width - $thickness, $height - $thickness, $tempColor);
            $tempImage->excludeInsideColor($x, $y, $color);
            $this->overlay($tempImage);
        }
        return $this;
    }

    private function excludeInsideColor($x, $y, $borderColor): void
    {
        $borderColor = $this->allocateColor($borderColor);
        $transparent = $this->allocateColor('transparent');
        imagefilltoborder($this->image, $x, $y, $borderColor, $transparent);
    }

    public function line($x1, $y1, $x2, $y2, $color, $thickness = 1): static
    {
        $color = $this->allocateColor($color);
        imagesetthickness($this->image, $thickness);
        imageline($this->image, $x1, $y1, $x2, $y2, $color);
        return $this;
    }

    public function polygon($vertices, $color, $thickness = 1): static
    {
        $color = $this->allocateColor($color);
        $points = [];
        foreach ($vertices as $vals) {
            $points[] = $vals['x'];
            $points[] = $vals['y'];
        }
        if ($thickness === 'filled') {
            imagesetthickness($this->image, 1);
            imagefilledpolygon($this->image, $points, count($vertices), $color);
        } else {
            imagesetthickness($this->image, $thickness);
            imagepolygon($this->image, $points, count($vertices), $color);
        }
        return $this;
    }

    /**
     * @throws Exception
     */
    public function roundedRectangle($x1, $y1, $x2, $y2, $radius, $color, $thickness = 1): static
    {
        if ($thickness === 'filled') {
            $this->rectangle($x1 + $radius + 1, $y1, $x2 - $radius - 1, $y2, $color, 'filled');
            $this->rectangle($x1, $y1 + $radius + 1, $x1 + $radius, $y2 - $radius - 1, $color, 'filled');
            $this->rectangle($x2 - $radius, $y1 + $radius + 1, $x2, $y2 - $radius - 1, $color, 'filled');
            $this->arc($x1 + $radius, $y1 + $radius, $radius * 2, $radius * 2, 180, 270, $color, 'filled');
            $this->arc($x2 - $radius, $y1 + $radius, $radius * 2, $radius * 2, 270, 360, $color, 'filled');
            $this->arc($x1 + $radius, $y2 - $radius, $radius * 2, $radius * 2, 90, 180, $color, 'filled');
            $this->arc($x2 - $radius, $y2 - $radius, $radius * 2, $radius * 2, 360, 90, $color, 'filled');
        } else {
            $offset = $thickness / 2;
            $x1 -= $offset;
            $x2 += $offset;
            $y1 -= $offset;
            $y2 += $offset;
            $radius = self::keepWithin($radius, 0, min(($x2 - $x1) / 2, ($y2 - $y1) / 2) - 1);
            $radius = floor($radius);
            $thickness = self::keepWithin($thickness, 1, min(($x2 - $x1) / 2, ($y2 - $y1) / 2));
            $tempImage = new simpleImage();
            $tempImage->fromNew($this->getWidth(), $this->getHeight());
            $tempImage->roundedRectangle($x1, $y1, $x2, $y2, $radius, $color, 'filled');
            $tempColor = (self::normalizeColor($color)['red'] == 255) ? 'blue' : 'red';
            $radius = $radius - $thickness;
            $radius = self::keepWithin($radius, 0, $radius);
            $tempImage->roundedRectangle($x1 + $thickness, $y1 + $thickness, $x2 - $thickness, $y2 - $thickness, $radius, $tempColor, 'filled');
            $tempImage->excludeInsideColor(($x2 + $x1) / 2, ($y2 + $y1) / 2, $color);
            $this->overlay($tempImage);
        }
        return $this;
    }

    /**
     * @throws Exception
     */
    public function arc($x, $y, $width, $height, $start, $end, $color, $thickness = 1): static
    {
        $tempColor = $this->allocateColor($color);
        imagesetthickness($this->image, 1);
        if ($thickness === 'filled') {
            imagefilledarc($this->image, $x, $y, $width, $height, $start, $end, $tempColor, IMG_ARC_PIE);
        } else if ($thickness === 1) {
            imagearc($this->image, $x, $y, $width, $height, $start, $end, $tempColor);
        } else {
            $tempImage = new simpleImage();
            $tempImage->fromNew($this->getWidth(), $this->getHeight());
            $tempColor = $tempImage->allocateColor($color);
            imagefilledarc($tempImage->image, $x, $y, $width + $thickness, $height + $thickness, $start, $end, $tempColor, IMG_ARC_PIE);
            $tempColor = (self::normalizeColor($color)['red'] == 255) ? 'blue' : 'red';
            $tempColor = $tempImage->allocateColor($tempColor);
            imagefilledarc($tempImage->image, $x, $y, $width - $thickness, $height - $thickness, $start, $end, $tempColor, IMG_ARC_PIE);
            $tempImage->excludeInsideColor($x, $y, $color);
            $this->overlay($tempImage);
        }
        return $this;
    }

    public function blur($type = 'selective', $passes = 1): static
    {
        $filter = $type === 'gaussian' ? IMG_FILTER_GAUSSIAN_BLUR : IMG_FILTER_SELECTIVE_BLUR;
        for ($i = 0; $i < $passes; $i++) {
            imagefilter($this->image, $filter);
        }
        return $this;
    }

    public function brighten($percentage): static
    {
        $percentage = self::keepWithin(255 * $percentage / 100, 0, 255);
        imagefilter($this->image, IMG_FILTER_BRIGHTNESS, $percentage);
        return $this;
    }

    /**
     * @throws Exception
     */
    public function colorize($color): static
    {
        $color = self::normalizeColor($color);
        imagefilter($this->image, IMG_FILTER_COLORIZE, $color['red'], $color['green'], $color['blue'], 127 - ($color['alpha'] * 127));
        return $this;
    }

    public function contrast($percentage): static
    {
        imagefilter($this->image, IMG_FILTER_CONTRAST, self::keepWithin($percentage, -100, 100));
        return $this;
    }

    public function darken($percentage): static
    {
        $percentage = self::keepWithin(255 * $percentage / 100, 0, 255);
        imagefilter($this->image, IMG_FILTER_BRIGHTNESS, -$percentage);
        return $this;
    }

    public function desaturate(): static
    {
        imagefilter($this->image, IMG_FILTER_GRAYSCALE);
        return $this;
    }

    public function edgeDetect(): static
    {
        imagefilter($this->image, IMG_FILTER_EDGEDETECT);
        return $this;
    }

    public function emboss(): static
    {
        imagefilter($this->image, IMG_FILTER_EMBOSS);
        return $this;
    }

    public function invert(): static
    {
        imagefilter($this->image, IMG_FILTER_NEGATE);
        return $this;
    }

    public function opacity($opacity): static
    {
        $newImage = new simpleImage();
        $newImage->fromNew($this->getWidth(), $this->getHeight());
        self::imageCopyMergeAlpha($newImage->image, $this->image, 0, 0, 0, 0, $this->getWidth(), $this->getHeight(), self::keepWithin($opacity, 0, 1) * 100);
        return $this;
    }

    public function pixelate($size = 10): static
    {
        imagefilter($this->image, IMG_FILTER_PIXELATE, $size, true);
        return $this;
    }

    public function sepia(): static
    {
        imagefilter($this->image, IMG_FILTER_GRAYSCALE);
        imagefilter($this->image, IMG_FILTER_COLORIZE, 70, 35, 0);
        return $this;
    }

    public function sharpen($amount = 50): static
    {
        $amount = max(1, min(100, $amount)) / 100;
        $sharpen = [[-1, -1, -1], [-1, 8 / $amount, -1], [-1, -1, -1],];
        $divisor = array_sum(array_map('array_sum', $sharpen));
        imageconvolution($this->image, $sharpen, $divisor, 0);
        return $this;
    }

    public function sketch(): static
    {
        imagefilter($this->image, IMG_FILTER_MEAN_REMOVAL);
        return $this;
    }

    /**
     * @throws Exception
     */
    public function extractColors($count = 5, $backgroundColor = null): array
    {
        if (!class_exists('\yxorP\app\lib\file\ColorExtractor\colorExtractor')) {
            throw new Exception('Required library \yxorP\app\lib\file\ColorExtractor is missing.', self::ERR_LIB_NOT_LOADED);
        }
        if ($backgroundColor) {
            $backgroundColor = self::normalizeColor($backgroundColor);
            $backgroundColor = color::fromRgbToInt(['r' => $backgroundColor['red'], 'g' => $backgroundColor['green'], 'b' => $backgroundColor['blue']]);
        }
        $palette = palette::fromGD($this->image, $backgroundColor);
        $extractor = new colorExtractor($palette);
        $colors = $extractor->extract($count);
        foreach ($colors as $key => $value) {
            $colors[$key] = self::normalizeColor(color::fromIntToHex($value));
        }
        return $colors;
    }
}
