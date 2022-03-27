<?php /* yxorP */


namespace Predis\Cluster\Distributor;


use JetBrains\PhpStorm\Pure;

class KetamaRing extends HashRing
{
    public const DEFAULT_REPLICAS = 160;


    #[Pure] public function __construct($nodeHashCallback = null)
    {
        parent::__construct($this::DEFAULT_REPLICAS, $nodeHashCallback);
    }

    public function hash($value)
    {
        $hash = unpack('V', md5($value, true));

        return $hash[1];
    }

    protected function addNodeToRing(&$ring, $node, $totalNodes, $replicas, $weightRatio)
    {
        $nodeObject = $node['object'];
        $nodeHash = $this->getNodeHash($nodeObject);
        $replicas = (int)floor($weightRatio * $totalNodes * ($replicas / 4));

        for ($i = 0; $i < $replicas; $i++) {
            $unpackedDigest = unpack('V4', md5("$nodeHash-$i", true));

            foreach ($unpackedDigest as $key) {
                $ring[$key] = $nodeObject;
            }
        }
    }

    protected function wrapAroundStrategy($upper, $lower, $ringKeysCount): int
    {
        // Binary search for the first item in ringkeys with a value greater
        // or equal to the key. If no such item exists, return the first item.
        return $lower < $ringKeysCount ? $lower : 0;
    }
}
