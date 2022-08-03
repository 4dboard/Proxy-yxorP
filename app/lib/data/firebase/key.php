<?php namespace yxorP\app\lib\data\firebase;

use InvalidArgumentException;
use OpenSSLAsymmetricKey;
use OpenSSLCertificate;
use TypeError;
use function is_resource;
use function is_string;

class key
{
    private $keyMaterial;
    private string $algorithm;

    public function __construct($keyMaterial, string $algorithm)
    {
        if (!is_string($keyMaterial) && !$keyMaterial instanceof OpenSSLAsymmetricKey && !$keyMaterial instanceof OpenSSLCertificate && !is_resource($keyMaterial)) {
            throw new TypeError('Key material must be a string, resource, or OpenSSLAsymmetricKey');
        }
        if (empty($keyMaterial)) {
            throw new InvalidArgumentException('Key material must not be empty');
        }
        if (empty($algorithm)) {
            throw new InvalidArgumentException('Algorithm must not be empty');
        }
        $this->keyMaterial = $keyMaterial;
        $this->algorithm = $algorithm;
    }

    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }

    public function getKeyMaterial(): OpenSSLAsymmetricKey|string|OpenSSLCertificate
    {
        return $this->keyMaterial;
    }
}
