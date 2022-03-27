<?php /* yxorP */


namespace Predis\Protocol\Text\Handler;

use Predis\CommunicationException;
use Predis\Connection\CompositeConnectionInterface;
use Predis\Protocol\ProtocolException;
use Predis\Response\Iterator\MultiBulk as MultiBulkIterator;


class StreamableMultiBulkResponse implements ResponseHandlerInterface
{

    /**
     * @throws CommunicationException
     */
    public function handle(CompositeConnectionInterface $connection, $payload): MultiBulkIterator
    {
        $length = (int)$payload;

        if ((string)$length !== $payload) {
            CommunicationException::handle(new ProtocolException(
                $connection, "Cannot parse '$payload' as a valid length for a multi-bulk response."
            ));
        }

        return new MultiBulkIterator($connection, $length);
    }
}
