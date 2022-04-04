<?php /* yxorP */

namespace Predis\Command;
class ZSetReverseRangeByScore extends ZSetRangeByScore
{

    public function getId(): string
    {
        return 'ZREVRANGEBYSCORE';
    }
}
