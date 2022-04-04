<?php /* yxorP */

namespace Predis\Command;
class SetIntersection extends Command
{

    public function getId(): string
    {
        return 'SINTER';
    }

    protected function filterArguments(array $arguments): array
    {
        return self::normalizeArguments($arguments);
    }
}
