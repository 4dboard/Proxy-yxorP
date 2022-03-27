<?php /* yxorP */


namespace Predis\Command;


class ServerCommand extends Command
{

    public function getId(): string
    {
        return 'COMMAND';
    }
}
