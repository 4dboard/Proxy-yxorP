<?php

namespace yxorP\app\lib\twoFactor\Providers\Qr;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelMedium;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelQuartile;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\file\ColorExtractor\color;
use yxorP\app\lib\scancode\common\errorCorrectionLevel;

class EndroidQrCodeProvider implements IQRCodeProviderInterface
{
    public array|\yxorP\app\lib\twoFactor\Providers\Qr\Color $bgcolor;
    public array|\yxorP\app\lib\twoFactor\Providers\Qr\Color $color;
    public mixed $margin;
    public ErrorCorrectionLevelMedium|ErrorCorrectionLevelQuartile|ErrorCorrectionLevelHigh|ErrorCorrectionLevelLow $errorcorrectionlevel;

    protected bool $endroid4 = false;

    public function __construct($bgcolor = 'ffffff', $color = '000000', $margin = 0, $errorcorrectionlevel = 'H')
    {
        $this->endroid4 = method_exists(QrCode::class, 'create');

        $this->bgcolor = $this->handleColor($bgcolor);
        $this->color = $this->handleColor($color);
        $this->margin = $margin;
        $this->errorcorrectionlevel = $this->handleErrorCorrectionLevel($errorcorrectionlevel);
    }

    #[Pure] private function handleColor($color): \yxorP\app\lib\twoFactor\Providers\Qr\Color|array
    {
        $split = str_split($color, 2);
        $r = hexdec($split[0]);
        $g = hexdec($split[1]);
        $b = hexdec($split[2]);

        return $this->endroid4 ? new Color($r, $g, $b, 0) : ['r' => $r, 'g' => $g, 'b' => $b, 'a' => 0];
    }

    private function handleErrorCorrectionLevel($level): ErrorCorrectionLevelLow|ErrorCorrectionLevelHigh|ErrorCorrectionLevelQuartile|ErrorCorrectionLevelMedium
    {
        return match ($level) {
            'L' => $this->endroid4 ? new ErrorCorrectionLevelLow() : ErrorCorrectionLevel::LOW(),
            'M' => $this->endroid4 ? new ErrorCorrectionLevelMedium() : ErrorCorrectionLevel::MEDIUM(),
            'Q' => $this->endroid4 ? new ErrorCorrectionLevelQuartile() : ErrorCorrectionLevel::QUARTILE(),
            default => $this->endroid4 ? new ErrorCorrectionLevelHigh() : ErrorCorrectionLevel::HIGH(),
        };
    }

    public function getMimeType(): string
    {
        return 'image/png';
    }

    public function getQRCodeImage(string $qrtext, int $size): string
    {
        if (!$this->endroid4) {
            return $this->qrCodeInstance($qrtext, $size)->writeString();
        }

        $writer = new PngWriter();
        return $writer->write($this->qrCodeInstance($qrtext, $size))->getString();
    }

    protected function qrCodeInstance($qrtext, $size): QrCode
    {
        $qrCode = new QrCode($qrtext);
        $qrCode->setSize($size);

        $qrCode->setErrorCorrectionLevel($this->errorcorrectionlevel);
        $qrCode->setMargin($this->margin);
        $qrCode->setBackgroundColor($this->bgcolor);
        $qrCode->setForegroundColor($this->color);

        return $qrCode;
    }
}
