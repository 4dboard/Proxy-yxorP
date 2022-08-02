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
    private static $_base32dict = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567=';
    private static $_base32;
    private static $_base32lookup = array();
    private static $_supportedalgos = array('sha1', 'sha256', 'sha512', 'md5');
    private $algorithm;
    private $period;
    private $digits;
    private $issuer;
    private $qrcodeprovider = null;
    private $rngprovider = null;
    private $timeprovider = null;

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

    public function createSecret($bits = 80, $requirecryptosecure = true)
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

    public function getRngProvider()
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

    public function verifyCode($secret, $code, $discrepancy = 1, $time = null, &$timeslice = 0)
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

    public function getTimeProvider()
    {
        if (null === $this->timeprovider) {
            return $this->timeprovider = new LocalMachineTimeProvider();
        }
        return $this->timeprovider;
    }

    private function getTimeSlice($time = null, $offset = 0)
    {
        return (int)floor($time / $this->period) + ($offset * $this->period);
    }

    private function codeEquals($safe, $user)
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

    public function getCode($secret, $time = null)
    {
        $secretkey = $this->base32Decode($secret);
        $timestamp = "\0\0\0\0" . pack('N*', $this->getTimeSlice($this->getTime($time)));
        $hashhmac = hash_hmac($this->algorithm, $timestamp, $secretkey, true);
        $hashpart = substr($hashhmac, ord(substr($hashhmac, -1)) & 0x0F, 4);
        $value = unpack('N', $hashpart);
        $value = $value[1] & 0x7FFFFFFF;
        return str_pad((string)($value % pow(10, $this->digits)), $this->digits, '0', STR_PAD_LEFT);
    }

    private function base32Decode($value)
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

    public function getQRCodeImageAsDataUri($label, $secret, $size = 200)
    {
        if (!is_int($size) || $size <= 0) {
            throw new TwoFactorAuthException('Size must be int > 0');
        }
        $qrcodeprovider = $this->getQrCodeProvider();
        return 'data:' . $qrcodeprovider->getMimeType() . ';base64,' . base64_encode($qrcodeprovider->getQRCodeImage($this->getQRText($label, $secret), $size));
    }

    public function getQrCodeProvider()
    {
        if (null === $this->qrcodeprovider) {
            return $this->qrcodeprovider = new QRServerProvider();
        }
        return $this->qrcodeprovider;
    }

    public function getQRText($label, $secret)
    {
        return 'otpauth://totp/' . rawurlencode($label) . '?secret=' . rawurlencode($secret) . '&issuer=' . rawurlencode((string)$this->issuer) . '&period=' . intval($this->period) . '&algorithm=' . rawurlencode(strtoupper($this->algorithm)) . '&digits=' . intval($this->digits);
    }

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