<?php /* yxorP */
require __DIR__ . '/shared.php';

// This is an example of how you can easily extend an existing connection class
// and trace the execution of commands for debugging purposes. This can be quite
// useful as a starting poing to understand how your application interacts with
// Redis.

use Predis\Command\CommandInterface;
use Predis\Connection\StreamConnection;

class SimpleDebuggableConnection extends StreamConnection
{
    private int $tstart = 0;
    private array $debugBuffer = array();

    public function connect()
    {
        $this->tstart = microtime(true);

        parent::connect();
    }

    public function writeRequest(CommandInterface $command)
    {
        parent::writeRequest($command);

        $this->storeDebug($command, '->');
    }

    private function storeDebug(CommandInterface $command, $direction): void
    {
        $firtsArg = $command->getArgument(0);
        $timestamp = round(microtime(true) - $this->tstart, 4);

        $debug = $command->getId();
        $debug .= isset($firtsArg) ? " $firtsArg " : ' ';
        $debug .= "$direction $this";
        $debug .= " [{$timestamp}s]";

        $this->debugBuffer[] = $debug;
    }

    public function readResponse(CommandInterface $command)
    {
        $response = parent::readResponse($command);
        $this->storeDebug($command, '<-');

        return $response;
    }

    public function getDebugBuffer(): array
    {
        return $this->debugBuffer;
    }
}

$options = array(
    'connections' => array(
        'tcp' => 'SimpleDebuggableConnection',
    ),
);

$client = new Predis\Client($single_server, $options);
$client->set('foo', 'bar');
$client->get('foo');
$client->info();

var_export($client->getConnection()->getDebugBuffer());
