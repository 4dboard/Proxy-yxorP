<?php /* yxorP */

namespace Predis\Command;
class HashLength extends Command
{

    public function getId(): string
    {
        return 'HLEN';
    }
}
