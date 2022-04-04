<?php /* yxorP */

namespace Predis\Command;
class ZSetRank extends Command
{

    public function getId(): string
    {
        return 'ZRANK';
    }
}
