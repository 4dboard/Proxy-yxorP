<?php /* yxorP */

namespace Predis\Command;
class TransactionUnwatch extends Command
{

    public function getId(): string
    {
        return 'UNWATCH';
    }
}
