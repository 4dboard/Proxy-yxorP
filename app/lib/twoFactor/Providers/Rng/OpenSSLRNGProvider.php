<?php

namespace yxorP\app\lib\twoFactor\Providers\Rng;

class OpenSSLRNGProvider implements IRNGProviderInterface
{
    /** @var bool */
    private bool $requirestrong;

    /**
     * @param bool $requirestrong
     */
    public function __construct(bool $requirestrong = true)
    {
        $this->requirestrong = $requirestrong;
    }

    /**
     * {@inheritdoc}
     * @throws \yxorP\app\lib\twoFactor\Providers\Rng\RNGException
     * @throws \yxorP\app\lib\twoFactor\Providers\Rng\RNGException
     */
    public function getRandomBytes(int $bytecount)
    {
        $result = openssl_random_pseudo_bytes($bytecount, $crypto_strong);
        if ($this->requirestrong && ($crypto_strong === false)) {
            throw new RNGException('openssl_random_pseudo_bytes returned non-cryptographically strong value');
        }
        if ($result == false) {
            throw new RNGException('openssl_random_pseudo_bytes returned an invalid value');
        }
        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function isCryptographicallySecure()
    {
        return $this->requirestrong;
    }
}
