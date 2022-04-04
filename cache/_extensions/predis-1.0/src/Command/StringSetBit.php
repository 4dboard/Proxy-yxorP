<?php /* yxorP */

namespace Predis\Command;
class StringSetBit extends Command
{

    public function getId(): string
    {
        return 'SETBIT';
    }
}
