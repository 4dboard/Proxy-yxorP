<?php

namespace yxorP\app\lib\twoFactor\Providers\Qr;

// https://image-charts.com
class ImageChartsQRCodeProvider extends BaseHTTPQRCodeProvider
{
    /** @var string */
    public string $errorcorrectionlevel;

    /** @var int */
    public int $margin;

    /**
     * @param bool $verifyssl
     * @param string $errorcorrectionlevel
     * @param int $margin
     * @throws \yxorP\app\lib\twoFactor\Providers\Qr\QRException
     */
    public function __construct(bool $verifyssl = false, string $errorcorrectionlevel = 'L', int $margin = 1)
    {
        if (!is_bool($verifyssl)) {
            throw new QRException('VerifySSL must be bool');
        }

        $this->verifyssl = $verifyssl;

        $this->errorcorrectionlevel = $errorcorrectionlevel;
        $this->margin = $margin;
    }

    /**
     * {@inheritdoc}
     */
    public function getMimeType(): string
    {
        return 'image/png';
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
     * @param int $size the desired size of the QR code
     *
     * @return string file contents of the QR code
     */
    public function getUrl(string $qrtext, int $size): string
    {
        return 'https://image-charts.com/chart?cht=qr'
            . '&chs=' . ceil($size / 2) . 'x' . ceil($size / 2)
            . '&chld=' . $this->errorcorrectionlevel . '|' . $this->margin
            . '&chl=' . rawurlencode($qrtext);
    }
}
