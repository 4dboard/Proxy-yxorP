<?php /* yxorP */

namespace Predis\Command;
class StringSubstr extends Command
{

    public function getId(): string
    {
        return 'SUBSTR';
    }
}
