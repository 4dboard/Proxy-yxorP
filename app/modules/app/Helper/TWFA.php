<?php

namespace yxorP\app\modules\app\helper;

use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\writer;
use helper;
use yxorP\app\lib\http\helperAware;
use yxorP\app\lib\scancode\writer;
use yxorP\app\lib\twoFactor\Providers\Qr\IQRCodeProviderInterface;
use yxorP\app\lib\twoFactor\Providers\Qr\QRException;
use yxorP\app\lib\twoFactor\Providers\Rng\RNGException;
use yxorP\app\lib\twoFactor\TwoFactorAuth;
use yxorP\app\lib\twoFactor\TwoFactorAuthException;


/**
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 */
class TWFA extends helperAware
{

    protected TwoFactorAuth $tfa;

    /**
     * @throws RNGException
     * @throws TwoFactorAuthException
     */
    public function createSecret(int $length = 160): string
    {
        return $this->tfa->createSecret($length);
    }

    /**
     * @throws QRException
     * @throws TwoFactorAuthException
     */
    public function getQRCodeImageAsDataUri(string $secret, int $size = 150): string
    {
        return $this->tfa->getQRCodeImageAsDataUri($this->app['app.name'], $secret, $size);
    }

    /**
     * @throws QRException
     * @throws TwoFactorAuthException
     */
    public function getQRCodeImage(string $secret, int $size = 150): string|bool
    {
        $uri = $this->tfa->getQRCodeImageAsDataUri($this->app['app.name'], $secret, $size);
        return file_get_contents($uri);
    }

    public function verifyCode(string $secret, string $code): bool
    {
        return $this->tfa->verifyCode($secret, $code);
    }

    /**
     * @throws TwoFactorAuthException
     */
    protected function initialize()
    {
        $this->tfa = new TwoFactorAuth($this->app['app.name'], 6, 30, 'sha1', new TWFAQRCodeRenderer());
    }
}

class TWFAQRCodeRenderer implements IQRCodeProviderInterface
{

    public function getMimeType(): string
    {
        return 'image/svg+xml';
    }

    public function getQRCodeImage(string $qrtext, int $size): string
    {

        $renderer = new ImageRenderer(
            new RendererStyle($size, $margin),
            new SvgImageBackEnd()
        );

        $writer = new writer($renderer);

        return $writer->writeString($qrtext); // Return image
    }
}
