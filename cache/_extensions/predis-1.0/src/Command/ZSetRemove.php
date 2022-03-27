<?php /* yxorP */


namespace Predis\Command;


class ZSetRemove extends Command
{

    public function getId(): string
    {
        return 'ZREM';
    }


    protected function filterArguments(array $arguments): array
    {
        return self::normalizeVariadic($arguments);
    }
}
