<?php /* yxorP */


namespace Predis\Command;


class StringSet extends Command
{

    public function getId(): string
    {
        return 'SET';
    }
}
