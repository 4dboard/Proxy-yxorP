<?php /* yxorP */


namespace Predis\Command;


class ZSetReverseRank extends Command
{

    public function getId(): string
    {
        return 'ZREVRANK';
    }
}
