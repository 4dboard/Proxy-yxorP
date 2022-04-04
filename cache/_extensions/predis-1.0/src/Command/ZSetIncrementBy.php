<?php /* yxorP */

namespace Predis\Command;
class ZSetIncrementBy extends Command
{

    public function getId(): string
    {
        return 'ZINCRBY';
    }
}
