<?php /* yxorP */

namespace Predis;

use Predis\Connection\NodeConnectionInterface;

abstract class CommunicationException extends PredisException
{
    private NodeConnectionInterface $connection;

    public function __construct(
        NodeConnectionInterface $connection,
                                $message = null,
                                $code = null,
        Exception               $innerException = null
    )
    {
        parent::__construct($message, $code, $innerException);
        $this->connection = $connection;
    }

    /**
     * @throws CommunicationException
     */
    public
    static function handle(CommunicationException $exception): void
    {
        if ($exception->shouldResetConnection()) {
            $connection = $exception->getConnection();

            if ($connection->isConnected()) {
                $connection->disconnect();
            }
        }

        throw $exception;
    }

    public function shouldResetConnection(): bool
    {
        return true;
    }

    public function getConnection(): NodeConnectionInterface
    {
        return $this->connection;
    }
}
