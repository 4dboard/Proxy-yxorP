<?php

namespace Firebase\JWT;

use InvalidArgumentException;
use OpenSSLAsymmetricKey;

class Key
{
    /** @var string $algorithm */
    private string $algorithm;

    /** @var string|resource|OpenSSLAsymmetricKey $keyMaterial */
    private $keyMaterial;

    /**
     * @param OpenSSLAsymmetricKey|string $keyMaterial
     * @param string $algorithm
     */
    public function __construct(OpenSSLAsymmetricKey|string $keyMaterial, string $algorithm)
    {
        if (
            !is_string($keyMaterial)
            && !is_resource($keyMaterial)
            && !$keyMaterial instanceof OpenSSLAsymmetricKey
        ) {
            throw new InvalidArgumentException('Type error: $keyMaterial must be a string, resource, or OpenSSLAsymmetricKey');
        }

        if (empty($keyMaterial)) {
            throw new InvalidArgumentException('Type error: $keyMaterial must not be empty');
        }

        if (!is_string($algorithm)) {
            throw new InvalidArgumentException('Type error: $algorithm must be a string');
        }

        $this->keyMaterial = $keyMaterial;
        $this->algorithm = $algorithm;
    }

    /**
     * Return the algorithm valid for this key
     *
     * @return string
     */
    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }

    /**
     * @return string|resource|OpenSSLAsymmetricKey
     */
    public function getKeyMaterial(): OpenSSLAsymmetricKey|string
    {
        return $this->keyMaterial;
    }
}
