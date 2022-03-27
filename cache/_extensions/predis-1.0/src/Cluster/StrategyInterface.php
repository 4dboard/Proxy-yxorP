<?php /* yxorP */


namespace Predis\Cluster;

use Predis\Command\CommandInterface;


interface StrategyInterface
{

    public function getSlot(CommandInterface $command);


    public function getSlotByKey($key);


    public function getDistributor();
}
