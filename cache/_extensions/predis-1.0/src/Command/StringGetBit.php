<?php /* yxorP */


namespace Predis\Command;


class StringGetBit extends Command
{

    public function getId(): string
    {
        return 'GETBIT';
    }
}
