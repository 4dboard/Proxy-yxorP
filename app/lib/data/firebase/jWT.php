<?php namespace yxorP\app\lib\data\firebase;

use DateTime;
use DateTimeInterface;
use DomainException;
use Exception;
use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use stdClass;
use UnexpectedValueException;
use function array_merge;
use function base64_decode;
use function base64_encode;
use function chr;
use function count;
use function date;
use function explode;
use function function_exists;
use function hash_equals;
use function hash_hmac;
use function implode;
use function is_array;
use function is_null;
use function is_string;
use function json_decode;
use function json_encode;
use function json_last_error;
use function ltrim;
use function mb_strlen;
use function min;
use function openssl_error_string;
use function openssl_sign;
use function openssl_verify;
use function ord;
use function str_pad;
use function str_repeat;
use function str_replace;
use function str_split;
use function strlen;
use function strtr;
use function substr;
use function time;
use const JSON_UNESCAPED_SLASHES;

class jWT
{
    private const ASN1_INTEGER = 0x02;
    private const ASN1_SEQUENCE = 0x10;
    private const ASN1_BIT_STRING = 0x03;
    public static $leeway = 0;
    public static $timestamp = null;
    public static $supported_algs = ['ES384' => ['openssl', 'SHA384'], 'ES256' => ['openssl', 'SHA256'], 'HS256' => ['hash_hmac', 'SHA256'], 'HS384' => ['hash_hmac', 'SHA384'], 'HS512' => ['hash_hmac', 'SHA512'], 'RS256' => ['openssl', 'SHA256'], 'RS384' => ['openssl', 'SHA384'], 'RS512' => ['openssl', 'SHA512'], 'EdDSA' => ['sodium_crypto', 'EdDSA'],];

    public static function decode(string $jwt, $keyOrKeyArray): stdClass
    {
        $timestamp = is_null(static::$timestamp) ? time() : static::$timestamp;
        if (empty($keyOrKeyArray)) {
            throw new InvalidArgumentException('Key may not be empty');
        }
        $tks = explode('.', $jwt);
        if (count($tks) != 3) {
            throw new UnexpectedValueException('Wrong number of segments');
        }
        list($headb64, $bodyb64, $cryptob64) = $tks;
        $headerRaw = static::urlsafeB64Decode($headb64);
        if (null === ($header = static::jsonDecode($headerRaw))) {
            throw new UnexpectedValueException('Invalid header encoding');
        }
        $payloadRaw = static::urlsafeB64Decode($bodyb64);
        if (null === ($payload = static::jsonDecode($payloadRaw))) {
            throw new UnexpectedValueException('Invalid claims encoding');
        }
        if (is_array($payload)) {
            $payload = (object)$payload;
        }
        if (!$payload instanceof stdClass) {
            throw new UnexpectedValueException('Payload must be a JSON object');
        }
        $sig = static::urlsafeB64Decode($cryptob64);
        if (empty($header->alg)) {
            throw new UnexpectedValueException('Empty algorithm');
        }
        if (empty(static::$supported_algs[$header->alg])) {
            throw new UnexpectedValueException('Algorithm not supported');
        }
        $key = self::getKey($keyOrKeyArray, property_exists($header, 'kid') ? $header->kid : null);
        if (!self::constantTimeEquals($key->getAlgorithm(), $header->alg)) {
            throw new UnexpectedValueException('Incorrect key for this algorithm');
        }
        if ($header->alg === 'ES256' || $header->alg === 'ES384') {
            $sig = self::signatureToDER($sig);
        }
        if (!self::verify("$headb64.$bodyb64", $sig, $key->getKeyMaterial(), $header->alg)) {
            throw new signatureInvalidException('Signature verification failed');
        }
        if (isset($payload->nbf) && $payload->nbf > ($timestamp + static::$leeway)) {
            throw new beforeValidException('Cannot handle token prior to ' . date(DateTimeInterface::ISO8601, $payload->nbf));
        }
        if (isset($payload->iat) && $payload->iat > ($timestamp + static::$leeway)) {
            throw new beforeValidException('Cannot handle token prior to ' . date(DateTimeInterface::ISO8601, $payload->iat));
        }
        if (isset($payload->exp) && ($timestamp - static::$leeway) >= $payload->exp) {
            throw new expiredException('Expired token');
        }
        return $payload;
    }

    public static function urlsafeB64Decode(string $input): string
    {
        $remainder = strlen($input) % 4;
        if ($remainder) {
            $padlen = 4 - $remainder;
            $input .= str_repeat('=', $padlen);
        }
        return base64_decode(strtr($input, '-_', '+/'));
    }

