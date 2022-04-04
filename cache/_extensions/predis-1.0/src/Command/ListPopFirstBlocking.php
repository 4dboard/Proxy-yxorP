<?php /* yxorP */

namespace Predis\Command;
class ListPopFirstBlocking extends Command
{

    public function getId(): string
    {
        return 'BLPOP';
    }

    protected function filterArguments(array $arguments)
    {
        if (count($arguments) === 2 && is_array($arguments[0])) {
            [$arguments, $timeout] = $arguments;
            $arguments[] = $timeout;
        }

        return $arguments;
    }
}
