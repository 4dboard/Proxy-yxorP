<?php /* yxorP */


namespace Predis\Connection\Aggregate;

use Predis\Connection\AggregateConnectionInterface;


interface ReplicationInterface extends AggregateConnectionInterface
{

    public function switchTo($connection);


    public function getCurrent();


    public function getMaster();


    public function getSlaves();
}
