<?php /* yxorP */

namespace Predis\Command;
class StringAppend extends Command
{

    public function getId(): string
    {
        return 'APPEND';
    }
}
