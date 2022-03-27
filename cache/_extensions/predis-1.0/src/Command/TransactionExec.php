<?php /* yxorP */


namespace Predis\Command;


class TransactionExec extends Command
{

    public function getId(): string
    {
        return 'EXEC';
    }
}
