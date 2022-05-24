<?php /* yxorP */

namespace Predis\Cluster;

use Predis\Cluster\Distributor\DistributorInterface;
use Predis\Cluster\Distributor\HashRing;

/**
 * @property DistributorInterface|HashRing $distributor
 */
class PredisStrategy extends ClusterStrategy
{
    protected HashRing|DistributorInterface $distributor;

    #[Pure] public function __construct(DistributorInterface $distributor = null)
    {
        parent::__construct();

        if ($distributor) {
            $this->distributor = $distributor;
        } else {
            $this->distributor = new HashRing();
        }
    }

    public function getSlotByKey($key)
    {
        $key = $this->extractKeyTag($key);
        $hash = $this->distributor->hash($key);
        return $this->distributor->getSlot($hash);
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

            /** @var TYPE_NAME $currentKey */
            if ($currentKey !== $nextKey) {
                return false;
            }

            $currentKey = $nextKey;
        }

        return true;
    }
}
