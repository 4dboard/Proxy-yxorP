<?php /* yxorP */


namespace Predis\Command;


class ZSetReverseRange extends ZSetRange
{

    public function getId(): string
    {
        return 'ZREVRANGE';
    }
}
