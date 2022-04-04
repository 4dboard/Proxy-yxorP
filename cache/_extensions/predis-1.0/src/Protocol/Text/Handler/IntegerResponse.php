<?php /* yxorP */

namespace Predis\Protocol\Text\Handler;

use Predis\CommunicationException;
use Predis\Connection\CompositeConnectionInterface;
use Predis\Protocol\ProtocolException;

class IntegerResponse implements ResponseHandlerInterface
{

    /**
     * @throws CommunicationException
     */
    public function handle(CompositeConnectionInterface $connection, $payload): ?int
    {
        if (is_numeric($payload)) {
            return (int)$payload;
        }

        if ($payload !== 'nil') {
            CommunicationException::handle(new ProtocolException(
                $connection, "Cannot parse '$payload' as a valid numeric response."
            ));
        }

        return null;
    }
}
