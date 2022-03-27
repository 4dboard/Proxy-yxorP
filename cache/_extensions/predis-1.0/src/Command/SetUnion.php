<?php /* yxorP */


namespace Predis\Command;


class SetUnion extends SetIntersection
{

    public function getId(): string
    {
        return 'SUNION';
    }
}
