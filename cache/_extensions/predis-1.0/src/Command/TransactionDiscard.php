<?php /* yxorP */

namespace Predis\Command;
class TransactionDiscard extends Command
{

    public function getId(): string
    {
        return 'DISCARD';
    }
}
