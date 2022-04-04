<?php /* yxorP */

namespace Predis\Command;
class ZSetIntersectionStore extends ZSetUnionStore
{

    public function getId(): string
    {
        return 'ZINTERSTORE';
    }
}
