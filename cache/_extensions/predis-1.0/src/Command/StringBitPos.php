<?php /* yxorP */


namespace Predis\Command;


class StringBitPos extends Command
{

    public function getId(): string
    {
        return 'BITPOS';
    }
}
