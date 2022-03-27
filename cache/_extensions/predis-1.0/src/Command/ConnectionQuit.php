<?php /* yxorP */


namespace Predis\Command;


class ConnectionQuit extends Command
{

    public function getId(): string
    {
        return 'QUIT';
    }
}
