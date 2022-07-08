<?php namespace yxorP\snag\Shutdown;

use yxorP\snag\Client;

interface ShutdownStrategyInterface
{
    public function registerShutdownStrategy(Client $client);
}