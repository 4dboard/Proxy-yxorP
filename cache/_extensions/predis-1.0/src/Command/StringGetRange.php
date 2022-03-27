<?php /* yxorP */


namespace Predis\Command;


class StringGetRange extends Command
{

    public function getId(): string
    {
        return 'GETRANGE';
    }
}
