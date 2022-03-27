<?php /* yxorP */


namespace Predis\Command;


class ListPushTail extends Command
{

    public function getId(): string
    {
        return 'RPUSH';
    }


    protected function filterArguments(array $arguments): array
    {
        return self::normalizeVariadic($arguments);
    }
}
