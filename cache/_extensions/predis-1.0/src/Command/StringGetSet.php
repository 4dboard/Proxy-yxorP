<?php /* yxorP */


namespace Predis\Command;


class StringGetSet extends Command
{

    public function getId(): string
    {
        return 'GETSET';
    }
}
