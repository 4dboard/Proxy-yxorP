<?php /* yxorP */


namespace Predis\Command;


class StringIncrementByFloat extends Command
{

    public function getId(): string
    {
        return 'INCRBYFLOAT';
    }
}
