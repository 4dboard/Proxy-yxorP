<?php /* yxorP */


namespace Predis\Cluster\Distributor;

use Predis\Cluster\Hash\HashGeneratorInterface;


class HashRing implements DistributorInterface, HashGeneratorInterface
{
    public const DEFAULT_REPLICAS = 128;
    public const DEFAULT_WEIGHT = 100;

    private $ring;
    private $ringKeys;
    private $ringKeysCount;
    private mixed $replicas;
    private mixed $nodeHashCallback;
    private array $nodes = array();


    public function __construct($replicas = self::DEFAULT_REPLICAS, $nodeHashCallback = null)
    {
        $this->replicas = $replicas;
        $this->nodeHashCallback = $nodeHashCallback;
    }


    public function add($node, $weight = null)
    {
        // In case of collisions in the hashes of the nodes, the node added
        // last wins, thus the order in which nodes are added is significant.
        $this->nodes[] = array(
            'object' => $node,
            'weight' => (int)$weight ?: $this::DEFAULT_WEIGHT
        );

        $this->reset();
    }

    private function reset(): void
    {
        unset(
            $this->ring,
            $this->ringKeys,
            $this->ringKeysCount
        );
    }

    public function remove($node)
    {
        // A node is removed by resetting the ring so that it's recreated from
        // scratch, in order to reassign possible hashes with collisions to the
        // right node according to the order in which they were added in the
        // first place.
        foreach ($this->nodes as $i => $iValue) {
            if ($iValue['object'] === $node) {
                array_splice($this->nodes, $i, 1);
                $this->reset();

                break;
            }
        }
    }

    /**
     * @throws EmptyRingException
     */
    public function getBySlot($slot)
    {
        $this->initialize();

        return $this->ring[$slot] ?? null;
    }

    /**
     * @throws EmptyRingException
     */
    private function initialize(): void
    {
        if ($this->isInitialized()) {
            return;
        }

        if (!$this->nodes) {
            throw new EmptyRingException('Cannot initialize an empty hashring.');
        }

        $this->ring = array();
        $totalWeight = $this->computeTotalWeight();
        $nodesCount = count($this->nodes);

        foreach ($this->nodes as $node) {
            $weightRatio = $node['weight'] / $totalWeight;
            $this->addNodeToRing($this->ring, $node, $nodesCount, $this->replicas, $weightRatio);
        }

        ksort($this->ring, SORT_NUMERIC);
        $this->ringKeys = array_keys($this->ring);
        $this->ringKeysCount = count($this->ringKeys);
    }

    private function isInitialized(): bool
    {
        return isset($this->ringKeys);
    }

    private function computeTotalWeight()
    {
        $totalWeight = 0;

        foreach ($this->nodes as $node) {
            $totalWeight += $node['weight'];
        }

        return $totalWeight;
    }

    protected function addNodeToRing(&$ring, $node, $totalNodes, $replicas, $weightRatio)
    {
        $nodeObject = $node['object'];
        $nodeHash = $this->getNodeHash($nodeObject);
        $replicas = (int)round($weightRatio * $totalNodes * $replicas);

        for ($i = 0; $i < $replicas; $i++) {
            $key = crc32("$nodeHash:$i");
            $ring[$key] = $nodeObject;
        }
    }

    protected function getNodeHash($nodeObject)
    {
        if (!isset($this->nodeHashCallback)) {
            return (string)$nodeObject;
        }

        return call_user_func($this->nodeHashCallback, $nodeObject);
    }

    public function get($value)
    {
        $hash = $this->hash($value);
        return $this->getByHash($hash);
    }

    public function hash($value): int
    {
        return crc32($value);
    }

    public function getByHash($hash)
    {
        try {
            return $this->ring[$this->getSlot($hash)];
        } catch (EmptyRingException $e) {
        }
    }

    /**
     * @throws EmptyRingException
     */
    public function getSlot($hash)
    {
        $this->initialize();

        $ringKeys = $this->ringKeys;
        $upper = $this->ringKeysCount - 1;
        $lower = 0;

        while ($lower <= $upper) {
            $index = ($lower + $upper) >> 1;
            $item = $ringKeys[$index];

            if ($item > $hash) {
                $upper = $index - 1;
            } elseif ($item < $hash) {
                $lower = $index + 1;
            } else {
                return $item;
            }
        }

        return $ringKeys[$this->wrapAroundStrategy($upper, $lower, $this->ringKeysCount)];
    }

    protected function wrapAroundStrategy($upper, $lower, $ringKeysCount): int
    {
        // Binary search for the last item in ringkeys with a value less or
        // equal to the key. If no such item exists, return the last item.
        return $upper >= 0 ? $upper : $ringKeysCount - 1;
    }


    public function getHashGenerator(): static
    {
        return $this;
    }
}
