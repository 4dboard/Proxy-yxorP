<?php /* yxorP */

namespace Predis\Command;
class HashDelete extends Command
{

    public function getId(): string
    {
        return 'HDEL';
    }

    protected function filterArguments(array $arguments): array
    {
        return self::normalizeVariadic($arguments);
    }
}
