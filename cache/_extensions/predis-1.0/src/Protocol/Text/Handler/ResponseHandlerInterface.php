<?php /* yxorP */


namespace Predis\Protocol\Text\Handler;

use Predis\Connection\CompositeConnectionInterface;


interface ResponseHandlerInterface
{

    public function handle(CompositeConnectionInterface $connection, $payload);
}
