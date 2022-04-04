<?php /* yxorP */

namespace Predis\Command;
class KeyRestore extends Command
{

    public function getId(): string
    {
        return 'RESTORE';
    }
}
