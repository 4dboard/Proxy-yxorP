<?php /* yxorP */


namespace Predis\Command;


class TransactionMulti extends Command
{

    public function getId(): string
    {
        return 'MULTI';
    }
}
