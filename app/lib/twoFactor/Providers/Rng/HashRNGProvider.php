<?php

namespace yxorP\app\lib\twoFactor\Providers\Rng;

class HashRNGProvider implements IRNGProviderInterface
{
    /** @var string */
    private mixed $algorithm;

    /**
     * @param string $algorithm
     * @throws \yxorP\app\lib\twoFactor\Providers\Rng\RNGException
     */
    public function __construct(string $algorithm = 'sha256')
    {
        $algos = array_values(hash_algos());
        if (!in_array($algorithm, $algos, true)) {
            throw new RNGException('Unsupported algorithm specified');
        }
        $this->algorithm = $algorithm;
    }

    /**
     * {@inheritdoc}
     */
    public function getRandomBytes(int $bytecount)
    {
        $result = '';
        $hash = mt_rand();
        for ($i = 0; $i < $bytecount; $i++) {
            $hash = hash($this->algorithm, $hash . mt_rand(), true);
            $result .= $hash[mt_rand(0, strlen($hash) - 1)];
        }
        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function isCryptographicallySecure()
    {
        return false;
    }
}
