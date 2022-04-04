<?php /* yxorP */

namespace Predis\Command;
class ListPopFirst extends Command
{

    public function getId(): string
    {
        return 'LPOP';
    }
}
