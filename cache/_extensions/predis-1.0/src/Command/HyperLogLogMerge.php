<?php /* yxorP */

namespace Predis\Command;
class HyperLogLogMerge extends Command
{

    public function getId(): string
    {
        return 'PFMERGE';
    }

    protected function filterArguments(array $arguments): array
    {
        return self::normalizeArguments($arguments);
    }
}
