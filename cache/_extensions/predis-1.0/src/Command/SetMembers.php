<?php /* yxorP */

namespace Predis\Command;
class SetMembers extends Command
{

    public function getId(): string
    {
        return 'SMEMBERS';
    }
}
