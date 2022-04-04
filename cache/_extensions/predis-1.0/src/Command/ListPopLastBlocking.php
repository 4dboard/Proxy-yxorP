<?php /* yxorP */

namespace Predis\Command;
class ListPopLastBlocking extends ListPopFirstBlocking
{

    public function getId(): string
    {
        return 'BRPOP';
    }
}
