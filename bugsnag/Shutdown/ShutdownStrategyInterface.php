<?php namespace yxorP\bugsnag\Shutdown;

use yxorP\bugsnag\Client;

interface ShutdownStrategyInterface
{
    public function registerShutdownStrategy(Client $client);
}