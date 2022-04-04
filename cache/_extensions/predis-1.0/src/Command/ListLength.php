<?php /* yxorP */

namespace Predis\Command;
class ListLength extends Command
{

    public function getId(): string
    {
        return 'LLEN';
    }
}
