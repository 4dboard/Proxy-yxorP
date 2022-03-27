<?php /* yxorP */


namespace Predis\Command;


class StringSetExpire extends Command
{

    public function getId(): string
    {
        return 'SETEX';
    }
}
