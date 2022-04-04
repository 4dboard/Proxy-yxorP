<?php /* yxorP */

namespace Predis\Command;
class ZSetRemoveRangeByScore extends Command
{

    public function getId(): string
    {
        return 'ZREMRANGEBYSCORE';
    }
}
