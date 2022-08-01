<?php

namespace App\Helper;

use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\writer;
use RobThree\Auth\Providers\Qr\IQRCodeProvider;
use RobThree\Auth\TwoFactorAuth;

class TWFA extends \

\yxorP\app\lib\lime\helper
{

    protected
    TwoFactorAuth $tfa;

    public function createSecret(int $length = 160)
{
    return $this->tfa->createSecret($length);
}

    public function getQRCodeImageAsDataUri(string $secret, int $size = 150): string
{
    return $this->tfa->getQRCodeImageAsDataUri($this->app['app.name'], $secret, $size);
}

    public function getQRCodeImage(string $secret, int $size = 150): mixed
{
    $uri = $this->tfa->getQRCodeImageAsDataUri($this->app['app.name'], $secret, $size);
    $binary = file_get_contents($uri);
    return $binary;
}

    public function verifyCode(string $secret, string $code): bool
{
    return $this->tfa->verifyCode($secret, $code);
}

    protected function initialize()
{
    $this->tfa = new TwoFactorAuth($this->app['app.name'], 6, 30, 'sha1', new TWFAQRCodeRenderer());
}
}

class TWFAQRCodeRenderer implements IQRCodeProvider
{

    public function getMimeType(): string
    {
        return 'image/svg+xml';
    }

    public function getQRCodeImage($qrtext, $size = 200, $margin = 0): string
    {

        $renderer = new ImageRenderer(
            new RendererStyle($size, $margin),
            new SvgImageBackEnd()
        );

        $writer = new writer($renderer);

        return $writer->writeString($qrtext); // Return image
    }
}
