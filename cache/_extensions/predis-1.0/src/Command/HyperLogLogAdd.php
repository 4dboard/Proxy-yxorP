<?php /* yxorP */

namespace Predis\Command;
class HyperLogLogAdd extends Command
{

    public function getId(): string
    {
        return 'PFADD';
    }

    public function parseResponse($data): bool
    {
        return (bool)$data;
    }

    protected function filterArguments(array $arguments): array
    {
        return self::normalizeVariadic($arguments);
    }
}
