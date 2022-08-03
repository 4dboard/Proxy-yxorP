<?php

namespace yxorP\app\lib\twoFactor\Providers\Qr;

// http://qrickit.com/qrickit_apps/qrickit_api.php
class QRicketProvider extends BaseHTTPQRCodeProvider
{
    /** @var string */
    public string $errorcorrectionlevel;

    /** @var string */
    public string $bgcolor;

    /** @var string */
    public string $color;

    /** @var string */
    public string $format;

    /**
     * @param string $errorcorrectionlevel
     * @param string $bgcolor
     * @param string $color
     * @param string $format
     */
    public function __construct(string $errorcorrectionlevel = 'L', string $bgcolor = 'ffffff', string $color = '000000', string $format = 'p')
    {
        $this->verifyssl = false;

        $this->errorcorrectionlevel = $errorcorrectionlevel;
        $this->bgcolor = $bgcolor;
        $this->color = $color;
        $this->format = $format;
    }

    /**
     * {@inheritdoc}
     * @throws \yxorP\app\lib\twoFactor\Providers\Qr\QRException
     */
    public function getMimeType(): string
    {
        switch (strtolower($this->format)) {
            case 'p':
                return 'image/png';
            case 'g':
                return 'image/gif';
            case 'j':
                return 'image/jpeg';
        }
        throw new QRException(sprintf('Unknown MIME-type: %s', $this->format));
    }

    /**
     * {@inheritdoc}
     */
    public function getQRCodeImage(string $qrtext, int $size): bool|string
    {
        return $this->getContent($this->getUrl($qrtext, $size));
    }

    /**
     * @param string $qrtext the value to encode in the QR code
     * @param int|string $size the desired size of the QR code
     *
     * @return string file contents of the QR code
     */
    public function getUrl(string $qrtext, int|string $size): string
    {
        return 'http://qrickit.com/api/qr'
            . '?qrsize=' . $size
            . '&e=' . strtolower($this->errorcorrectionlevel)
            . '&bgdcolor=' . $this->bgcolor
            . '&fgdcolor=' . $this->color
            . '&t=' . strtolower($this->format)
            . '&d=' . rawurlencode($qrtext);
    }
}
