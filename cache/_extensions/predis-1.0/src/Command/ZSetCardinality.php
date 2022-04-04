<?php /* yxorP */

namespace Predis\Command;
class ZSetCardinality extends Command
{

    public function getId(): string
    {
        return 'ZCARD';
    }
}
