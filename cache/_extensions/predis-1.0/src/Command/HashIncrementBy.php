<?php /* yxorP */


namespace Predis\Command;


class HashIncrementBy extends Command
{

    public function getId(): string
    {
        return 'HINCRBY';
    }
}