    public static function jsonDecode(string $input)
    {
        $obj = json_decode($input, false, 512, JSON_BIGINT_AS_STRING);
        if ($errno = json_last_error()) {
            self::handleJsonError($errno);
        } elseif ($obj === null && $input !== 'null') {
            throw new DomainException('Null result with non-null input');
        }
        return $obj;
    }

    private static function handleJsonError(int $errno): void
    {
        $messages = [JSON_ERROR_DEPTH => 'Maximum stack depth exceeded', JSON_ERROR_STATE_MISMATCH => 'Invalid or malformed JSON', JSON_ERROR_CTRL_CHAR => 'Unexpected control character found', JSON_ERROR_SYNTAX => 'Syntax error, malformed JSON', JSON_ERROR_UTF8 => 'Malformed UTF-8 characters'];
        throw new DomainException($messages[$errno] ?? 'Unknown JSON error: ' . $errno);
    }

    private static function getKey($keyOrKeyArray, ?string $kid): key
    {
        if ($keyOrKeyArray instanceof key) {
            return $keyOrKeyArray;
        }
        if ($keyOrKeyArray instanceof cachedKeySet) {
            return $keyOrKeyArray[$kid];
        }
        if (empty($kid)) {
            throw new UnexpectedValueException('"kid" empty, unable to lookup correct key');
        }
        if (!isset($keyOrKeyArray[$kid])) {
            throw new UnexpectedValueException('"kid" invalid, unable to lookup correct key');
        }
        return $keyOrKeyArray[$kid];
    }

    #[Pure] public static function constantTimeEquals(string $left, string $right): bool
    {
        if (function_exists('hash_equals')) {
            return hash_equals($left, $right);
        }
        $len = min(self::safeStrlen($left), self::safeStrlen($right));
        $status = 0;
        for ($i = 0; $i < $len; $i++) {
            $status |= (ord($left[$i]) ^ ord($right[$i]));
        }
        $status |= (self::safeStrlen($left) ^ self::safeStrlen($right));
        return ($status === 0);
    }

    private static function safeStrlen(string $str): int
    {
        if (function_exists('mb_strlen')) {
            return mb_strlen($str, '8bit');
        }
        return strlen($str);
    }

    #[Pure] private static function signatureToDER(string $sig): string
    {
        $length = max(1, (int)(strlen($sig) / 2));
        list($r, $s) = str_split($sig, $length);
        $r = ltrim($r, "\x00");
        $s = ltrim($s, "\x00");
        if (ord($r[0]) > 0x7f) {
            $r = "\x00" . $r;
        }
        if (ord($s[0]) > 0x7f) {
            $s = "\x00" . $s;
        }
        return self::encodeDER(self::ASN1_SEQUENCE, self::encodeDER(self::ASN1_INTEGER, $r) . self::encodeDER(self::ASN1_INTEGER, $s));
    }

    private static function encodeDER(int $type, string $value): string
    {
        $tag_header = 0;
        if ($type === self::ASN1_SEQUENCE) {
            $tag_header |= 0x20;
        }
        $der = chr($tag_header | $type);
        $der .= chr(strlen($value));
        return $der . $value;
    }

    private static function verify(string $msg, string $signature, $keyMaterial, string $alg): bool
    {
        if (empty(static::$supported_algs[$alg])) {
            throw new DomainException('Algorithm not supported');
        }
        list($function, $algorithm) = static::$supported_algs[$alg];
        switch ($function) {
            case 'openssl':
                $success = openssl_verify($msg, $signature, $keyMaterial, $algorithm);
                if ($success === 1) {
                    return true;
                } elseif ($success === 0) {
                    return false;
                }
                throw new DomainException('OpenSSL error: ' . openssl_error_string());
            case 'sodium_crypto':
                if (!function_exists('sodium_crypto_sign_verify_detached')) {
                    throw new DomainException('libsodium is not available');
                }
                if (!is_string($keyMaterial)) {
                    throw new InvalidArgumentException('key must be a string when using EdDSA');
                }
                try {
                    $lines = array_filter(explode("\n", $keyMaterial));
                    $key = base64_decode((string)end($lines));
                    return sodium_crypto_sign_verify_detached($signature, $msg, $key);
                } catch (Exception $e) {
                    throw new DomainException($e->getMessage(), 0, $e);
                }
            case 'hash_hmac':
            default:
                if (!is_string($keyMaterial)) {
                    throw new InvalidArgumentException('key must be a string when using hmac');
                }
                $hash = hash_hmac($algorithm, $msg, $keyMaterial, true);
                return self::constantTimeEquals($hash, $signature);
        }
    }

