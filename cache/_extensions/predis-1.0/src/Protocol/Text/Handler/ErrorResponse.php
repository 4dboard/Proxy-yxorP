<?php /* yxorP */

namespace Predis\Protocol\Text\Handler;

use Predis\Connection\CompositeConnectionInterface;
use Predis\Response\Error;

class ErrorResponse implements ResponseHandlerInterface
{

    #[Pure] public function handle(CompositeConnectionInterface $connection, $payload): Error
    {
        return new Error($payload);
    }
}
