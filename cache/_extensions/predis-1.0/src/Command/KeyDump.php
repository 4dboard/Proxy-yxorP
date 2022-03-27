<?php /* yxorP */


namespace Predis\Command;


class KeyDump extends Command
{

    public function getId(): string
    {
        return 'DUMP';
    }
}
