<?php /* yxorP */

namespace Predis\Command;
class ServerTime extends Command
{

    public function getId(): string
    {
        return 'TIME';
    }
}
