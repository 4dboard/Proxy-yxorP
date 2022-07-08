<?php namespace yxorP\bugsnag\Shutdown;

use Bugsnag\Client;

interface ShutdownStrategyInterface
{
    public function registerShutdownStrategy(Client $client);
}