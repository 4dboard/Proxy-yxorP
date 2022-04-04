<?php /* yxorP */

namespace Predis\Command;
class ListInsert extends Command
{

    public function getId(): string
    {
        return 'LINSERT';
    }
}
