<?php

namespace yxorP\app\lib\twoFactor\Providers\Rng;

class CSRNGProvider implements IRNGProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getRandomBytes($bytecount)
    {
        return random_bytes($bytecount);    // PHP7+
    }

    /**
     * {@inheritdoc}
     */
    public function isCryptographicallySecure()
    {
        return true;
    }
}
