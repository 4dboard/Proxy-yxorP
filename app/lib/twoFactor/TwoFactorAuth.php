<?php namespace yxorP\app\lib\twoFactor;

use yxorP\app\lib\twoFactor\Providers\Qr\IQRCodeProviderInterface;
use yxorP\app\lib\twoFactor\Providers\Qr\QRServerProvider;
use yxorP\app\lib\twoFactor\Providers\Rng\CSRNGProvider;
use yxorP\app\lib\twoFactor\Providers\Rng\HashRNGProvider;
use yxorP\app\lib\twoFactor\Providers\Rng\IRNGProviderInterface;
use yxorP\app\lib\twoFactor\Providers\Rng\MCryptRNGProvider;
use yxorP\app\lib\twoFactor\Providers\Rng\OpenSSLRNGProvider;
use yxorP\app\lib\twoFactor\Providers\Time\HttpTimeProvider;
use yxorP\app\lib\twoFactor\Providers\Time\ITimeProviderInterface;
use yxorP\app\lib\twoFactor\Providers\Time\LocalMachineTimeProvider;
use yxorP\app\lib\twoFactor\Providers\Time\NTPTimeProvider;

class TwoFactorAuth
{
    private static string $_base32dict = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567=';
    private static array $_base32;
    private static array $_base32lookup = array();
    private static array $_supportedalgos = array('sha1', 'sha256', 'sha512', 'md5');
    private string $algorithm;
    private int $period;
    private int $digits;
    private mixed $issuer;
    private ?IQRCodeProviderInterface $qrcodeprovider = null;
    private ?IRNGProviderInterface $rngprovider = null;
    private ?ITimeProviderInterface $timeprovider = null;

    /**
     * @throws \yxorP\app\lib\twoFactor\TwoFactorAuthException
     */
    public function __construct($issuer = null, $digits = 6, $period = 30, $algorithm = 'sha1', IQRCodeProviderInterface $qrcodeprovider = null, IRNGProviderInterface $rngprovider = null, ITimeProviderInterface $timeprovider = null)
    {
        $this->issuer = $issuer;
        if (!is_int($digits) || $digits <= 0) {
            throw new TwoFactorAuthException('Digits must be int > 0');
        }
        $this->digits = $digits;
        if (!is_int($period) || $period <= 0) {
            throw new TwoFactorAuthException('Period must be int > 0');
        }
        $this->period = $period;
        $algorithm = strtolower(trim($algorithm));
        if (!in_array($algorithm, self::$_supportedalgos)) {
            throw new TwoFactorAuthException('Unsupported algorithm: ' . $algorithm);
        }
        $this->algorithm = $algorithm;
        $this->qrcodeprovider = $qrcodeprovider;
        $this->rngprovider = $rngprovider;
        $this->timeprovider = $timeprovider;
        self::$_base32 = str_split(self::$_base32dict);
        self::$_base32lookup = array_flip(self::$_base32);
    }

    /**
     * @throws \yxorP\app\lib\twoFactor\Providers\Rng\RNGException
     * @throws \yxorP\app\lib\twoFactor\TwoFactorAuthException
     */
    public function createSecret($bits = 80, $requirecryptosecure = true): string
    {
        $secret = '';
        $bytes = (int)ceil($bits / 5);
        $rngprovider = $this->getRngProvider();
        if ($requirecryptosecure && !$rngprovider->isCryptographicallySecure()) {
            throw new TwoFactorAuthException('RNG provider is not cryptographically secure');
        }
        $rnd = $rngprovider->getRandomBytes($bytes);
        for ($i = 0; $i < $bytes; $i++) {
            $secret .= self::$_base32[ord($rnd[$i]) & 31];
        }
        return $secret;
    }

    /**
     * @throws \yxorP\app\lib\twoFactor\TwoFactorAuthException
     */
    public function getRngProvider(): MCryptRNGProvider|OpenSSLRNGProvider|HashRNGProvider|IRNGProviderInterface|CSRNGProvider|null
    {
        if (null !== $this->rngprovider) {
            return $this->rngprovider;
        }
        if (function_exists('random_bytes')) {
            return $this->rngprovider = new CSRNGProvider();
        }
        if (function_exists('mcrypt_create_iv')) {
            return $this->rngprovider = new MCryptRNGProvider();
        }
        if (function_exists('openssl_random_pseudo_bytes')) {
            return $this->rngprovider = new OpenSSLRNGProvider();
        }
        if (function_exists('hash')) {
            return $this->rngprovider = new HashRNGProvider();
        }
        throw new TwoFactorAuthException('Unable to find a suited RNGProvider');
    }

    public function verifyCode($secret, $code, $discrepancy = 1, $time = null, &$timeslice = 0): bool
    {
        $timestamp = $this->getTime($time);
        $timeslice = 0;
        for ($i = -$discrepancy; $i <= $discrepancy; $i++) {
            $ts = $timestamp + ($i * $this->period);
            $slice = $this->getTimeSlice($ts);
            $timeslice = $this->codeEquals($this->getCode($secret, $ts), $code) ? $slice : $timeslice;
        }
        return $timeslice > 0;
    }

