<?php /* yxorP */

namespace Predis\Connection;

use Predis\Command\CommandInterface;

interface AggregateConnectionInterface extends ConnectionInterface
{

    public function add(NodeConnectionInterface $connection);

    public function remove(NodeConnectionInterface $connection);

    public function getConnection(CommandInterface $command);

    public function getConnectionById($connectionID);
}
