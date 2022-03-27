<?php /* yxorP */


namespace Predis\Protocol\Text;

use Predis\Command\CommandInterface;
use Predis\Connection\CompositeConnectionInterface;
use Predis\Protocol\ProtocolProcessorInterface;
use Predis\Protocol\RequestSerializerInterface;
use Predis\Protocol\ResponseReaderInterface;


class CompositeProtocolProcessor implements ProtocolProcessorInterface
{

    protected $serializer;


    protected $reader;


    public function __construct(
        RequestSerializerInterface $serializer = null,
        ResponseReaderInterface    $reader = null
    )
    {
        $this->setRequestSerializer($serializer ?: new RequestSerializer());
        $this->setResponseReader($reader ?: new ResponseReader());
    }

    public function setRequestSerializer(RequestSerializerInterface $serializer): void
    {
        $this->serializer = $serializer;
    }

    public function setResponseReader(ResponseReaderInterface $reader): void
    {
        $this->reader = $reader;
    }

    public function write(CompositeConnectionInterface $connection, CommandInterface $command)
    {
        $connection->writeBuffer($this->serializer->serialize($command));
    }

    public function read(CompositeConnectionInterface $connection)
    {
        return $this->reader->read($connection);
    }

    public function getRequestSerializer()
    {
        return $this->serializer;
    }

    public function getResponseReader()
    {
        return $this->reader;
    }
}
