<?php /* yxorP */

namespace Predis\Command;
class SetDifference extends SetIntersection
{

    public function getId(): string
    {
        return 'SDIFF';
    }
}
