<?php /* yxorP */

namespace Predis\Command;
class SetUnionStore extends SetIntersectionStore
{

    public function getId(): string
    {
        return 'SUNIONSTORE';
    }
}
