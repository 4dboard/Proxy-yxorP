<?php /* yxorP */


namespace Predis\Command;


class ListPushTailX extends Command
{

    public function getId(): string
    {
        return 'RPUSHX';
    }
}
