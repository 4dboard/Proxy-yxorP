<?php

namespace yxorP\app\lib\twoFactor\Providers\Qr;

// https://developers.google.com/chart/infographics/docs/qr_codes
class GoogleChartsQrCodeProvider extends BaseHTTPQRCodeProvider
{
    /** @var string */
    public string $errorcorrectionlevel;

    /** @var int */
    public int $margin;

    /** @var string */
    public string $encoding;

    /**
     * @param bool $verifyssl
     * @param string $errorcorrectionlevel
     * @param int $margin
     * @param string $encoding
     * @throws \yxorP\app\lib\twoFactor\Providers\Qr\QRException
     */
    public function __construct(bool $verifyssl = false, string $errorcorrectionlevel = 'L', int $margin = 4, string $encoding = 'UTF-8')
    {
        if (!is_bool($verifyssl)) {
            throw new QRException('VerifySSL must be bool');
        }

        $this->verifyssl = $verifyssl;

        $this->errorcorrectionlevel = $errorcorrectionlevel;
        $this->margin = $margin;
        $this->encoding = $encoding;
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
    public function getQRCodeImage(string $qrtext, int $size): string
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
        return 'https://chart.googleapis.com/chart'
            . '?chs=' . $size . 'x' . $size
            . '&chld=' . urlencode(strtoupper($this->errorcorrectionlevel) . '|' . $this->margin)
            . '&cht=' . 'qr'
            . '&choe=' . $this->encoding
            . '&chl=' . rawurlencode($qrtext);
    }
}
