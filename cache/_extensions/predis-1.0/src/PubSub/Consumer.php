<?php /* yxorP */


namespace Predis\PubSub;

use Predis\ClientException;
use Predis\ClientInterface;
use Predis\Command\Command;
use Predis\Connection\AggregateConnectionInterface;
use Predis\NotSupportedException;


class Consumer extends AbstractConsumer
{
    private ClientInterface $client;
    private array $options;


    /**
     * @throws NotSupportedException
     */
    public function __construct(ClientInterface $client, array $options = null)
    {
        $this->checkCapabilities($client);

        $this->options = $options ?: array();
        $this->client = $client;

        $this->genericSubscribeInit('subscribe');
        $this->genericSubscribeInit('psubscribe');
    }

    /**
     * @throws NotSupportedException
     */
    private function checkCapabilities(ClientInterface $client): void
    {
        if ($client->getConnection() instanceof AggregateConnectionInterface) {
            throw new NotSupportedException(
                'Cannot initialize a PUB/SUB consumer over aggregate connections.'
            );
        }

        $commands = array('publish', 'subscribe', 'unsubscribe', 'psubscribe', 'punsubscribe');

        if ($client->getProfile()->supportsCommands($commands) === false) {
            throw new NotSupportedException(
                'The current profile does not support PUB/SUB related commands.'
            );
        }
    }

    private function genericSubscribeInit($subscribeAction): void
    {
        if (isset($this->options[$subscribeAction])) {
            $this->$subscribeAction($this->options[$subscribeAction]);
        }
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    protected function writeRequest($method, $arguments)
    {
        $this->client->getConnection()->writeRequest(
            $this->client->createCommand($method,
                Command::normalizeArguments($arguments)
            )
        );
    }


    protected function disconnect()
    {
        $this->client->disconnect();
    }


    /**
     * @throws ClientException
     */
    protected function getValue(): object
    {
        $response = $this->client->getConnection()->read();

        switch ($response[0]) {
            case self::SUBSCRIBE:
            case self::UNSUBSCRIBE:
            case self::PSUBSCRIBE:
            case self::PUNSUBSCRIBE:
                if ($response[2] === 0) {
                    $this->invalidate();
                }
                break;


            case self::MESSAGE:
                return (object)array(
                    'kind' => $response[0],
                    'channel' => $response[1],
                    'payload' => $response[2],
                );

            case self::PMESSAGE:
                return (object)array(
                    'kind' => $response[0],
                    'pattern' => $response[1],
                    'channel' => $response[2],
                    'payload' => $response[3],
                );

            case self::PONG:
                return (object)array(
                    'kind' => $response[0],
                    'payload' => $response[1],
                );

            default:
                throw new ClientException(
                    "Unknown message type '{$response[0]}' received in the PUB/SUB context."
                );
        }
    }
}
