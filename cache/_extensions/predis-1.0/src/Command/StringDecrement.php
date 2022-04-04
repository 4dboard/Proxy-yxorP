<?php /* yxorP */

namespace Predis\Command;
class StringDecrement extends Command
{

    public function getId(): string
    {
        return 'DECR';
    }
}
