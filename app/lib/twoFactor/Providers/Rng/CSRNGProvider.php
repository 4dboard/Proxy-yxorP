<?php

namespace yxorP\app\lib\twoFactor\Providers\Rng;

class CSRNGProvider implements IRNGProviderInterface
{
    /**
     * {@inheritdoc}
     * @throws \Exception
     */
    public function getRandomBytes(int $bytecount): string
    {
        return random_bytes($bytecount);    // PHP7+
    }

    /**
     * {@inheritdoc}
     */
    public function isCryptographicallySecure(): bool
    {
        return true;
    }
}
