<?php /* yxorP */

namespace Predis\Command;
class KeyRename extends Command
{

    public function getId(): string
    {
        return 'RENAME';
    }
}
