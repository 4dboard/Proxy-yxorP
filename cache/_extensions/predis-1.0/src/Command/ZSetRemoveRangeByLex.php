<?php /* yxorP */


namespace Predis\Command;


class ZSetRemoveRangeByLex extends Command
{

    public function getId(): string
    {
        return 'ZREMRANGEBYLEX';
    }
}
