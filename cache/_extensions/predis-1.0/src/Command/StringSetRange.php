<?php /* yxorP */


namespace Predis\Command;


class StringSetRange extends Command
{

    public function getId(): string
    {
        return 'SETRANGE';
    }
}
