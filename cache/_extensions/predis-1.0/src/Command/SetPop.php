<?php /* yxorP */

namespace Predis\Command;
class SetPop extends Command
{

    public function getId(): string
    {
        return 'SPOP';
    }
}
