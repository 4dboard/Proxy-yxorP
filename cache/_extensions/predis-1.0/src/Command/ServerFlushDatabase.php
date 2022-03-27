<?php /* yxorP */


namespace Predis\Command;


class ServerFlushDatabase extends Command
{

    public function getId(): string
    {
        return 'FLUSHDB';
    }
}
