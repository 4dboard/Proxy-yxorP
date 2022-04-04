<?php /* yxorP */

namespace Predis\Command;
class KeyDelete extends Command
{

    public function getId(): string
    {
        return 'DEL';
    }

    protected function filterArguments(array $arguments): array
    {
        return self::normalizeArguments($arguments);
    }
}
