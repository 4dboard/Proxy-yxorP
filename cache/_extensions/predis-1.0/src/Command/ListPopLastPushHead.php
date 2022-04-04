<?php /* yxorP */

namespace Predis\Command;
class ListPopLastPushHead extends Command
{

    public function getId(): string
    {
        return 'RPOPLPUSH';
    }
}
