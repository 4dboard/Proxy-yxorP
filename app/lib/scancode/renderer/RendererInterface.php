<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer;

use BaconQrCode\Encoder\QrCode;

interface RendererInterface
{
    public function render(QrCode $qrCode): string;
}
