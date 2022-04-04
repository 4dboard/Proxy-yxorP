<?php /* yxorP */

namespace Predis\Command;
class ConnectionPing extends Command
{

    public function getId(): string
    {
        return 'PING';
    }
}
