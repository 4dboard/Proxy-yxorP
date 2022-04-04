<?php /* yxorP */

namespace Predis\Command;
class ListTrim extends Command
{

    public function getId(): string
    {
        return 'LTRIM';
    }
}
