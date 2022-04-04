<?php /* yxorP */

namespace Predis\Command;
class ListPushHeadX extends Command
{

    public function getId(): string
    {
        return 'LPUSHX';
    }
}
