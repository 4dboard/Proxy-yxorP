<?php /* yxorP */

namespace Predis\Command;
class TransactionWatch extends Command
{

    public function getId(): string
    {
        return 'WATCH';
    }

    protected function filterArguments(array $arguments): array
    {
        if (isset($arguments[0]) && is_array($arguments[0])) {
            return $arguments[0];
        }

        return $arguments;
    }
}
