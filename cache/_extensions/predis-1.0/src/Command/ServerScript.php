<?php /* yxorP */


namespace Predis\Command;


class ServerScript extends Command
{

    public function getId(): string
    {
        return 'SCRIPT';
    }
}
