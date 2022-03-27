<?php /* yxorP */


namespace Predis\Command;


class ListPushHead extends ListPushTail
{

    public function getId(): string
    {
        return 'LPUSH';
    }
}
