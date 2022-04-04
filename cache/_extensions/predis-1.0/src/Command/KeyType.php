<?php /* yxorP */

namespace Predis\Command;
class KeyType extends Command
{

    public function getId(): string
    {
        return 'TYPE';
    }
}
