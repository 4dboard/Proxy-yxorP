<?php /* yxorP */


namespace Predis\Command;


class ZSetCount extends Command
{

    public function getId(): string
    {
        return 'ZCOUNT';
    }
}
