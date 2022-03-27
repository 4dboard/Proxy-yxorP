<?php /* yxorP */


namespace Predis\Command;


class StringStrlen extends Command
{

    public function getId(): string
    {
        return 'STRLEN';
    }
}
