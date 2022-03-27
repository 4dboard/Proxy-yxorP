<?php /* yxorP */


namespace Predis\Command;


class ServerFlushAll extends Command
{

    public function getId(): string
    {
        return 'FLUSHALL';
    }
}
