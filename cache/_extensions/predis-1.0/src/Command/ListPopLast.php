<?php /* yxorP */


namespace Predis\Command;


class ListPopLast extends Command
{

    public function getId(): string
    {
        return 'RPOP';
    }
}
