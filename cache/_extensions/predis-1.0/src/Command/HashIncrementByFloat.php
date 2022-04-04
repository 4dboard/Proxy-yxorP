<?php /* yxorP */

namespace Predis\Command;
class HashIncrementByFloat extends Command
{

    public function getId(): string
    {
        return 'HINCRBYFLOAT';
    }
}
