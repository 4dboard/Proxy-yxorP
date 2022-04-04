<?php /* yxorP */

namespace Predis\Protocol\Text;

use JetBrains\PhpStorm\Pure;
use Predis\Command\CommandInterface;
use Predis\CommunicationException;
use Predis\Connection\CompositeConnectionInterface;
use Predis\Protocol\ProtocolException;
use Predis\Protocol\ProtocolProcessorInterface;
use Predis\Response\Error as ErrorResponse;
use Predis\Response\Iterator\MultiBulk as MultiBulkIterator;
use Predis\Response\Status as StatusResponse;

class ProtocolProcessor implements ProtocolProcessorInterface
{
    protected bool $mbiterable;
    protected RequestSerializer $serializer;

    #[Pure] public function __construct()
    {
        $this->mbiterable = false;
        $this->serializer = new RequestSerializer();
    }

    public function write(CompositeConnectionInterface $connection, CommandInterface $command)
    {
        $request = $this->serializer->serialize($command);
        $connection->writeBuffer($request);
    }

    /**
     * @throws CommunicationException
     */
    public function read(CompositeConnectionInterface $connection)
    {
        $chunk = $connection->readLine();
        $prefix = $chunk[0];
        $payload = substr($chunk, 1);

        switch ($prefix) {
            case '+':
                return new StatusResponse($payload);

            case '$':
                $size = (int)$payload;
                if ($size === -1) {
                    return null;
                }

                return substr($connection->readBuffer($size + 2), 0, -2);

            case '*':
                $count = (int)$payload;

                if ($count === -1) {
                    return null;
                }
                if ($this->mbiterable) {
                    return new MultiBulkIterator($connection, $count);
                }

                $multibulk = array();

                for ($i = 0; $i < $count; $i++) {
                    $multibulk[$i] = $this->read($connection);
                }

                return $multibulk;

            case ':':
                return (int)$payload;

            case '-':
                return new ErrorResponse($payload);

            default:
                CommunicationException::handle(new ProtocolException(
                    $connection, "Unknown response prefix: '$prefix'."
                ));
        }
    }

    public function useIterableMultibulk($value): void
    {
        $this->mbiterable = (bool)$value;
    }
}
