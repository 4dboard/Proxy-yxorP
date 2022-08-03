<?php

namespace yxorP\app\lib\twoFactor\Providers\Rng;

class MCryptRNGProvider implements IRNGProviderInterface
{
    /** @var int */
    private int $source;

    /**
     * @param int $source
     */
    public function __construct(int $source = MCRYPT_DEV_URANDOM)
    {
        $this->source = $source;
    }

    /**
     * {@inheritdoc}
     * @throws \yxorP\app\lib\twoFactor\Providers\Rng\RNGException
     */
    public function getRandomBytes(int $bytecount): string
    {
        $result = @mcrypt_create_iv($bytecount, $this->source);
        if ($result === false) {
            throw new RNGException('mcrypt_create_iv returned an invalid value');
        }
        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function isCryptographicallySecure(): bool
    {
        return true;
    }
}
