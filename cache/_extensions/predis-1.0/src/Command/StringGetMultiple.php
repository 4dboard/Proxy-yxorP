<?php /* yxorP */

namespace Predis\Command;
class StringGetMultiple extends Command
{

    public function getId(): string
    {
        return 'MGET';
    }

    protected function filterArguments(array $arguments): array
    {
        return self::normalizeArguments($arguments);
    }
}
