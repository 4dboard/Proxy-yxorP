<?php /* yxorP */

namespace Predis\Command;
class ListIndex extends Command
{

    public function getId(): string
    {
        return 'LINDEX';
    }
}
