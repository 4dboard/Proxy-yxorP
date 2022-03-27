<?php /* yxorP */


namespace Predis\Command;


class ConnectionSelect extends Command
{

    public function getId(): string
    {
        return 'SELECT';
    }
}
