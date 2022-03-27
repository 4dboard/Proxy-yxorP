<?php /* yxorP */


namespace Predis\Command;


class ListRemove extends Command
{

    public function getId(): string
    {
        return 'LREM';
    }
}
