<?php /* yxorP */


namespace Predis\Connection;

use Predis\Command\CommandInterface;


interface NodeConnectionInterface extends ConnectionInterface
{

    public function __toString();


    public function getResource();


    public function getParameters();


    public function addConnectCommand(CommandInterface $command);


    public function read();
}
