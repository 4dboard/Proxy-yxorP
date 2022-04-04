<?php /* yxorP */

namespace Predis\Protocol;

use Predis\Command\CommandInterface;
use Predis\Connection\CompositeConnectionInterface;

interface ProtocolProcessorInterface
{

    public function write(CompositeConnectionInterface $connection, CommandInterface $command);

    public function read(CompositeConnectionInterface $connection);
}
