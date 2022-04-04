<?php /* yxorP */

namespace Predis\Command;
class ListPopLastPushHeadBlocking extends Command
{

    public function getId(): string
    {
        return 'BRPOPLPUSH';
    }
}
