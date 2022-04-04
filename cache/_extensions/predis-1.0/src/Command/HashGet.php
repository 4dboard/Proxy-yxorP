<?php /* yxorP */

namespace Predis\Command;
class HashGet extends Command
{

    public function getId(): string
    {
        return 'HGET';
    }
}
