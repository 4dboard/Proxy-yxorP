<?php declare(strict_types=1);

namespace yxorP\app\lib\scancode;


use BaconQrCode\Common\ErrorCorrectionLevel;
use BaconQrCode\Common\Version;
use BaconQrCode\Encoder\Encoder;
use BaconQrCode\Exception\InvalidArgumentException;
use BaconQrCode\Renderer\RendererInterface;
use yxorP\app\lib\scancode\common\errorCorrectionLevel;
use yxorP\app\lib\scancode\Encoder\encoder;
use yxorP\app\lib\scancode\Renderer\RendererInterface;

final class writer
{
    private \yxorP\app\lib\scancode\RendererInterface $renderer;

    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function writeFile(string $content, string $filename, string $encoding = Encoder::DEFAULT_BYTE_MODE_ECODING, ?ErrorCorrectionLevel $ecLevel = null, ?Version $forcedVersion = null): void
    {
        file_put_contents($filename, $this->writeString($content, $encoding, $ecLevel, $forcedVersion));
    }

    public function writeString(string $content, string $encoding = Encoder::DEFAULT_BYTE_MODE_ECODING, ?ErrorCorrectionLevel $ecLevel = null, ?Version $forcedVersion = null): string
    {
        if (strlen($content) === 0) {
            throw new InvalidArgumentException('Found empty contents');
        }
        if (null === $ecLevel) {
            $ecLevel = ErrorCorrectionLevel::L();
        }
        return $this->renderer->render(Encoder::encode($content, $ecLevel, $encoding, $forcedVersion));
    }
}
