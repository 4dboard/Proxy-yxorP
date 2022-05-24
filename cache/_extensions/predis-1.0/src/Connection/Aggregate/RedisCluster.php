<?php /* yxorP */

namespace Predis\Connection\Aggregate;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use OutOfBoundsException;
use Predis\Cluster\RedisStrategy as RedisClusterStrategy;
use Predis\Cluster\StrategyInterface;
use Predis\Command\CommandInterface;
use Predis\Command\RawCommand;
use Predis\Connection\FactoryInterface;
use Predis\Connection\NodeConnectionInterface;
use Predis\NotSupportedException;
use Predis\Response\ErrorInterface as ErrorResponseInterface;

abstract class RedisCluster implements ClusterInterface, IteratorAggregate, Countable
{
    private bool $useClusterSlots = true;
    private array $defaultParameters = array();
    private array $pool = array();
    private array $slots = array();
    private array $slotsMap;
    private RedisClusterStrategy|StrategyInterface $strategy;
    private FactoryInterface $connections;

    #[Pure] public function __construct(
        FactoryInterface  $connections,
        StrategyInterface $strategy = null
    )
    {
        $this->connections = $connections;
        $this->strategy = $strategy ?: new RedisClusterStrategy();
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
        if ($connection = $this->getRandomConnection()) {
            $connection->connect();
        }
    }

    protected function getRandomConnection(): mixed
    {
        if ($this->pool) {
            return $this->pool[array_rand($this->pool)];
        }
    }

    public function disconnect(): mixed
    {
        foreach ($this->pool as $connection) {
            $connection->disconnect();
        }
    }

    public function add(NodeConnectionInterface $connection): mixed
    {
        $this->pool[(string)$connection] = $connection;
        unset($this->slotsMap);
    }

    public function remove(NodeConnectionInterface $connection): bool
    {
        if (false !== $id = array_search($connection, $this->pool, true)) {
            unset(
                $this->pool[$id],
                $this->slotsMap
            );

            return true;
        }

        return false;
    }

    public function removeById($connectionID): bool
    {
        if (isset($this->pool[$connectionID])) {
            unset(
                $this->pool[$connectionID],
                $this->slotsMap
            );

            return true;
        }

        return false;
    }

    public function askSlotsMap(NodeConnectionInterface $connection = null): array
    {
        if (!$connection && !$connection = $this->getRandomConnection()) {
            return array();
        }

        $command = RawCommand::create('CLUSTER', 'SLOTS');
        $response = $connection->executeCommand($command);

        foreach ($response as $slots) {
            // We only support master servers for now, so we ignore subsequent
            // elements in the $slots array identifying slaves.
            [$start, $end, $master] = $slots;

            if ($master[0] === '') {
                $this->setSlots($start, $end, (string)$connection);
            } else {
                $this->setSlots($start, $end, $master[0] . ":" . $master[1]);
            }
        }

        return $this->slotsMap;
    }

    /**
     * @throws NotSupportedException
     */
    public function executeCommand(CommandInterface $command)
    {
        $connection = $this->getConnection($command);
        $response = $connection->executeCommand($command);

        if ($response instanceof ErrorResponseInterface) {
            return $this->onErrorResponse($command, $response);
        }

        return $response;
    }

    /**
     * @throws NotSupportedException
     */
    public function getConnection(CommandInterface $command)
    {
        $slot = $this->strategy->getSlot($command);

        if (!isset($slot)) {
            throw new NotSupportedException(
                "Cannot use '{$command->getId()}' with redis-cluster."
            );
        }

        return $this->slots[$slot] ?? $this->getConnectionBySlot($slot);
    }

    public function getConnectionBySlot($slot)
    {
        if ($slot < 0x0000 || $slot > 0x3FFF) {
            throw new OutOfBoundsException("Invalid slot [$slot].");
        }

        if (isset($this->slots[$slot])) {
            return $this->slots[$slot];
        }

        $connectionID = $this->guessNode($slot);

        if (!$connection = $this->getConnectionById($connectionID)) {
            $connection = $this->createConnection($connectionID);
            $this->pool[$connectionID] = $connection;
        }

        return $this->slots[$slot] = $connection;
    }

    protected function guessNode($slot)
    {
        if (!isset($this->slotsMap)) {
            $this->buildSlotsMap();
        }

        if (isset($this->slotsMap[$slot])) {
            return $this->slotsMap[$slot];
        }

        $count = count($this->pool);
        $index = min((int)($slot / (int)(16384 / $count)), $count - 1);
        $nodes = array_keys($this->pool);

        return $nodes[$index];
    }

    public function buildSlotsMap(): void
    {
        $this->slotsMap = array();

        foreach ($this->pool as $connectionID => $connection) {
            $parameters = $connection->getParameters();

            if (!isset($parameters->slots)) {
                continue;
            }

            $slots = explode('-', $parameters->slots, 2);
            $this->setSlots($slots[0], $slots[1], $connectionID);
        }
    }

    public function setSlots($first, $last, $connection): void
    {
        if ($first < 0x0000 || $first > 0x3FFF ||
            $last < 0x0000 || $last > 0x3FFF ||
            $last < $first
        ) {
            throw new OutOfBoundsException(
                "Invalid slot range for $connection: [$first-$last]."
            );
        }

        $slots = array_fill($first, $last - $first + 1, (string)$connection);
        $this->slotsMap = $this->getSlotsMap() + $slots;
    }

    public function getSlotsMap(): array
    {
        if (!isset($this->slotsMap)) {
            $this->slotsMap = array();
        }

        return $this->slotsMap;
    }

    public function getConnectionById($connectionID)
    {
        return $this->pool[$connectionID] ?? null;
    }

    protected function createConnection($connectionID)
    {
        $host = explode(':', $connectionID, 2);

        $parameters = array_merge($this->defaultParameters, array(
            'host' => $host[0],
            'port' => $host[1],
        ));

        return $this->connections->create($parameters);
    }

    protected function onErrorResponse(CommandInterface $command, ErrorResponseInterface $error)
    {
        $details = explode(' ', $error->getMessage(), 2);

        return match ($details[0]) {
            'MOVED' => $this->onMovedResponse($command, $details[1]),
            'ASK' => $this->onAskResponse($command, $details[1]),
            default => $error,
        };
    }

    protected function onMovedResponse(CommandInterface $command, $details)
    {
        [$slot, $connectionID] = explode(' ', $details, 2);

        if (!$connection = $this->getConnectionById($connectionID)) {
            $connection = $this->createConnection($connectionID);
        }

        if ($this->useClusterSlots) {
            $this->askSlotsMap($connection);
        }

        $this->move($connection, $slot);
        return $this->executeCommand($command);
    }

    protected function move(NodeConnectionInterface $connection, $slot): void
    {
        $this->pool[(string)$connection] = $connection;
        $this->slots[(int)$slot] = $connection;
    }

    protected function onAskResponse(CommandInterface $command, $details)
    {
        [$slot, $connectionID] = explode(' ', $details, 2);

        if (!$connection = $this->getConnectionById($connectionID)) {
            $connection = $this->createConnection($connectionID);
        }

        $connection->executeCommand(RawCommand::create('ASKING'));
        return $connection->executeCommand($command);
    }

    /**
     * @throws NotSupportedException
     */
    public function writeRequest(CommandInterface $command)
    {
        $this->getConnection($command)->writeRequest($command);
    }

    /**
     * @throws NotSupportedException
     */
    public function readResponse(CommandInterface $command)
    {
        return $this->getConnection($command)->readResponse($command);
    }

    public function count(): int
    {
        return count($this->pool);
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator(array_values($this->pool));
    }

    public function getClusterStrategy(): StrategyInterface|RedisClusterStrategy
    {
        return $this->strategy;
    }

    public function getConnectionFactory(): FactoryInterface
    {
        return $this->connections;
    }

    public function useClusterSlots($value): void
    {
        $this->useClusterSlots = (bool)$value;
    }

    public function setDefaultParameters(array $parameters): void
    {
        $this->defaultParameters = array_merge(
            $this->defaultParameters,
            $parameters ?: array()
        );
    }
}
