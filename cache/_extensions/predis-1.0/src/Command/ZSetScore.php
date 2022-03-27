<?php /* yxorP */


namespace Predis\Command;


class ZSetScore extends Command
{

    public function getId(): string
    {
        return 'ZSCORE';
    }
}
