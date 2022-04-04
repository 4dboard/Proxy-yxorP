<?php /* yxorP */

namespace Predis\Command;
class ZSetLexCount extends Command
{

    public function getId(): string
    {
        return 'ZLEXCOUNT';
    }
}
