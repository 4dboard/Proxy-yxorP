<?php /* yxorP */


namespace Predis\Command;


class ServerShutdown extends Command
{

    public function getId(): string
    {
        return 'SHUTDOWN';
    }
}
