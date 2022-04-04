<?php /* yxorP */

namespace Predis\Connection;

use Predis\Command\CommandInterface;

interface ConnectionInterface extends NodeConnectionInterface
{

    public function connect();

    public function disconnect();

    public function isConnected();

    public function writeRequest(CommandInterface $command);

    public function readResponse(CommandInterface $command);

    public function executeCommand(CommandInterface $command);
}
