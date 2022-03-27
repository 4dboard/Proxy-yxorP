<?php /* yxorP */


namespace Predis\Connection;


interface FactoryInterface
{

    public function define($scheme, $initializer);


    public function undefine($scheme);


    public function create($parameters);


    public function aggregate(AggregateConnectionInterface $aggregate, array $parameters);
}
