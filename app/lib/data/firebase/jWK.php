<?php namespace Firebase\JWT;

use DomainException;
use InvalidArgumentException;
use UnexpectedValueException;
use function base64_encode;
use function chr;
use function chunk_split;
use function count;
use function is_null;
use function ltrim;
use function openssl_error_string;
use function openssl_pkey_get_public;
use function pack;
use function strlen;

class jWK
{
    public static function parseKeySet(array $jwks, string $defaultAlg = null): array
    {
        $keys = [];
        if (!isset($jwks['keys'])) {
            throw new UnexpectedValueException('"keys" member must exist in the JWK Set');
        }
        if (empty($jwks['keys'])) {
            throw new InvalidArgumentException('JWK Set did not contain any keys');
        }
        foreach ($jwks['keys'] as $k => $v) {
            $kid = isset($v['kid']) ? $v['kid'] : $k;
            if ($key = self::parseKey($v, $defaultAlg)) {
                $keys[(string)$kid] = $key;
            }
        }
        if (0 === count($keys)) {
            throw new UnexpectedValueException('No supported algorithms found in JWK Set');
        }
        return $keys;
    }

    public static function parseKey(array $jwk, string $defaultAlg = null): ?key
    {
        if (empty($jwk)) {
            throw new InvalidArgumentException('JWK must not be empty');
        }
        if (!isset($jwk['kty'])) {
            throw new UnexpectedValueException('JWK must contain a "kty" parameter');
        }
        if (!isset($jwk['alg'])) {
            if (is_null($defaultAlg)) {
                throw new UnexpectedValueException('JWK must contain an "alg" parameter');
            }
            $jwk['alg'] = $defaultAlg;
        }
        switch ($jwk['kty']) {
            case 'RSA':
                if (!empty($jwk['d'])) {
                    throw new UnexpectedValueException('RSA private keys are not supported');
                }
                if (!isset($jwk['n']) || !isset($jwk['e'])) {
                    throw new UnexpectedValueException('RSA keys must contain values for both "n" and "e"');
                }
                $pem = self::createPemFromModulusAndExponent($jwk['n'], $jwk['e']);
                $publicKey = openssl_pkey_get_public($pem);
                if (false === $publicKey) {
                    throw new DomainException('OpenSSL error: ' . openssl_error_string());
                }
                return new key($publicKey, $jwk['alg']);
            default:
                break;
        }
        return null;
    }

    private static function createPemFromModulusAndExponent(string $n, string $e): string
    {
        $mod = jWT::urlsafeB64Decode($n);
        $exp = jWT::urlsafeB64Decode($e);
        $modulus = pack('Ca*a*', 2, self::encodeLength(strlen($mod)), $mod);
        $publicExponent = pack('Ca*a*', 2, self::encodeLength(strlen($exp)), $exp);
        $rsaPublicKey = pack('Ca*a*a*', 48, self::encodeLength(strlen($modulus) + strlen($publicExponent)), $modulus, $publicExponent);
        $rsaOID = pack('H*', '300d06092a864886f70d0101010500');
        $rsaPublicKey = chr(0) . $rsaPublicKey;
        $rsaPublicKey = chr(3) . self::encodeLength(strlen($rsaPublicKey)) . $rsaPublicKey;
        $rsaPublicKey = pack('Ca*a*', 48, self::encodeLength(strlen($rsaOID . $rsaPublicKey)), $rsaOID . $rsaPublicKey);
        $rsaPublicKey = "-----BEGIN PUBLIC KEY-----\r\n" . chunk_split(base64_encode($rsaPublicKey), 64) . '-----END PUBLIC KEY-----';
        return $rsaPublicKey;
    }

    private static function encodeLength(int $length): string
    {
        if ($length <= 0x7F) {
            return chr($length);
        }
        $temp = ltrim(pack('N', $length), chr(0));
        return pack('Ca*', 0x80 | strlen($temp), $temp);
    }
}
