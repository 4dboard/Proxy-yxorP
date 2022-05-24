<?php /* yxorP */

/* yxorP */

namespace Predis\Connection\Aggregate;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use Predis\Cluster\Distributor\DistributorInterface;
use Predis\Cluster\Distributor\EmptyRingException;
use Predis\Cluster\Distributor\HashRing;
use Predis\Cluster\PredisStrategy;
use Predis\Cluster\StrategyInterface;
use Predis\Command\CommandInterface;
use Predis\Connection\NodeConnectionInterface;
use Predis\NotSupportedException;

abstract class PredisCluster implements ClusterInterface, IteratorAggregate, Countable
{
    private array $pool;
    private PredisStrategy|StrategyInterface $strategy;
    private HashRing|DistributorInterface $distributor;

    public function __construct(StrategyInterface $strategy = null)
    {
        $this->pool = array();
        $this->strategy = $strategy ?: new PredisStrategy();
        $this->distributor = $this->strategy->getDistributor();
    }

    public function isConnected(): bool
    {
        foreach ($this->pool as $connection) {
            if ($connection->isConnected()) {
                return true;
            }
        }

        return false;
    }

    public function connect()
    {
        foreach ($this->pool as $connection) {
            $connection->connect();
        }
    }

    public function disconnect()
    {
        foreach ($this->pool as $connection) {
            $connection->disconnect();
        }
    }

    public function add(NodeConnectionInterface $connection)
    {
        $parameters = $connection->getParameters();

        if (isset($parameters->alias)) {
            $this->pool[$parameters->alias] = $connection;
        } else {
            $this->pool[] = $connection;
        }

        $weight = $parameters->weight ?? null;
        $this->distributor->add($connection, $weight);
    }

    public function removeById($connectionID): bool
    {
        if ($connection = $this->getConnectionById($connectionID)) {
            return $this->remove($connection);
        }

        return false;
    }

    public function getConnectionById($connectionID)
    {
        return $this->pool[$connectionID] ?? null;
    }

    public function remove(NodeConnectionInterface $connection): bool
    {
        if (($id = array_search($connection, $this->pool, true)) !== false) {
            unset($this->pool[$id]);
            $this->distributor->remove($connection);

            return true;
        }

        return false;
    }

    /**
     * @throws EmptyRingException
     */
    public function getConnectionByKey($key)
    {
        $hash = $this->strategy->getSlotByKey($key);
        return $this->distributor->getBySlot($hash);
    }

    public function getClusterStrategy(): StrategyInterface|PredisStrategy
    {
        return $this->strategy;
    }

    public function count(): int
    {
        return count($this->pool);
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->pool);
    }

    /**
     * @throws NotSupportedException
     * @throws EmptyRingException
     */
    public function writeRequest(CommandInterface $command)
    {
        $this->getConnection($command)->writeRequest($command);
    }

    /**
     * @throws NotSupportedException|EmptyRingException
     */
    public function getConnection(CommandInterface $command)
    {
        $slot = $this->strategy->getSlot($command);

        if (!isset($slot)) {
            throw new NotSupportedException(
                "Cannot use '{$command->getId()}' over clusters of connections."
            );
        }

        return $this->distributor->getBySlot($slot);
    }

    /**
     * @throws NotSupportedException
     */
    public function readResponse(CommandInterface $command): mixed
    {
        try {
            return $this->getConnection($command)->readResponse($command);
        } catch (EmptyRingException|NotSupportedException $e) {
        }
    }

    public function executeCommandOnNodes(CommandInterface $command): array
    {
        $responses = array();

        foreach ($this->pool as $connection) {
            $responses[] = $connection->executeCommand($command);
        }

        return $responses;
    }

    /**
     * @throws NotSupportedException
     */
    public function executeCommand(CommandInterface $command): mixed
    {
        try {
            return $this->getConnection($command)->executeCommand($command);
        } catch (EmptyRingException|NotSupportedException $e) {
        }
    }
}
