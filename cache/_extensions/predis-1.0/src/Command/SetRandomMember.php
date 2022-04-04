<?php /* yxorP */

namespace Predis\Command;
class SetRandomMember extends Command
{

    public function getId(): string
    {
        return 'SRANDMEMBER';
    }
}
