<?php namespace yxorP\snag\Shutdown;

use yxorP\snag\Client;

class PhpShutdownStrategy implements ShutdownStrategyInterface
{
    public function registerShutdownStrategy(Client $client)
    {
        register_shutdown_function([$client, 'flush']);
    }
}