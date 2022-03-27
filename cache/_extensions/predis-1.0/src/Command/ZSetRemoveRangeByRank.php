<?php /* yxorP */


namespace Predis\Command;


class ZSetRemoveRangeByRank extends Command
{

    public function getId(): string
    {
        return 'ZREMRANGEBYRANK';
    }
}
