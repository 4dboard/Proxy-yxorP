<?php /* yxorP */


require __DIR__ . '/shared.php';

// Developers can implement Predis\Distribution\DistributorInterface to create
// their own distributors used by the client to distribute keys among a cluster
// of servers.

use Predis\Cluster\Distributor\DistributorInterface;
use Predis\Cluster\Hash\HashGeneratorInterface;
use Predis\Cluster\PredisStrategy;
use Predis\Connection\Aggregate\PredisCluster;

class NaiveDistributor implements DistributorInterface, HashGeneratorInterface
{
    private array $nodes;
    private int $nodesCount;

    public function __construct()
    {
        $this->nodes = array();
        $this->nodesCount = 0;
    }

    public function add($node, $weight = null)
    {
        $this->nodes[] = $node;
        $this->nodesCount++;
    }

    public function remove($node)
    {
        $this->nodes = array_filter($this->nodes, static function ($n) use ($node) {
            return $n !== $node;
        });

        $this->nodesCount = count($this->nodes);
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
        if (!$this->nodesCount) {
            throw new RuntimeException('No connections.');
        }

        $slot = $this->getSlot($hash);
        return $this->getBySlot($slot);
    }

    public function getSlot($hash): float|int
    {
        return $this->nodesCount > 1 ? abs($hash % $this->nodesCount) : 0;
    }

    public function getBySlot($slot)
    {
        return $this->nodes[$slot] ?? null;
    }

    public function getHashGenerator(): static
    {
        return $this;
    }
}

$options = array(
    'cluster' => static function () {
        $distributor = new NaiveDistributor();
        $strategy = new PredisStrategy($distributor);
        return new PredisCluster($strategy);
    },
);

$client = new Predis\Client($multiple_servers, $options);

for ($i = 0; $i < 100; $i++) {
    $client->set("key:$i", str_pad($i, 4, '0', 0));
    $client->get("key:$i");
}

try {
    $server1 = $client->getClientFor('first')->info();
} catch (\Predis\NotSupportedException $e) {
}
try {
    $server2 = $client->getClientFor('second')->info();
} catch (\Predis\NotSupportedException $e) {
}

if (isset($server1['Keyspace'], $server2['Keyspace'])) {
    $server1 = $server1['Keyspace'];
    $server2 = $server2['Keyspace'];
}

printf("Server '%s' has %d keys while server '%s' has %d keys.\n",
    'first', $server1['db15']['keys'], 'second', $server2['db15']['keys']
);
