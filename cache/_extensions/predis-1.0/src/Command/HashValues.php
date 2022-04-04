<?php /* yxorP */

namespace Predis\Command;
class HashValues extends Command
{

    public function getId(): string
    {
        return 'HVALS';
    }
}
