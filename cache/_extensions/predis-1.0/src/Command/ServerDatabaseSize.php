<?php /* yxorP */

namespace Predis\Command;
class ServerDatabaseSize extends Command
{

    public function getId(): string
    {
        return 'DBSIZE';
    }
}
