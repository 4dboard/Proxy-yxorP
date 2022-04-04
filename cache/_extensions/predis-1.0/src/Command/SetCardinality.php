<?php /* yxorP */

namespace Predis\Command;
class SetCardinality extends Command
{

    public function getId(): string
    {
        return 'SCARD';
    }
}
