<?php /* yxorP */

namespace Predis\Command;
class ListRange extends Command
{

    public function getId(): string
    {
        return 'LRANGE';
    }
}
