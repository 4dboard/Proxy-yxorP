<?php /* yxorP */

namespace Predis\Command;
class KeyKeys extends Command
{

    public function getId(): string
    {
        return 'KEYS';
    }
}
