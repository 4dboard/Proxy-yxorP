<?php /* yxorP */


namespace Predis\Protocol\Text\Handler;

use Predis\Connection\CompositeConnectionInterface;
use Predis\Response\Status;


class StatusResponse implements ResponseHandlerInterface
{

    public function handle(CompositeConnectionInterface $connection, $payload): ?Status
    {
        return Status::get($payload);
    }
}
