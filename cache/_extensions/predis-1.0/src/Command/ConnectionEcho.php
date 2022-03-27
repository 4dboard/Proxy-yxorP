<?php /* yxorP */


namespace Predis\Command;


class ConnectionEcho extends Command
{

    public function getId(): string
    {
        return 'ECHO';
    }
}
