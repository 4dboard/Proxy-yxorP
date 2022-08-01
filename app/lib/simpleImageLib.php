<?php use claviska\SimpleImage;

/**
 * @property array|false $exif
 * @property false|GdImage|resource $imagex
 * @property mixed $mimeType
 */
class simpleImageLib extends SimpleImage
{
    const ERR_AVIF_NOT_ENABLED = 12;

    public function fromDataUri($uri)
    {
        preg_match('/^data:(.*?);/', $uri, $matches);
        if (!count($matches)) {
            throw new Exception('Invalid data URI.', self::ERR_INVALID_DATA_URI);
        }
        $this->mimeType = $matches[1];
        if (!preg_match('/^image\/(avif|gif|jpeg|png|webp)$/', $this->mimeType)) {
            throw new Exception('Unsupported format: ' . $this->mimeType, self::ERR_UNSUPPORTED_FORMAT);
        }
        $uri = base64_decode(preg_replace('/^data:(.*?);base64,/', '', $uri));
        $this->image = imagecreatefromstring($uri);
        if (!$this->image) {
            throw new Exception("Invalid image data.", self::ERR_INVALID_IMAGE);
        }
        return $this;
    }

    public function fromFile($file)
    {
        $handle = @fopen($file, 'r');
        if ($handle === false) {
            throw new Exception("File not found: $file", self::ERR_FILE_NOT_FOUND);
        }
        fclose($handle);
        $info = @getimagesize($file);
        if ($info === false) {
            throw new Exception("Invalid image file: $file", self::ERR_INVALID_IMAGE);
        }
        $this->mimeType = $info['mime'];
        switch ($this->mimeType) {
            case 'image/gif':
                $gif = imagecreatefromgif($file);
                if ($gif) {
                    $width = imagesx($gif);
                    $height = imagesy($gif);
                    $this->image = imagecreatetruecolor((int)$width, (int)$height);
                    $transparentColor = imagecolorallocatealpha($this->image, 0, 0, 0, 127);
                    imagecolortransparent($this->image, $transparentColor);
                    imagefill($this->image, 0, 0, $transparentColor);
                    imagecopy($this->image, $gif, 0, 0, 0, 0, $width, $height);
                    imagedestroy($gif);
                }
                break;
            case 'image/jpeg':
                $this->image = imagecreatefromjpeg($file);
                break;
            case 'image/png':
                $this->image = imagecreatefrompng($file);
                break;
            case 'image/webp':
                $this->image = imagecreatefromwebp($file);
                break;
            case 'image/avif':
                $this->image = imagecreatefromavif($file);
                break;
            case 'image/bmp':
            case 'image/x-ms-bmp':
            case 'image/x-windows-bmp':
                $this->image = imagecreatefrombmp($file);
                break;
        }
        if (!$this->image) {
            throw new Exception("Unsupported format: " . $this->mimeType, self::ERR_UNSUPPORTED_FORMAT);
        }
        imagepalettetotruecolor($this->image);
        if ($this->mimeType === 'image/jpeg' && function_exists('exif_read_data')) {
            $this->exif = @exif_read_data($file);
        }
        return $this;
    }

    protected function generate($mimeType = null, $quality = 100)
    {
        $mimeType = $mimeType ?: $this->mimeType;
        if ($quality === null) $quality = 100;
        $quality = self::keepWithin((int)$quality, 0, 100);
        ob_start();
        switch ($mimeType) {
            case 'image/gif':
                imagesavealpha($this->image, true);
                imagegif($this->image, null);
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
            case 'image/avif':
                if (!function_exists('imageavif')) {
                    throw new Exception('AVIF support is not enabled in your version of PHP.', self::ERR_AVIF_NOT_ENABLED);
                }
                imagesavealpha($this->image, true);
                imageavif($this->image, null, $quality);
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
}
