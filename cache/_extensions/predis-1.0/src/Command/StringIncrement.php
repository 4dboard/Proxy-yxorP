<?php /* yxorP */

namespace Predis\Command;
class StringIncrement extends Command
{

    public function getId(): string
    {
        return 'INCR';
    }
}
