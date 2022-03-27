<?php /* yxorP */


namespace Predis\Command;


class ListSet extends Command
{

    public function getId(): string
    {
        return 'LSET';
    }
}
