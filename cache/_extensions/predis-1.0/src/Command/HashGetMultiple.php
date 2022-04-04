<?php /* yxorP */

namespace Predis\Command;
class HashGetMultiple extends Command
{

    public function getId(): string
    {
        return 'HMGET';
    }

    protected function filterArguments(array $arguments): array
    {
        return self::normalizeVariadic($arguments);
    }
}
