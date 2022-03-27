<?php /* yxorP */


namespace Predis\Command;


class SetDifferenceStore extends SetIntersectionStore
{

    public function getId(): string
    {
        return 'SDIFFSTORE';
    }
}
