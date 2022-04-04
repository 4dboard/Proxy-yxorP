<?php /* yxorP */

namespace Predis\Command;
class StringIncrementBy extends Command
{

    public function getId(): string
    {
        return 'INCRBY';
    }
}
