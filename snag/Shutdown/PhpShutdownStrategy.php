<?php namespace yxorP\bugsnag\Shutdown;

use yxorP\bugsnag\Client;

class PhpShutdownStrategy implements ShutdownStrategyInterface
{
    public function registerShutdownStrategy(Client $client)
    {
        register_shutdown_function([$client, 'flush']);
    }
}