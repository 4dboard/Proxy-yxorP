<?php /* yxorP */

namespace Predis\Command;
class ServerSlaveOf extends Command
{

    public function getId(): string
    {
        return 'SLAVEOF';
    }

    protected function filterArguments(array $arguments): array
    {
        if (count($arguments) === 0 || $arguments[0] === 'NO ONE') {
            return array('NO', 'ONE');
        }

        return $arguments;
    }
}
