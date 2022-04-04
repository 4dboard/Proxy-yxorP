<?php /* yxorP */

namespace Predis\Command;
class ServerObject extends Command
{

    public function getId(): string
    {
        return 'OBJECT';
    }
}