    public static function encode(array $payload, $key, string $alg, string $keyId = null, array $head = null): string
    {
        $header = ['typ' => 'JWT', 'alg' => $alg];
        if ($keyId !== null) {
            $header['kid'] = $keyId;
        }
        if (isset($head)) {
            $header = array_merge($head, $header);
        }
        $segments = [];
        $segments[] = static::urlsafeB64Encode(static::jsonEncode($header));
        $segments[] = static::urlsafeB64Encode(static::jsonEncode($payload));
        $signing_input = implode('.', $segments);
        $signature = static::sign($signing_input, $key, $alg);
        $segments[] = static::urlsafeB64Encode($signature);
        return implode('.', $segments);
    }

    public static function urlsafeB64Encode(string $input): string
    {
        return str_replace('=', '', strtr(base64_encode($input), '+/', '-_'));
    }

    public static function jsonEncode(array $input): string
    {
        if (PHP_VERSION_ID >= 50400) {
            $json = json_encode($input, JSON_UNESCAPED_SLASHES);
        } else {
            $json = json_encode($input);
        }
        if ($errno = json_last_error()) {
            self::handleJsonError($errno);
        } elseif ($json === 'null') {
            throw new DomainException('Null result with non-null input');
        }
        if ($json === false) {
            throw new DomainException('Provided object could not be encoded to valid JSON');
        }
        return $json;
    }

    public static function sign(string $msg, $key, string $alg): string
    {
        if (empty(static::$supported_algs[$alg])) {
            throw new DomainException('Algorithm not supported');
        }
        list($function, $algorithm) = static::$supported_algs[$alg];
        switch ($function) {
            case 'hash_hmac':
                if (!is_string($key)) {
                    throw new InvalidArgumentException('key must be a string when using hmac');
                }
                return hash_hmac($algorithm, $msg, $key, true);
            case 'openssl':
                $signature = '';
                $success = openssl_sign($msg, $signature, $key, $algorithm);
                if (!$success) {
                    throw new DomainException('OpenSSL unable to sign data');
                }
                if ($alg === 'ES256') {
                    $signature = self::signatureFromDER($signature, 256);
                } elseif ($alg === 'ES384') {
                    $signature = self::signatureFromDER($signature, 384);
                }
                return $signature;
            case 'sodium_crypto':
                if (!function_exists('sodium_crypto_sign_detached')) {
                    throw new DomainException('libsodium is not available');
                }
                if (!is_string($key)) {
                    throw new InvalidArgumentException('key must be a string when using EdDSA');
                }
                try {
                    $lines = array_filter(explode("\n", $key));
                    $key = base64_decode((string)end($lines));
                    return sodium_crypto_sign_detached($msg, $key);
                } catch (Exception $e) {
                    throw new DomainException($e->getMessage(), 0, $e);
                }
        }
        throw new DomainException('Algorithm not supported');
    }

    private static function signatureFromDER(string $der, int $keySize): string
    {
        list($offset, $_) = self::readDER($der);
        list($offset, $r) = self::readDER($der, $offset);
        list($offset, $s) = self::readDER($der, $offset);
        $r = ltrim($r, "\x00");
        $s = ltrim($s, "\x00");
        $r = str_pad($r, $keySize / 8, "\x00", STR_PAD_LEFT);
        $s = str_pad($s, $keySize / 8, "\x00", STR_PAD_LEFT);
        return $r . $s;
    }

    private static function readDER(string $der, int $offset = 0): array
    {
        $pos = $offset;
        $size = strlen($der);
        $constructed = (ord($der[$pos]) >> 5) & 0x01;
        $type = ord($der[$pos++]) & 0x1f;
        $len = ord($der[$pos++]);
        if ($len & 0x80) {
            $n = $len & 0x1f;
            $len = 0;
            while ($n-- && $pos < $size) {
                $len = ($len << 8) | ord($der[$pos++]);
            }
        }
        if ($type == self::ASN1_BIT_STRING) {
            $pos++;
            $data = substr($der, $pos, $len - 1);
            $pos += $len - 1;
        } elseif (!$constructed) {
            $data = substr($der, $pos, $len);
            $pos += $len;
        } else {
            $data = null;
        }
        return [$pos, $data];
    }
}
