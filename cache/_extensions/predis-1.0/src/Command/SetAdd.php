<?php /* yxorP */

namespace Predis\Command;
class SetAdd extends Command
{

    public function getId(): string
    {
        return 'SADD';
    }

    protected function filterArguments(array $arguments): array
    {
        return self::normalizeVariadic($arguments);
    }
}
