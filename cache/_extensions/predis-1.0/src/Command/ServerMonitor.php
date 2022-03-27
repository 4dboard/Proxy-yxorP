<?php /* yxorP */


namespace Predis\Command;


class ServerMonitor extends Command
{

    public function getId(): string
    {
        return 'MONITOR';
    }
}
