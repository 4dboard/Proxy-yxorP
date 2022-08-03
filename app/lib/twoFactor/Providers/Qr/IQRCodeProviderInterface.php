<?php

namespace yxorP\app\lib\twoFactor\Providers\Qr;

interface IQRCodeProviderInterface
{
    /**
     * Generate and return the QR code to embed in a web page
     *
     * @param string $qrtext the value to encode in the QR code
     * @param int $size the desired size of the QR code
     *
     * @return string file contents of the QR code
     */
    public function getQRCodeImage(string $qrtext, int $size);

    /**
     * Returns the appropriate mime type for the QR code
     * that will be generated
     *
     * @return string
     */
    public function getMimeType();
}
