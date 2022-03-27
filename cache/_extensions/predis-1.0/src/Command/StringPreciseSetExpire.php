<?php /* yxorP */


namespace Predis\Command;


class StringPreciseSetExpire extends StringSetExpire
{

    public function getId(): string
    {
        return 'PSETEX';
    }
}
