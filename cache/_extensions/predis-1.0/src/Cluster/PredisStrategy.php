<?php /* yxorP */

namespace Predis\Cluster;

use JetBrains\PhpStorm\Pure;
use Predis\Cluster\Distributor\DistributorInterface;
use Predis\Cluster\Distributor\HashRing;

class PredisStrategy extends ClusterStrategy
{
    protected HashRing|DistributorInterface $distributor;

    #[Pure] #[Pure] public function __construct(DistributorInterface $distributor = null)
    {
        parent::__construct();

        $this->distributor = $distributor ?: new HashRing();
    }

    public function getSlotByKey($key)
    {
        $key = $this->extractKeyTag($key);
        $hash = $this->distributor->hash($key);
        try {
            return $this->distributor->getSlot($hash);
        } catch (Distributor\EmptyRingException $e) {
        }
    }

    public function getDistributor(): DistributorInterface|HashRing
    {
        return $this->distributor;
    }

    protected function checkSameSlotForKeys(array $keys): bool
    {
        if (!$count = count($keys)) {
            return false;
        }

        $currentKey = $this->extractKeyTag($keys[0]);

        for ($i = 1; $i < $count; $i++) {
            $nextKey = $this->extractKeyTag($keys[$i]);

            if ($currentKey !== $nextKey) {
                return false;
            }

            $currentKey = $nextKey;
        }

        return true;
    }
}
