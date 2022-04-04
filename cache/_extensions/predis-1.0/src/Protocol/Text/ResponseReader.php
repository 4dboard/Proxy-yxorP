<?php /* yxorP */

namespace Predis\Protocol\Text;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use Predis\CommunicationException;
use Predis\Connection\CompositeConnectionInterface;
use Predis\Protocol\ProtocolException;
use Predis\Protocol\ResponseReaderInterface;
use Predis\Protocol\Text\Handler\BulkResponse;
use Predis\Protocol\Text\Handler\ErrorResponse;
use Predis\Protocol\Text\Handler\IntegerResponse;
use Predis\Protocol\Text\Handler\MultiBulkResponse;
use Predis\Protocol\Text\Handler\StatusResponse;

class ResponseReader implements ResponseReaderInterface
{
    protected array $handlers;

    #[Pure] public function __construct()
    {
        $this->handlers = $this->getDefaultHandlers();
    }

    #[Pure] #[ArrayShape(['+' => StatusResponse::class, '-' => ErrorResponse::class, ':' => IntegerResponse::class, '$' => BulkResponse::class, '*' => MultiBulkResponse::class])] protected function getDefaultHandlers(): array
    {
        return array(
            '+' => new Handler\StatusResponse(),
            '-' => new Handler\ErrorResponse(),
            ':' => new Handler\IntegerResponse(),
            '$' => new Handler\BulkResponse(),
            '*' => new Handler\MultiBulkResponse(),
        );
    }

    public function setHandler($prefix, Handler\ResponseHandlerInterface $handler): void
    {
        $this->handlers[$prefix] = $handler;
    }

    public function getHandler($prefix)
    {
        return $this->handlers[$prefix] ?? null;
    }

    public function read(CompositeConnectionInterface $connection)
    {
        $header = $connection->readLine();

        if ($header === '') {
            try {
                $this->onProtocolError($connection, 'Unexpected empty reponse header.');
            } catch (CommunicationException $e) {
            }
        }

        $prefix = $header[0];

        if (!isset($this->handlers[$prefix])) {
            try {
                $this->onProtocolError($connection, "Unknown response prefix: '$prefix'.");
            } catch (CommunicationException $e) {
            }
        }

        try {
            return $this->handlers[$prefix]->handle($connection, substr($header, 1));
        } catch (CommunicationException $e) {
        }
    }

    /**
     * @throws CommunicationException
     */
    protected function onProtocolError(CompositeConnectionInterface $connection, $message): void
    {
        CommunicationException::handle(
            new ProtocolException($connection, $message)
        );
    }
}
