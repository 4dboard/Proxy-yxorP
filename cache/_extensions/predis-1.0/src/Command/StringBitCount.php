<?php /* yxorP */

namespace Predis\Command;
class StringBitCount extends Command
{

    public function getId(): string
    {
        return 'BITCOUNT';
    }
}
