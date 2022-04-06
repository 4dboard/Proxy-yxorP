<?php /* yxorP */
/* yxorP */
/* yxorP */

namespace Predis\Connection\Aggregate;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use Predis\Command\CommandInterface;
use Predis\Connection\NodeConnectionInterface;
use Predis\NotSupportedException;
use Predis\Replication\ReplicationStrategy;
use RuntimeException;

abstract class MasterSlaveReplication implements ReplicationInterface
{
    protected ReplicationStrategy $strategy;
    protected $master;
    protected array $slaves;
    protected $current;

    #[Pure] public function __construct(ReplicationStrategy $strategy = null)
    {
        $this->slaves = array();
        $this->strategy = $strategy ?: new ReplicationStrategy();
    }

    public function add(NodeConnectionInterface $connection)
    {
        $alias = $connection->getParameters()->alias;

        if ($alias === 'master') {
            $this->master = $connection;
        } else {
            $this->slaves[$alias ?: count($this->slaves)] = $connection;
        }

        $this->reset();
    }

    protected function reset(): void
    {
        $this->current = null;
    }

    public function remove(NodeConnectionInterface $connection): bool
    {
        if ($connection->getParameters()->alias === 'master') {
            $this->master = null;
            $this->reset();

            return true;
        }

        if (($id = array_search($connection, $this->slaves, true)) !== false) {
            unset($this->slaves[$id]);
            $this->reset();

            return true;
        }

        return false;
    }

    public function switchTo($connection)
    {
        $this->check();

        if (!$connection instanceof NodeConnectionInterface) {
            $connection = $this->getConnectionById($connection);
        }
        if ($connection !== $this->master && !in_array($connection, $this->slaves, true)) {
            throw new InvalidArgumentException('Invalid connection or connection not found.');
        }

        $this->current = $connection;
    }

    protected function check(): void
    {
        if (!isset($this->master) || !$this->slaves) {
            throw new RuntimeException('Replication needs one master and at least one slave.');
        }
    }

    public function getConnectionById($connectionId)
    {
        if ($connectionId === 'master') {
            return $this->master;
        }

        return $this->slaves[$connectionId] ?? null;
    }

    public function getCurrent()
    {
        return $this->current;
    }

    public function getMaster()
    {
        return $this->master;
    }

    public function getSlaves(): array
    {
        return array_values($this->slaves);
    }

    public function getReplicationStrategy(): ReplicationStrategy
    {
        return $this->strategy;
    }

    public function isConnected(): bool
    {
        return $this->current ? $this->current->isConnected() : false;
    }

    public function connect()
    {
        if ($this->current === null) {
            $this->check();
            $this->current = $this->pickSlave();
        }

        $this->current->connect();
    }

    protected function pickSlave()
    {
        return $this->slaves[array_rand($this->slaves)];
    }

    public function disconnect()
    {
        $this->master?->disconnect();

        foreach ($this->slaves as $connection) {
            $connection->disconnect();
        }
    }

    public function writeRequest(CommandInterface $command)
    {
        $this->getConnection($command)->writeRequest($command);
    }

    /**
     * @throws NotSupportedException
     */
    public function getConnection(CommandInterface $command)
    {
        if ($this->current === null) {
            $this->check();
            $this->current = $this->strategy->isReadOperation($command)
                ? $this->pickSlave()
                : $this->master;

            return $this->current;
        }

        if ($this->current === $this->master) {
            return $this->current;
        }

        if (!$this->strategy->isReadOperation($command)) {
            $this->current = $this->master;
        }

        return $this->current;
    }

    public function readResponse(CommandInterface $command): mixed
    {
        return $this->getConnection($command)->readResponse($command);
    }

    public function executeCommand(CommandInterface $command): mixed
    {
        return $this->getConnection($command)->executeCommand($command);
    }

    public function __sleep()
    {
        return array('master', 'slaves', 'strategy');
    }
}
