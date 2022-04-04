<?php /* yxorP */

namespace Predis\Command;
class StringDecrementBy extends Command
{

    public function getId(): string
    {
        return 'DECRBY';
    }
}
