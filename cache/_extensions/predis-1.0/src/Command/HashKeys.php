<?php /* yxorP */


namespace Predis\Command;


class HashKeys extends Command
{

    public function getId(): string
    {
        return 'HKEYS';
    }
}
