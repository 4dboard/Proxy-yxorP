<?php
declare(strict_types=1);

namespace yxorP\app\lib\scancode\Renderer;

use BaconQrCode\Encoder\QrCode;
use yxorP\app\lib\scancode\Encoder\qrCode;

interface RendererInterface
{
    public function render(QrCode $qrCode): string;
}
