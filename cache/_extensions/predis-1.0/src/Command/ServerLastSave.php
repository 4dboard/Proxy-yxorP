<?php /* yxorP */

namespace Predis\Command;
class ServerLastSave extends Command
{

    public function getId(): string
    {
        return 'LASTSAVE';
    }
}
