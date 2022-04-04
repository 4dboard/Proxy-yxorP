<?php /* yxorP */

namespace Predis\Command;
class ConnectionAuth extends Command
{

    public function getId(): string
    {
        return 'AUTH';
    }
}