    private function getTime($time = null)
    {
        return ($time === null) ? $this->getTimeProvider()->getTime() : $time;
    }

    public function getTimeProvider(): ITimeProviderInterface|LocalMachineTimeProvider|null
    {
        if (null === $this->timeprovider) {
            return $this->timeprovider = new LocalMachineTimeProvider();
        }
        return $this->timeprovider;
    }

    private function getTimeSlice($time = null): float|int
    {
        return (int)floor($time / $this->period) + (0 * $this->period);
    }

    private function codeEquals($safe, $user): bool
    {
        if (function_exists('hash_equals')) {
            return hash_equals($safe, $user);
        }
        if (strlen($safe) === strlen($user)) {
            $result = 0;
            for ($i = 0; $i < strlen($safe); $i++) {
                $result |= (ord($safe[$i]) ^ ord($user[$i]));
            }
            return $result === 0;
        }
        return false;
    }

    /**
     * @throws \yxorP\app\lib\twoFactor\TwoFactorAuthException
     */
    public function getCode($secret, $time = null): string
    {
        $secretkey = $this->base32Decode($secret);
        $timestamp = "\0\0\0\0" . pack('N*', $this->getTimeSlice($this->getTime($time)));
        $hashhmac = hash_hmac($this->algorithm, $timestamp, $secretkey, true);
        $hashpart = substr($hashhmac, ord(substr($hashhmac, -1)) & 0x0F, 4);
        $value = unpack('N', $hashpart);
        $value = $value[1] & 0x7FFFFFFF;
        return str_pad((string)($value % pow(10, $this->digits)), $this->digits, '0', STR_PAD_LEFT);
    }

    /**
     * @throws \yxorP\app\lib\twoFactor\TwoFactorAuthException
     */
    private function base32Decode($value): string
    {
        if (strlen($value) == 0) {
            return '';
        }
        if (preg_match('/[^' . preg_quote(self::$_base32dict) . ']/', $value) !== 0) {
            throw new TwoFactorAuthException('Invalid base32 string');
        }
        $buffer = '';
        foreach (str_split($value) as $char) {
            if ($char !== '=') {
                $buffer .= str_pad(decbin(self::$_base32lookup[$char]), 5, '0', STR_PAD_LEFT);
            }
        }
        $length = strlen($buffer);
        $blocks = trim(chunk_split(substr($buffer, 0, $length - ($length % 8)), 8, ' '));
        $output = '';
        foreach (explode(' ', $blocks) as $block) {
            $output .= chr(bindec(str_pad($block, 8, '0', STR_PAD_RIGHT)));
        }
        return $output;
    }

    /**
     * @throws \yxorP\app\lib\twoFactor\Providers\Qr\QRException
     * @throws \yxorP\app\lib\twoFactor\TwoFactorAuthException
     */
    public function getQRCodeImageAsDataUri($label, $secret, $size = 200): string
    {
        if (!is_int($size) || $size <= 0) {
            throw new TwoFactorAuthException('Size must be int > 0');
        }
        $qrcodeprovider = $this->getQrCodeProvider();
        return 'data:' . $qrcodeprovider->getMimeType() . ';base64,' . base64_encode($qrcodeprovider->getQRCodeImage($this->getQRText($label, $secret), $size));
    }

    public function getQrCodeProvider(): IQRCodeProviderInterface|QRServerProvider|null
    {
        if (null === $this->qrcodeprovider) {
            return $this->qrcodeprovider = new QRServerProvider();
        }
        return $this->qrcodeprovider;
    }

    public function getQRText($label, $secret): string
    {
        return 'otpauth://totp/' . rawurlencode($label) . '?secret=' . rawurlencode($secret) . '&issuer=' . rawurlencode((string)$this->issuer) . '&period=' . $this->period . '&algorithm=' . rawurlencode(strtoupper($this->algorithm)) . '&digits=' . $this->digits;
    }

    /**
     * @throws \yxorP\app\lib\twoFactor\TwoFactorAuthException
     */
    public function ensureCorrectTime(array $timeproviders = null, $leniency = 5)
    {
        if ($timeproviders === null) {
            $timeproviders = array(new NTPTimeProvider(), new HttpTimeProvider());
        }
        $timeprovider = $this->getTimeProvider();
        foreach ($timeproviders as $t) {
            if (!($t instanceof ITimeProviderInterface)) {
                throw new TwoFactorAuthException('Object does not implement ITimeProvider');
            }
            if (abs($timeprovider->getTime() - $t->getTime()) > $leniency) {
                throw new TwoFactorAuthException(sprintf('Time for timeprovider is off by more than %d seconds when compared to %s', $leniency, get_class($t)));
            }
        }
    }
}
