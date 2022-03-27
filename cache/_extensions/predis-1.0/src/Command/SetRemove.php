<?php /* yxorP */


namespace Predis\Command;


class SetRemove extends Command
{

    public function getId(): string
    {
        return 'SREM';
    }


    protected function filterArguments(array $arguments): array
    {
        return self::normalizeVariadic($arguments);
    }
}
